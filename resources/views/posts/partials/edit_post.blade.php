<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PATCH')

    {{-- Post title --}}
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ $post->title }}"
                placeholder="Digite o título do seu cometário..."
                required />

        @if ($errors->has('title'))
            <small class="text-danger">{{ $errors->first('title') }}</small>
        @endif
    </div>
    {{-- End --}}

    {{-- Post body --}}
    <div class="form-group">
      <label for="body">Comentário</label>
      <textarea class="form-control"
                name="body"
                id="body"
                rows="3"
                placeholder="Digite o que você deseja compartilhar..."
                required
                style="resize: none;">{{ $post->body }}</textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>

    <div class="form-group float-right">
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('home') }}" type="button" class="btn btn-danger">Cancelar</a>
    </div>

</form>
