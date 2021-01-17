<?php
    function icon(){
        return "https://4.bp.blogspot.com/-bJxsvMn8aW4/VxVw_6yUmdI/AAAAAAAAJFU/W4csasDfxagdgzT9-j-HHpIKh-ETQcUfgCPcB/s320/nature%2Bjpg.jpg";   
    }
    function currentUrl(){
        $z = $_SERVER["HTTP_HOST"];
        
        return $z;
    }
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="apps by kang cahya">
    <meta name="author" content="Kang Cahya">
    <meta name="generator" content="Hugo 0.79.0">
    <meta name="theme-color" content="#27AE61">
    <title>Error 404 - <?=currentUrl();?></title>

    <link rel="canonical" href="https://kang-cahya.com">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?=icon();?>" sizes="180x180">
    <link rel="icon" href="<?=icon();?>" sizes="32x32" type="image/png">
    <link rel="icon" href="<?=icon();?>" sizes="16x16" type="image/png">
    <!--link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3"-->
    <link rel="icon" href="<?=icon();?>">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      /* COVER.CSS */
      /*
         * Globals
         */
        
        
        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
          color: #333;
          text-shadow: none; /* Prevent inheritance from `body` */
        }
        
        
        /*
         * Base structure
         */
        
        body {
          text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
          box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }
        
        .cover-container {
          max-width: 42em;
        }
        
        
        /*
         * Header
         */
        
        .nav-masthead .nav-link {
          padding: .25rem 0;
          font-weight: 700;
          color: rgba(255, 255, 255, .5);
          background-color: transparent;
          border-bottom: .25rem solid transparent;
        }
        
        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
          border-bottom-color: rgba(255, 255, 255, .25);
        }
        
        .nav-masthead .nav-link + .nav-link {
          margin-left: 1rem;
        }
        
        .nav-masthead .active {
          color: #fff;
          border-bottom-color: #fff;
        }
    </style>

  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0" style="color:#212529;">ERROR 404</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <!--<a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>-->
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>ERROR 404 - PAGE NOT FOUND.</h1>
    <p class="lead">The requested URL was not found on this server. Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
    <p class="lead">
      <a href="https://<?=currentUrl();?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Back To Home</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p><a href="https://www.kang-cahya.com/" target="_blank" class="kc">www.kang-cahya.com</a></p>
  </footer>
</div>


    
  </body>
</html>