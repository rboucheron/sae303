<?php 
include 'Model.php';

class Adherent extends Model
{
    public $nom; 
    private $prenom; 
    private $civilite; 
    private $naissance; 
    private $email; 
    private $telephone; 
    private $password; 

    public function __construct($nom, $prenom, $civilite, $naissance, $email, $telephone, $password) 
    {
        parent::__construct();
        $this->nom = $nom; 
        $this->prenom = $prenom; 
        $this->civilite = $civilite; 
        $this->naissance = $naissance; 
        $this->email = $email; 
        $this->telephone = $telephone; 
        $this->password = $password; 
        $this->table = __CLASS__;
    }
    public function requete(string $sql) {
        $this->db = DatabaseHandler::getInstance();
        return $this->db->query($sql);
    }
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        var_dump($query);
        return $query->fetchAll();
    }
    public function findSomeone() {
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE email = \'' . $this->email . '\'');
        var_dump($query);
        return $query->fetchAll(); 
    }
    public function Add() {
    
        $hashedPassword = $this->ashpassword();
        $query = "INSERT INTO {$this->table} (`Nom`, `prenom`, `civilité`, `naissance`, `email`, `telephone`, `password`) VALUES ('{$this->nom}', '{$this->prenom}', '{$this->civilite}', '{$this->naissance}', '{$this->email}', '{$this->telephone}', '{$hashedPassword}')";
        $this->requete($query);
    }
    public function connexion()
    {
        $result = $this->findSomeone();
        $verify =  $this->verifyPassword($result[0]['password']); 
        if ($verify == true){
            $this->password = $result[0]['password']; 
            $this->nom = $result[0]['Nom']; 
            $this->prenom = $result[0]['prenom']; 
            $this->civilite = $result[0]['civilité'];
            $this->telephone = $result[0]['telephone'];

        }else{
            return "mot de passe incorrect";
        }
    }
    private function ashpassword()
    {
        return password_hash($this->password, PASSWORD_DEFAULT);
    }
    private function verifyPassword($password)
    {
        if (password_verify($this->password, $password)) {
            return true;
        } else {
            return false;
        }
    }

 


}




