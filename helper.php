<?php
	require_once("config.php");

    function icon()
    {
        return "assets/img/icon.png";   
    }

    function css($fn)
    {
    	return "assets/css/". $fn;
    }

    function js($fn)
    {
    	return "assets/js/". $fn;
    }

    function img($fn)
    {
    	return "assets/img/". $fn;
    }
    
    function hiddenFile($fn)
    {
        $f=strtolower($fn);
        $search = array_search($f, CNF_HIDDEN_FILES);
        if($search === false)
        {
        	return true;
        }
        else
        {
        	return false;
        }
    }

    function getDirName($dir = CNF_DEFAULT_SCANDIR)
    {
    	return array_diff(scandir($dir), array('.','..'));
    }
    
    function lastModify($fn){
        $lastModifiedTimestamp = filemtime(CNF_DEFAULT_SCANDIR."/".$fn);
        $lastModifiedDatetime = date("d M Y H:i:s", $lastModifiedTimestamp);
        
        return $lastModifiedDatetime;
    }
    
    function autoLink($fn){
        $z = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        return '<a href="'. $z .'?a='. $fn .'" class="kc">'. $fn .'</a>';
    }

    function secureHttp()
    {
    	$a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    	return $a."://";
    }
    
    function currentHost()
    {
        $z = $_SERVER["HTTP_HOST"];

        $y = array_search($z, ['localhost','127.0.0.1']);
        if($y === false)
        {
        	return $z;
        } 
        else 
        {
        	return $z."/".CNF_LOCALHOST_DIR;
        }
        
        return $z;
    }

    function currentUrl()
    {
        $z = $_SERVER["HTTP_HOST"];

        $y = array_search($z, ['localhost','127.0.0.1']);
        if($y === false)
        {
        	return secureHttp() . $z;
        } 
        else 
        {
        	return secureHttp() . $z."/".CNF_LOCALHOST_DIR;
        }
        
        return $z;
    }

    function iframeUrl($path)
    {
        $z = $_SERVER["HTTP_HOST"];

        $y = array_search($z, ['localhost','127.0.0.1']);
        if($y === false)
        {
        	return secureHttp() . $z."/". CNF_DEFAULT_SCANDIR."/".$path;
        } 
        else 
        {
        	return secureHttp() . $z ."/".CNF_LOCALHOST_DIR."/". CNF_DEFAULT_SCANDIR."/".$path;
        }
    }
    
    function getSize($fn, $precision=2)
    {
        $bytes = filesize(CNF_DEFAULT_SCANDIR."/".$fn);
        
        $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1);
    
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
    
    function err404($fn)
    {
        $files = getDirName();
        $key = array_search($fn, $files);
        
        return $key;
        
    }
?>