@extends('layout.layoutBlog')

@section('title', 'Página Principal del Blog')

@section('content')
    <section class="section">
        @include('blog.sectionServices')
    </section>
@endsection
