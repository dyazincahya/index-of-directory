<?php
    function hiddenFile($fn){
        $f=strtoupper($fn);
        $ret=true;
        switch ($f) {
            case ".HTACCESS":
                $ret=false;
            break;
            case ".WELL-KNOWN":
                $ret=false;
            break;
            case "CGI-BIN":
                $ret=false;
            break;
            case "ERROR_LOG":
                $ret=false;
            break;
            case "INDEX.PHP":
                $ret=false;
            break;
            default:
                $ret=true;
        }
        
        return $ret;
    }
    
    function lastModify($fn){
        $lastModifiedTimestamp = filemtime($fn);
        $lastModifiedDatetime = date("d M Y H:i:s", $lastModifiedTimestamp);
        
        return $lastModifiedDatetime;
    }
    
    function autoLink($fn){
        $z = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        return '<a href="'. $z . $fn .'" class="kc">'. $fn .'</a>';
    }
    
    function currentUrl(){
        $z = $_SERVER["HTTP_HOST"];
        
        return $z;
    }
    
    function getSize($fn, $precision=2){
        $bytes = filesize($fn);
        
        $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1);
    
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="apps by kang cahya">
    <meta name="author" content="Kang Cahya">
    <meta name="generator" content="Hugo 0.79.0">
    <meta name="theme-color" content="#27AE61">
    <title>Homepage - <?=currentUrl();?></title>

    <link rel="canonical" href="https://kang-cahya.com">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    
    <style>
        a.kc {
            color: #27AE61;
        }
    </style>
</head>
<body style="margin-top:20px;">
    <div class="container-md">
        <h1>Index of /<span style="font-size:15px;"><?=currentUrl();?></span></h1>
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
                        $i=1;
                        $files = array_diff(scandir("."), array('.','..'));
                        foreach($files as $key => $file){
                            if(hiddenFile($file)){
                                echo '
                                    <tr>
                                      <td>'. ($i) .'</td>
                                      <td>'. autoLink($file) .'</td>
                                      <td>'. getSize($file) .'</td>
                                      <td>'. lastModify($file) .'</td>
                                    </tr>
                                ';
                                $i++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#" class="kc">Back to top</a>
            </p>
            <p class="mb-1"><?=date("Y");?> &copy; Kang cahya.</p>
            <p class="mb-0"><a href="https://www.kang-cahya.com/" target="_blank" class="kc">Visit the homepage</a>.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
