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
                    switch ($url[1]) {
                        case 'voitures':
                            echo "données JSON des voitures demandées";
                            break;
                        case 'voiture':
                            echo "données JSON de la voiture ". $url[2]. " demandée";
                            break;
                        case 'categorie':
                            echo "données JSON des catégorie demandée";
                            break;
                        default:
                            throw new Exception("La page n'existe pas");
                            break;
                    }
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
