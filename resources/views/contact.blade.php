@extends('layout')

@section('articles')

<div>
  <div class="content-container">

    <div class="articlehead">
      <h2>Comments</h2>
    </div>

    <?php foreach($contacts as $contact): ?>

        <div class="comment">
          <p><strong>Name:</strong> <?php echo $contact->name ?></p>
          <p><strong>Message:</strong> <?php echo $contact->message ?></p>
        </div>

    <?php endforeach ?>

    <h2>Contact Us</h2>

    <P>Feel free to post your concerns and general comments in the form down below. Comments can be seen by other, but your email will remain private. We will get back to you as soon as possible.</p>

    <form method="post">
        <?php echo csrf_field() ?>

        <div class="form-input {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="form-input">
                <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-input {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="form-input">
                <input id="email" placeholder="E-mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-input">
          <textarea name="message" rows="8" cols="80" placeholder="Message" maxlength="900" required autofocus></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

@endsection
