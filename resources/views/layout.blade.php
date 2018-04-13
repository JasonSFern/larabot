<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Canadian Couch Potatoe</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Roboto+Condensed:400,700,900" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>

    <body class='' style="text-align:center;">

      <div class="">
      <div class="banner">
            <a href="/"><img src="/img/lblogo.png" alt=""></a>
      </div>

      <div>
        @yield('miniForm')
      </div>

      <div class="flex flex-row links">
        <div>
        </div>
      </div>

<main #id="app">

      @yield('articles')

<!-- <main>
      </div>

      <div class="right-container search-input">

        <div class="search">
          <h4>Search Articles...</h4>
          <div class="greyborder"></div>
          <input type="search" name="search" value="Search">
          <br><br><br>
        </div>

        @yield('adverts')

            <div class="category-selection">
              <h4 class="">Previous Posts</h4>
              <div class="greyborder"></div>

              <li>
                <p>&#9654; 2018</p>
                <p>&#9654; 2017</p>
                <p>&#9654; 2016</p>
                <p>&#9654; 2015</p>
                <p>&#9654; 2014</p>
                <p>&#9654; 2013</p>
                <p>&#9654; 2012</p>
                <p>&#9654; 2011</p>
                <p>&#9654; 2010</p>
              </li>

              <br>
              <h4>Categories</h4>
              <div class="greyborder"></div>

              <li>
                <p>Ask the Spud (30)</p>
                <p>Asset classes (59)</p>
                <p>Behavioral finance (49)</p>
                <p>Bonds (57)</p>
                <p>Book reviews (46)</p>
                <p>Commodities (9)</p>
                <p>Discount brokers (44)</p>
                <p>Dividends (34)</p>
                <p>ETFs (201)</p>
                <p>Financial planning (21)</p>
                <p>Foreign currency (38)</p>
                <p>Index funds (51)</p>
                <p>Indexes (56)</p>
                <p>Indexing basics (97)</p>
                <p>New products (90)</p>
                <p>Podcast (17)</p>
                <p>Research (78)</p>
                <p>Smart beta (16)</p>
                <p>Taxes (67)</p>
                <p>Uncategorized (5)</p>
                <p>Under the Hood (11)</p>
              </li>

            </div>
          </div>
        </div>
        </section> -->

    </body>

<script type="text/javasccript" src="/js/app.js"></script>
</html>
