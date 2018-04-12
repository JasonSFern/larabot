@extends('layout')

@section('articles')

<div id="app">
  <div class="content-container">

    <div class="articlehead">
      <h2>Articles by {{ $user->name }}</h2>
      <br>
      <br>
    </div>

    <?php foreach($articles as $article): ?>

        <div class="box">
          <h2><?php echo $article->title ?></h2>
          <p><?php echo $article->content ?></p>
          <br>
          <h3><i class="far fa-thumbs-up fa-lg"></i></a> <?php echo count($article->likes) ?> users like this | <i class="fas fa-comment fa-lg"></i> <?php echo count($article->comments) ?> Comments</h3>
        </div>

    <?php endforeach ?>

@endsection
