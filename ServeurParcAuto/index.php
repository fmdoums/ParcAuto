<?php
    define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
    
    try {
        if (empty($_GET['page'])) {
            throw new Exception("La page n'existe pas");
        } else {
            $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
            if (empty($url[0]) || empty($url[1])) throw new Exception("La page n'existe pas");
            switch ($url[0]) {
                case 'front':
                    echo "page front demandée";
                    break;
                case 'back':
                    echo "page back demandée";
                    break;
                default:
                    throw new Exception("La page n'existe pas");
                    break;
            }
        }
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo $msg;
    }
    
?>
