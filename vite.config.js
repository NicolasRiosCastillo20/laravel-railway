import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Asegúrate de que esta opción esté habilitada
        outDir: 'public/build', // Verifica que la salida esté configurada correctamente
    },
});
