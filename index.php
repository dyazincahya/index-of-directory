<?php require_once('helper.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="apps by kang cahya">
    <meta name="author" content="Kang Cahya">
    <meta name="generator" content="Hugo 0.79.0">
    <meta name="theme-color" content="#27AE61">
    <title>Homepage - <?=currentHost();?></title>

    <link rel="canonical" href="https://kang-cahya.com">

    
    <link href="<?=css('bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?=icon();?>" sizes="180x180">
    <link rel="icon" href="<?=icon();?>" sizes="32x32" type="image/png">
    <link rel="icon" href="<?=icon();?>" sizes="16x16" type="image/png">
    <!--link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3"-->
    <link rel="icon" href="<?=icon();?>">
    
    <style>
        a.kc {
            color: #27AE61;
        }
    </style>
</head>
<body>
    <?php if(!isset($_REQUEST['a'])) {?>
        <div class="container-md" style="margin-top:20px;">
            <h1>Index of /<span style="font-size:15px;"><?=currentHost();?></span></h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>NO</th>
                          <th>NAME</th>
                          <th>SIZE</th>
                          <th>LAST UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            $files = getDirName();
                            foreach($files as $key => $file){
                                if(hiddenFile($file)){
                                    echo '
                                        <tr>
                                          <td>'. ($i+1) .'</td>
                                          <td>'. autoLink($file) .'</td>
                                          <td>'. getSize($file) .'</td>
                                          <td>'. lastModify($file) .'</td>
                                        </tr>
                                    ';
                                    $i++;
                                }
                            }
                            if($i === 0){
                                echo '
                                    <tr>
                                      <td colspan="4">No data!</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div style="overflow-x: hidden; overflow-y: hidden; -ms-overflow-style: none; scrollbar-width: none;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #27AE61;">
              <div class="container-fluid">
                <a class="navbar-brand" href="https://<?=currentUrl();?>"><b>&laquo; BACK TO</b> /<span style="font-size:15px;"><?=currentUrl();?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </nav>
            <div>
                <?php if(err404($_REQUEST['a']) !== false){ ?>
                    <iframe src="<?=iframeUrl($_REQUEST['a']);?>" title="description" height="100%" width="100%" style="border: none; height: 100vh;">
                <?php } else { 
                    header('Location: http://'. currentUrl() . '/' . $_REQUEST['a']);
                    exit;
                } ?>
            </div>
        </div>
    <?php } ?>
    
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#" class="kc">Back to top</a>
            </p>
            <p class="mb-1"><?=date("Y");?> &copy; Kang cahya.</p>
            <p class="mb-0"><a href="https://www.kang-cahya.com/" target="_blank" class="kc">Visit the homepage</a>.</p>
        </div>
    </footer>

    <script src="<?=js('bootstrap.bundle.min.js');?>" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
