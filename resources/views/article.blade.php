@extends('layout')

@section('articles')

<div>
  <div class="content-container">
    <h2>Post Your Article</h2>

    <form method="post">
      <?php echo csrf_field() ?>

        <div class="form-input">
          <input id="title" placeholder="Type your content articles title here" type="text" name="title" maxlength="45" required autofocus>
        </div>

        <div class="form-input">
          <textarea name="content" rows="8" cols="80" placeholder="Type your content here" maxlength="900" required autofocus></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Post Article
        </button>

    </form>

@endsection
