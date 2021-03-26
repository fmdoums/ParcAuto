<?php
require_once "models/front/APIManager.php";

class APIController {

    private $apiManager;

    public function __construct() {
        $this->apiManager = new APIManager();
        
    }

    public function getCars() {
        $cars = $this->apiManager->getDBCars();
        echo "<pre>";
        print_r($cars);
        echo "</pre>";
    }

    public function getCar($idVoiture)
    {
        echo "envoi des informations sur la voiture id ". $idVoiture . " ";
    }

    public function getCategories()
    {
        echo "envoi des informations sur les categories";
    }
}
