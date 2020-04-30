<form action="{{ route('replies.store', $comment->id) }}" method="POST" class="mb-2">
	@csrf

	<div class="input-group">
	  <input 
	  	name="new_reply" 
	  	type="text" 
	  	class="form-control" 
	  	placeholder="Digite sua resposta..."
	  	required>

	  <div class="input-group-append">
	    <button class="btn btn-primary" type="submit">Responder</button> 
	  </div>

	</div>

</form>