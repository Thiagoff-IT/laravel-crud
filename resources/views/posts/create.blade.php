@extends('layout')

@section('content')
    <h1>Criar Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required></textarea>
        <button type="submit">Salvar</button>
    </form>
@endsection
