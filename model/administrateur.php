<?php
class administrateur extends Model
{
    private $id;
    private $nom;
    private $prenom;
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
    public function Add($nom, $prenom, $email, $telephone, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->password = $password;
        $hashedPassword = $this->ashpassword();
        $query = "INSERT INTO {$this->table} (`Nom`, `prenom`, `email`, `telephone`, `password`) VALUES ('{$this->nom}', '{$this->prenom}', '{$this->email}', '{$this->telephone}', '{$hashedPassword}')";
        $this->requete($query);
    }
    public function findSomeone()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE email = \'' . $this->email . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function connexion($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $result = $this->findSomeone();
        if ($result == null) {
            return false;
        } else {
            $verify =  $this->verifyPassword($result[0]['password']);
            if ($verify == true) {
                $this->password = $result[0]['password'];
                $this->nom = $result[0]['nom'];
                $this->prenom = $result[0]['prenom'];
                $this->telephone = $result[0]['telephone'];
                $this->id = $result[0]['id'];
                return true;
            } else {
                return false;
            }
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
