<?php
include 'Model.php';
class Reservation extends Model
{
    private $date;
    private $duree;
    private $adherent;
    private $plane;
    public function __construct($date, $duree, $adherent, $plane)
    {
        $this->date = $date;
        $this->duree = $duree;
        $this->adherent = $adherent;
        $this->plane = $plane;
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
}
