<?php

class Plane  extends Model
{

    private $modele;
    private $marque;
    private $immatriculation;
    private $type;
    private $id; 
    private $image; 
    private $description; 

    public function __construct()
    {
        $this->table = __CLASS__;
    }
    public function requete(string $sql)
    {
        $this->db = Database::getInstance();
        return $this->db->query($sql);
    }
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findSomeone($id)
    {
        try{
            $this->id = $id; 
            $query = $this->requete("SELECT * FROM {$this->table} WHERE id = {$this->id}");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch (Exception $e){
            return "erreur"; 
        }
       
    }
    public function Count()
    {
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Add($modele, $marque, $immatriculation, $type)
    {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->immatriculation = $immatriculation;
        $this->type = $type;
        $query = "INSERT INTO {$this->table} (`modele`, `marque`, `immatriculation`, `type`) VALUES ('{$this->modele}', '{$this->marque}', '{$this->immatriculation}', '{$this->type}')";
        $this->requete($query);
    }
}
