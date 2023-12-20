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
    public function CountMonth($date)
    {
        $cutdate = explode("-", $date);
        $query = $this->requete('SELECT COUNT(*) as count FROM ' . $this->table . ' WHERE YEAR(date) = \'' . $cutdate[0]  . '\' AND MONTH(date) = \'' . $cutdate[1] . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
