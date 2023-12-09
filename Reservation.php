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
        parent::__construct();
        $this->date = $date;
        $this->duree = $duree;
        $this->adherent = $adherent;
        $this->plane = $plane;
        $this->table = __CLASS__;
    }
}
