<?php

class Reservation extends Model
{
    private $date;
    private $heur;
    private $duree;
    private $adherent;
    private $plane;
    private $moniteur;
    private $id;
    public function __construct()
    {
        $this->table = __CLASS__;
    }
    public function requete(string $sql)
    {
        $this->db = Database::getInstance();
        return $this->db->query($sql);
    }
    public function Count()
    {
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function CountDay($date)
    {
        $this->date = $date;
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table . ' WHERE date = \'' . $this->date . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function CountMonth($date)
    {
        $cutdate = explode("-", $date);
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table . ' WHERE YEAR(date) = \'' . $cutdate[0]  . '\' AND MONTH(date) = \'' . $cutdate[1] . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Find($user, $plane)
    {
        $this->moniteur = $user;
        $this->plane = $plane;
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE  moniteur = \'' . $this->moniteur  . '\' AND plane = \'' . $this->plane . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function withoutAdheran($plane)
    {
        $this->plane = $plane;
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE adherent IS NULL AND plane = \'' . $this->plane . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Add($date, $heur, $duree, $moniteur, $plane)
    {
        $this->date = $date;
        $this->heur = $heur;
        $this->duree = $duree;
        $this->plane = $plane;
        $this->moniteur = $moniteur;
        $query = "INSERT INTO {$this->table} (date, heur, duree, plane, moniteur) VALUES ('$this->date', '$this->heur', '$this->duree', '$this->plane', '$this->moniteur')";
        $this->requete($query);
    }

    public function Findother($plane)
    {

        $this->plane = $plane;
        $query = $this->requete('SELECT date, heur, duree, adherent, plane, moniteur, id FROM ' . $this->table . ' WHERE plane = \'' . $this->plane . '\' ');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function DeleteWplane($plane)
    {
        $this->plane = $plane;
        $query = "DELETE FROM  {$this->table} WHERE plane = {$this->plane}";
        $this->requete($query);
    }
    public function AddAdherent($id, $adherent)
    {
        $this->adherent = $adherent;
        $this->id = $id;
        $query = "UPDATE {$this->table} SET `adherent`='$this->adherent' WHERE `id`= {$this->id}";
        $this->requete($query);
    }
    public function DeleteAdherent($adherent)
    {
        $this->$adherent = $adherent; 
        $query = "UPDATE {$this->table} SET adherent = NULL WHERE `adherent` = {$this->$adherent}";
        $this->requete($query);
    }
    public function DeleteMoniteur($moniteur)
    {
        $this->$moniteur = $moniteur; 
        $query = "UPDATE {$this->table} SET moniteur = NULL WHERE `moniteur` = {$this->$moniteur}";
        $this->requete($query);
    }
}
