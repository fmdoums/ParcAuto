<?php
require_once "models/Model.php";

class APIManager extends Model{

    public function getDBCars() {
        $req = "SELECT * FROM voiture v join categorie c on v.categorie=c.categ_id ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $cars;
    }

    public function getDBCar($idCar) {
        $req = "SELECT * FROM voiture v join categorie c on v.categorie=c.categ_id WHERE v.voiture_id = :idCar";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idCar", $idCar, PDO::PARAM_INT);
        $stmt->execute();
        $car = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $car;
    }

    public function getDBCategories() {
        $req = "SELECT * FROM categorie";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $categories;
    }
}
