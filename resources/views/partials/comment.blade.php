@foreach ($article->comments as $comment)

  <div class="comment">
      <p>{{ $comment->content }} </p>
      <h3>{{ $comment->user->name }} </h3>
  </div>
  
@endforeach
