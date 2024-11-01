@extends('layout')

@section('content')
    <h1>Editar Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>
        <button type="submit">Salvar</button>
    </form>
@endsection
