<?php

class Plane  extends Model
{

    private $model;
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
        try {
            $this->id = $id;
            $query = $this->requete("SELECT * FROM {$this->table} WHERE id = {$this->id}");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return "erreur";
        }
    }
    public function Delete($id)
    {
        $this->id = $id; 

        $query = "DELETE FROM  {$this->table} WHERE id = {$this->id}";
        $this->requete($query);
    }
    public function Count()
    {
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Add($model, $marque, $immatriculation, $description, $type, $image)
    {
        $this->model = $model;
        $this->marque = $marque;
        $this->immatriculation = $immatriculation;
        $this->description = $description;
        $this->type = $type;
        $this->image = $image;

        $query = "INSERT INTO {$this->table} (`modele`, `marque`, `immatriculation`, `type`, `image`, `description`) VALUES ('$this->model', '$this->marque', '$this->immatriculation', '$this->type', '$this->image', '$this->description')";
        $this->requete($query);
    }
    public function update($model, $marque, $immatriculation, $description, $type, $id)
    {
        $this->model = $model;
        $this->marque = $marque;
        $this->immatriculation = $immatriculation;
        $this->description = $description;
        $this->type = $type;
        $this->id = $id;
        $query = "UPDATE {$this->table} SET `modele`='{$this->model}', `marque`='{$this->marque}', `immatriculation`='{$this->immatriculation}', `description`='{$this->description}', `type`='{$this->type}' WHERE id = {$this->id}";
        $this->requete($query);
    }
}
