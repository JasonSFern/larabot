@if ($article->isLikedByCurrentUser())

    <h3><a href="/articles/{{ $article->id }}/like/toggle">
      <i class="fas fa-thumbs-up fa-lg"></i></a>
      <?php echo count($article->likes) ?> users like this | <i class="fas fa-comment fa-lg"></i>
      <?php echo count($article->comments) ?> Comments
    </h3>

@else

    <h3><a href="/articles/{{ $article->id }}/like/toggle">
      <i class="far fa-thumbs-up fa-lg"></i></a>
      <?php echo count($article->likes) ?> users like this | <i class="fas fa-comment fa-lg"></i>
      <?php echo count($article->comments) ?> Comments
    </h3>

@endif
