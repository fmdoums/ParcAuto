<?php
require_once "models/front/APIManager.php";


class APIController {

    private $apiManager;

    public function __construct() {
        $this->apiManager = new APIManager();
    }

    public function getCars() {
        $cars = $this->apiManager->getDBCars();
        $result = $this->formatCarsDataLines($cars);
        /* echo "<pre>";
        print_r($result);
        echo "</pre>"; */
        Model::sendJSON($result);
    }

    public function getCar($idCar) {
        $car = $this->apiManager->getDBCar($idCar);
        $result = $this->formatCarsDataLines($idCar);
        /* echo "<pre>";
        print_r($result);
        echo "</pre>"; */
        Model::sendJSON($result);
    }

    private function formatCarsDataLines($lines) {
        $tab = [];
        foreach ($lines as $line) {
            if (!array_key_exists($line['voiture_id'], $tab)) {
                $tab[$line['voiture_id']] = [
                    "id" => $line['voiture_id'],
                    "marque" => $line['marque'],
                    "nbPortes" => $line['nb_portes'],
                    "annee" => $line['annee'],
                    "modele" => $line['model'],
                    "categorie" => [
                        "idCategorie" => $line['categ_id'],
                        "libCategorie" => $line['categ_nom']
                    ],
                    "motorisation" => $line['motorisation'],
                    "boite" => $line['boite']
                ];
            }
        }
        
        return $tab;
    }

    public function getCategories() {
        $categories = $this->apiManager->getDBCategories();
        Model::sendJSON($categories);
    }
}
