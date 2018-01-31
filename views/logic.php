<?php

    //this is for getting baseurl to work locally, 
    $baseurl  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
    $baseurl .= $_SERVER['SERVER_NAME'];
    if (strpos($baseurl, 'localhost') !== false) {
        $baseurl .= ":".$_SERVER['SERVER_PORT'];
    }

    //create base url for server and for all routing in app
    $cleanuri = explode('?', $_SERVER['REQUEST_URI'], 2);
    $cleanurizero = htmlspecialchars($cleanuri[0]);
    $baseurl .= $cleanurizero;

    $icons24 = glob('icons/*.{svg}', GLOB_BRACE);

    $iconsjson = file_get_contents("system/data/icons.json");
    $iconsdecode = json_decode($iconsjson, true);
    $iconsiterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($iconsdecode),RecursiveIteratorIterator::SELF_FIRST);

    //actions
    if(isset($_POST['iconname'])){ 
        $iconnamepost = $_POST['iconname'];
        $iconpathpost = $_POST['iconpath'];
        $updatexml = simplexml_load_file($iconpathpost) or die("Error: Cannot create object");

        if(isset($_POST['categoryinput'])){ 
            $iconcatpost = $_POST['categoryinput'];
            if (!isset($updatexml->cat)) {
               $updatexml->addChild('cat', $iconcatpost);
            }
            else{
                $updatexml->cat = $iconcatpost;
            }
        }

        header("Location: ".$_SERVER['REQUEST_URI']."#".$iconnamepost);
        exit();
    }

?>