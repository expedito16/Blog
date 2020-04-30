@extends('layouts.app')

@section('content')

<div class="clearfix">
    <h2 class="float-left">Lista de Postes Criados</h2>

    {{-- link to create new post --}}
    {{-- <a href="{{ route('posts.create') }}" class="btn btn-link float-right">Novo Poste</a> --}}
    <a href="{{ route('posts.create') }}" class="btn btn-primary float-right" role="button" aria-pressed="true">Novo Poste</a>
</div>

{{-- List all posts --}}
@forelse ($posts as $post)
    <div class="card m-2 shadow-sm">
        <div class="card-body">

            {{-- post title --}}
            <h4 class="card-title">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </h4>

            <p class="card-text">
                
                {{-- post owner --}}
                <small class="float-left">Postagem de: {{ $post->owner->name }}</small>

                {{-- check if the signed-in user is the post owner, then show edit post link --}}
                @if (auth()->id() == $post->owner->id )
                    {{-- edit post link --}}
                    <small class="float-right mr-2 ml-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="float-right">Editar</a>
                    </small>
                @endif

                {{-- creation time --}}
                <small class="float-right text-muted">{{ $post->created_at->format('M d, Y h:i A') }}</small>
                
                {{-- check if the signed-in user is the post owner, then show edit post link --}}
                {{-- @if (auth()->id() == $post->owner->id ) --}}
                    {{-- edit post link --}}
                    {{-- <small class="float-right mr-2 ml-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="float-right">Editar Postagem</a>
                    </small>
                @endif --}}
            </p>
        </div>
    </div>
@empty
    <p>Ainda não há posts, fique atento!</p>
@endforelse

@endsection
