@extends('layout')

@section('miniForm')

@guest

<div class="form-box">

  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <h2>Login</h2>
    <!-- <div class="greyborder"></div>
    <br> -->

  <div>

    <div class="inline-block form-input {{ $errors->has('email') ? ' has-error' : '' }}">
        <div>
            <input id="email" placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="inline-block">
      <a href="/register"><input type="button" class="btn" value="Register"></a>
    </div>
  </div>

  <div>
    <div class="inline-block form-input {{ $errors->has('password') ? ' has-error' : '' }}">
        <div>
            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="inline-block">
      <button type="submit" class="btn">Login</button>
    </div>

  </div>

    <div>
      <div>
        <div class="inline-block ">
          <p><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</p>
        </div>
        <div class="inline-block ">
          <!-- <p><a href="{{ route('password.request') }}">Forgot Your Password?</a></p> -->
        </div>
      </div>
    </div>

    </div>


  </form>

</div>

@else
<div class="form-box">
    <h4>You are logged in as {{ Auth::user()->name }}</h4>
    <!-- <div class="greyborder"></div> -->

    <div>

      <div class="">
        <button href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" type="submit" class="btn">Log-out</button>
        <!-- <a href="/contact"><input type="button" class="btn" value="Contact Us"></a> -->

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </div>
    </div>
</div>

@endguest

@endsection

@section('articles')

  <div class="content-container">
      <div>

        <div class="intro">
          <h2>Welcome Fellow Humans!!!</h2>
          <p>Check out what other people are saying!! Look below for the latest talk of the planet. Members of the LaraBot community can posts their thoughts and ideas.</p>

      @guest
          <br>
          <p>It appears that you are not a member. Becoming a member is very easy. Simply head to our registration page by clicking on the button below, and fill out the form to become a member. Once you are a member, you will be on your way to posting!!!</p>
          <a href="/register"><input type="button" class="btn" value="Register"></a>

      @else
          <br>
          <p>To start posting simply click the button below to get started</p>
          <a href="/article"><input type="button" class="btn" value="Create Article"></a>
      @endguest
        </div>

        <br>
        <br>
        <br>
        <div class="">
          <h2>Articles</h2>
          <br>
          <br>
        </div>
      </div>

  <div class="content-container2">

    <?php foreach($articles as $article): ?>
        <div class="box">
          <h2><?php echo $article->title ?></h2>
          <p><?php echo $article->content ?></p>
          <br>
          <h3>Posted by <a href="/articles/{{ $article->user->id }}"><?php echo $article->user->name ?></a></h3>

          <br>
              @include('partials.like')
          <br>

          <ul>
              @include('partials.comment')
          </ul>

          <form class="search-input" method="post">
              <?php echo csrf_field() ?>
              <input id="articleId" input type="hidden" name="articleId" required value="<?php echo $article->id ?>"></input>
              <input id="comment" placeholder="Comment" name="content" maxlength="240" required>
              <button type="submit" class="btn">Post</button>
          </form>

          <br>
          <br>
        </div>
    <?php endforeach ?>

  </div>
@endsection

@section('adverts')
    <div>
      <?php foreach($advert1 as $advert1): ?>
        <img src="<?php echo $advert1->image ?>">
      <?php endforeach ?>
    </div>

    <br>
    <?php foreach($advert2 as $advert2): ?>
      <img class="vertical-align" style="margin-top:10px;" src="<?php echo $advert2->image ?>">
    <?php endforeach ?>
@endsection
