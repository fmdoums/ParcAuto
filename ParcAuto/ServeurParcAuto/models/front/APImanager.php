<?php
require_once "models/Model.php";

class APIManager extends Model{

    public function getDBCars() {
        $req = "SELECT * FROM voiture";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $cars;
    }
}
