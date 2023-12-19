<?php

class Reservation extends Model
{
    private $date;
    private $duree;
    private $adherent;
    private $plane;
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
    
}
