<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Experience;


class AdminController extends Controller
{
    public function index()
    {
        $isAdminPanel = true;
        return view('admin.index', compact('isAdminPanel'));
    }


    // funciones para contactos administrador


    public function adminContact()
    {
        $contacts = Contact::all();
        $isAdminPanel = true;
        return view('admin.contact', compact('contacts', 'isAdminPanel'));
    }


    public function getMessageContact($idContact)
    {
        $contactMessage = Contact::where('id', $idContact)->select('message')->first();
        if ($contactMessage) {
            $data = ['contactMessage' => $contactMessage->message];
            $view = View::make('admin.messageContact', $data)->render();
            return response()->json(['view' => $view], 200);
        }
        return response()->json(['error' => 'No Se Encontro Registrado'], 404);
    }


    public function deleteContact($idContact)
    {
        $contact = Contact::find($idContact);
        if ($contact) {
            $contact->delete();
            return response()->json(['message' => 'Eliminado Correctamente'], 200);
        }
        return response()->json(['error' => 'No Se Encuentra En Base De Datos '], 404);
    }


    // funciones para los servicios del administrador


    public function adminService()
    {
        $isAdminPanel = true;
        $services = Service::all();
        return view('admin.service', compact('isAdminPanel', 'services'));
    }


    public function fromCreateService()
    {
        $view = View::make('admin.modalCreateService')->render();
        return response()->json(['view' => $view], 200);
    }


    public function createService(Request $request)
    {
        // Manejar la carga de la imagen
        if ($request->hasFile('imagenService')) {
            $imagePath = $request->file('imagenService')->store('services', 'public');
        }

        // Guardar el servicio en la base de datos
        $service = new Service();
        $service->service = $request->input('service');
        $service->icon = $request->input('icon');
        $service->image_path = $imagePath ?? null;
        $service->short_description = $request->input('shortDescription');
        $service->long_description = $request->input('longDescription');
        $service->save();

        return response()->json(['message' => 'Servicio guardado con éxito']);
    }


    public function shortDescription($idService)
    {
        $shortDescription = Service::where('id', $idService)->select('short_description')->first();
        if ($shortDescription) {
            $data = ['shortDescription' => $shortDescription->short_description];
            $view = View::make('admin.shortDescription', $data)->render();
            return response()->json(['view' => $view], 200);
        }
        return response()->json(['error' => 'No Se Encontro Registrado'], 404);
    }


    public function longDescription($idService)
    {
        $longDescription = Service::where('id', $idService)->select('long_description')->first();
        if ($longDescription) {
            $data = ['longDescription' => $longDescription->long_description];
            return response()->json(['data' => $data], 200);
        }
        return response()->json(['error' => 'No Se Encontro Registrado'], 404);
    }


    public function deleteService($idService)
    {
        $service = Service::find($idService);
        if ($service) {
            $service->delete();
            return response()->json(['message' => 'Eliminado Correctamente'], 200);
        }
        return response()->json(['error' => 'No Se Encuentra En Base De Datos '], 404);
    }


    // funciones para las experiencias del administrador

    public function adminExperience()
    {
        $isAdminPanel = true;
        $experiences = Experience::all();
        return view('admin.experience', compact('isAdminPanel', 'experiences'));
    }


    public function fromCreateExperience()
    {
        $view = View::make('admin.modalCreateExperience')->render();
        return response()->json(['view' => $view], 200);
    }

    public function createExperience(Request $request)
    {
        // Manejar la carga de la imagen
        if ($request->hasFile('imagenExperience')) {
            $imagePath = $request->file('imagenExperience')->store('experiences', 'public');
        }

        // Guardar el servicio en la base de datos
        $experience = new Experience();
        $experience->experience = $request->input('experience');
        $experience->image_path = $imagePath ?? null;
        $experience->description = $request->input('description');
        $experience->experience_date = $request->input('experience_date');
        $experience->save();

        return response()->json(['message' => 'Servicio guardado con éxito']);
    }


    public function deleteExperience($idExperience){
        $experience = Experience::find($idExperience);
        if ($experience) {
            $experience->delete();
            return response()->json(['message' => 'Eliminado Correctamente'], 200);
        }
        return response()->json(['error' => 'No Se Encuentra En Base De Datos '], 404);
    }
}
