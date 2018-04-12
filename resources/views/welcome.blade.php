@extends('layout')

@section('miniForm')

@guest

<div class="form-box">

  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <h4>Login</h4>
    <div class="greyborder"></div>
    <br>

    <div class="form-input {{ $errors->has('email') ? ' has-error' : '' }}">
        <div>
            <input id="email" placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-input {{ $errors->has('password') ? ' has-error' : '' }}">
        <div>
            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div>
      <div class="inline-block">
        <p><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</p>
        <p><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
        <p>Not registered? Click <a href="{{ route('register') }}">Here</a></p>
      </div>

      <div class="inline-block float-right">
        <button type="submit" class="btn">Login</button>
      </div>
    </div>
  </form>

</div>

@else
<div class="form-box">
    <h4>You are logged in as {{ Auth::user()->name }}</h4>
    <div class="greyborder"></div>
    <br>

    <div>

      <div class="flex flex-row justify-space">
        <button href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" type="submit" class="btn">Log-out</button>
        <a href="/contact"><input type="button" class="btn" value="Contact Us"></a>

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
          <h2>Welcome Fellow Couch Potatoes!!!</h2>
          <p>Check out what other users are saying!! Look below for the latest talk of the community. Members of our community can posts their thought about the Couch Potato Lifestyle.</p>

      @guest
          <br>
          <p>It appears that you are not a member. Becoming a member is very easy. Simply head to our registration page by clicking on the button bellow, and fill out the form to become a member. Or if you wish you may store your contact information, and we can get back to you</p>
          <a href="/register"><input type="button" class="btn" value="Register"></a>
          <a href="/contact"><input type="button" class="btn" value="Contact Us"></a>

      @else
          <br>
          <p>To start posting simply click the button below to get started</p>
          <a href="/article"><input type="button" class="btn" value="Create Article"></a>
          <br>
      @endguest
        </div>

        <br>
        <br>
        <div class="articlehead">
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
