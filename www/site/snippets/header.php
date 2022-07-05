<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500&family=Petit+Formal+Script&display=swap" rel="stylesheet"> 
  <?= css([
    'assets/css/app.min.css',
    '@auto'
  ]) ?>

  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

<header class="header [  ]">
  <div class="header__contactdeet [ bg-primary pad-top-200 pad-bottom-200 text-300 ]">
    <div class="row">
      <ul>
        <li><span class="[ color-secondary ]">Call:</span> 07811 376300 </li>
        <li><span class="[ color-secondary text-900 ]">&middot;</span></li>
        <li>colin@chbarons.co.uk</li>
      </ul>
    </div>
  </div>

  <div class="header__inner [ pad-top-800 pad-bottom-800 ]">
    <div class="wrapper">
      <div class="nav-layout">
        <div class="brand">
        <a href="#"><svg version="1.1" id="bslogosymbol" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 111.1 111.1" style="enable-background:new 0 0 111.1 111.1;" xml:space="preserve">
        <g>
          <path class="bs1" d="M55.6,111.1C24.9,111.1,0,86.3,0,55.6S24.9,0,55.6,0s55.6,24.9,55.6,55.6c0,0,0,0,0,0
            C111.1,86.2,86.2,111.1,55.6,111.1z M55.6,2.7C26.4,2.7,2.7,26.4,2.7,55.6s23.7,52.9,52.8,52.9s52.9-23.7,52.9-52.8c0,0,0,0,0,0
            C108.4,26.4,84.7,2.8,55.6,2.7z"/>
          <path class="bs1" d="M75.8,70.8c-1.3-1.2-2.8-2.2-4.4-2.9c-1.2,0.5-2.5,1-3.8,1.3c0.4,0.2,0.8,0.5,1.2,0.8c2.2,1.8,3.4,4.6,3.4,8.4
            c0.1,2.3-0.6,4.6-1.8,6.6c-0.9,1.6-2.2,2.9-3.9,3.7c-1.7,0.7-3.6,1-5.4,0.9c-1.8,0.1-3.7-0.1-5.5-0.4c-1.2-0.3-1.8-0.7-2-1.1
            s-0.3-2.6-0.3-6.4l0.2-10.9c-0.1-0.9,0-1.8,0.3-2.7c0-0.1,0.1-0.3,0.2-0.4c1.3-0.1,2.6-0.2,3.7-0.2c2.6,0,5.2-0.5,7.7-1.2l0.6-0.2
            c0.8-0.2,1.5-0.5,2.1-0.7l0,0c0.9-0.4,1.9-0.8,2.8-1.2l0.1-0.1c1.2-0.6,2.4-1.5,3.3-2.5c1.7-1.8,2.5-4.2,2.5-6.6
            c0.1-3.1-1.3-6-3.8-7.8c-2.6-1.9-6-2.8-10.3-2.8c-1.2,0-3.9,0.1-8,0.3c-1.8,0.1-3.8,0.1-5.9,0.1c-0.8,0-1.6-0.1-2.4,0
            c-0.8-0.1-1.6,0-2.3,0.3c-0.2,0.1-0.3,0.4-0.4,0.6c0,0.3,0.2,0.5,0.4,0.7c0.3,0.2,0.7,0.4,1,0.6c1.2,0.8,1.4,2.5,1.6,3.8
            c0.1,0.4,0.1,0.7,0.2,1.1c0.2,1.3,0.3,2.9,0.4,4.8c1.7,2,3.8,3.6,6.2,4.7v-2.1c0-3.2,0.1-7.4,0.3-12.5c1.9-0.7,3.9-1,5.9-1.1
            c2.7-0.1,5.4,0.7,7.6,2.4c2,1.6,3,4,3,7.3c0,1.5-0.2,2.9-0.7,4.3c-0.5,1.2-1.3,2.3-2.3,3.2c-4.5,3-10.2,3.7-15.3,1.7
            c-1.7-0.7-3.2-1.8-4.6-3c-0.7-0.7-1.4-1.4-2.1-2.1c-3.7-4.2-5.5-9.6-5.5-16.2c0-3.8,0.7-7.5,2-11c1.1-3.1,3-5.8,5.6-7.9
            c2.2-1.8,5-2.8,7.9-2.8c3.4,0,6.6,1.3,9.1,3.5c2.8,2.5,5.1,5.7,6.5,9.2c0.4,1,0.8,1.5,1.2,1.5s0.4-0.1,0.5-0.2
            c0.1-0.4,0.1-0.9,0.1-1.3L71.9,22c0-0.9-0.3-1.3-0.8-1.3s-0.8,0.3-1,0.8c-0.6,0.9-1.4,1.7-2.2,2.3c-2.1-1.2-4.3-2.2-6.6-2.9
            c-2.1-0.6-4.2-1-6.3-1c-4,0-7.9,1.1-11.3,3.1c-3.6,2-6.5,5-8.5,8.7c-2,3.9-3.1,8.2-3,12.6c-0.1,4.3,1,8.6,3.1,12.4
            c2,3.5,4.9,6.3,8.4,8.3c1.2,0.7,2.4,1.2,3.7,1.7c-0.1,2.3-0.1,5.2-0.1,8.9c0.1,2.9-0.1,5.8-0.4,8.7c-0.1,1.4-0.5,2.7-1.2,3.9
            c-0.6,0.6-1.4,1.1-2.2,1.2c-1.6,0.3-2.5,0.5-2.7,0.6c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.4,0.4,0.7,1.3,0.7c2.5-0.1,7.4-0.2,14.6-0.2
            c0.1,0,0.9,0,2.2,0.1c2.2,0.1,3.7,0.2,4.7,0.2c5.2,0,9.2-1.3,11.9-4c2.5-2.2,3.9-5.4,4-8.8C79,75.5,77.9,72.7,75.8,70.8z"/>
        </g>
        </svg></a>  
      </div>
        <div class="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="social">
          <ul>
            <li>
              <a href="#">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 20 20">
                <title>facebook-with-circle</title>
                <path d="M10 0.4c-5.302 0-9.6 4.298-9.6 9.6s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6-4.298-9.6-9.6-9.6zM12.274 7.034h-1.443c-0.171 0-0.361 0.225-0.361 0.524v1.042h1.805l-0.273 1.486h-1.532v4.461h-1.703v-4.461h-1.545v-1.486h1.545v-0.874c0-1.254 0.87-2.273 2.064-2.273h1.443v1.581z"></path>
                </svg>
              </a>
            </li>
            <li><a href="#">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 20 20">
              <title>instagram-with-circle</title>
              <path d="M13 10c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-0.171 0.018-0.338 0.049-0.5h-1.049v3.997c0 0.278 0.225 0.503 0.503 0.503h6.995c0.277 0 0.502-0.225 0.502-0.503v-3.997h-1.049c0.031 0.162 0.049 0.329 0.049 0.5zM10 12c1.104 0 2-0.896 2-2s-0.896-2-2-2-2 0.896-2 2 0.896 2 2 2zM12.4 7.9h1.199c0.166 0 0.301-0.135 0.301-0.3v-1.199c0-0.166-0.135-0.301-0.301-0.301h-1.199c-0.166 0-0.301 0.135-0.301 0.301v1.199c0.001 0.165 0.136 0.3 0.301 0.3zM10 0.4c-5.302 0-9.6 4.298-9.6 9.6s4.298 9.6 9.6 9.6c5.302 0 9.6-4.298 9.6-9.6s-4.298-9.6-9.6-9.6zM15 13.889c0 0.611-0.5 1.111-1.111 1.111h-7.778c-0.611 0-1.111-0.5-1.111-1.111v-7.778c0-0.611 0.5-1.111 1.111-1.111h7.778c0.611 0 1.111 0.5 1.111 1.111v7.778z"></path>
              </svg>
            </a></li>
          </ul>
        </div>

        <button type="button" class="[ burger ] [ display-block lg:display-none ]" data-menu-toggle aria-label="Toggle menu" aria-expanded="false"><span></span></button>
      </div>
    </div>
  </div>
</header>
  <main class="main">
