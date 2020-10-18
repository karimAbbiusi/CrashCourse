<?php
class Records_Model extends CI_Model{


    public function getRecordsFromDB(){
        $sSQL = "SELECT * FROM records"; //SQL Statement
        $aRecords = $this->db->Query($sSQL)->result();
        return $aRecords; 
    
    }
}
