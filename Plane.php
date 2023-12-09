<?php 
include 'Model.php';
class Plane  extends Model{
  
    private $modele; 
    private $marque; 
    private $immatriculation; 
    private $type; 
    public function __construct($modele, $marque, $immatriculation, $type) 
    {
        parent::__construct();
        $this->modele = $modele; 
        $this->marque = $marque; 
        $this->immatriculation = $immatriculation; 
        $this->type = $type; 
        $this->table = __CLASS__;
    }
    public function requete(string $sql) {
        $this->db = Database::getInstance();
        return $this->db->query($sql);
    }
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        var_dump($query);
        return $query->fetchAll();
    }
    public function Add() {
        $query = "INSERT INTO {$this->table} (`modele`, `marque`, `immatriculation`, `type`) VALUES ('{$this->modele}', '{$this->marque}', '{$this->immatriculation}', '{$this->type}')";
        $this->requete($query);
    }


}


?> 