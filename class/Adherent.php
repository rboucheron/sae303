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

    public function __construct()
    {
        parent::__construct();
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
        var_dump($query);
        return $query->fetchAll();
    }
    public function findSomeone()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE email = \'' . $this->email . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Add($nom, $prenom, $civilite, $naissance, $email, $telephone, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->civilite = $civilite;
        $this->naissance = $naissance;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->password = $password;
        $hashedPassword = $this->ashpassword();
        $query = "INSERT INTO {$this->table} (`Nom`, `prenom`, `civilité`, `naissance`, `email`, `telephone`, `password`) VALUES ('{$this->nom}', '{$this->prenom}', '{$this->civilite}', '{$this->naissance}', '{$this->email}', '{$this->telephone}', '{$hashedPassword}')";
        $this->requete($query);
    }
    public function connexion($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $result = $this->findSomeone();
        if ($result == null) {
            return "adresse email ou mot de passe incorrect";
        } else {
            $verify =  $this->verifyPassword($result[0]['password']);
            if ($verify == true) {
                $this->password = $result[0]['password'];
                $this->nom = $result[0]['Nom'];
                $this->prenom = $result[0]['prenom'];
                $this->naissance = $result[0]['naissance'];
                $this->civilite = $result[0]['civilité'];
                $this->telephone = $result[0]['telephone'];
                return "connexion effectuer";
            } else {
                return "mot de passe incorrect";
            }
        }
    }
    public function NewSession()
    {
        session_start();
        $_SESSION['nom'] = $this->nom;
        $_SESSION['prenom'] = $this->prenom;
        $_SESSION['naissance'] = $this->naissance;
        $_SESSION['civilite'] = $this->civilite;
        $_SESSION['email'] = $this->email;
        $_SESSION['telephone'] = $this->telephone;
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
