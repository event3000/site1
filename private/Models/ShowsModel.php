<?php

namespace Web\Concert\Models;

use Web\Engine\DB;
class ShowsModel
{
    private $db;
    private $table_name;
    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'shows';
    }

    public function getShows($count=null) {
        $current_date = date('y-m-j');
        $sql = "SELECT * FROM $this->table_name WHERE date >=:date ORDER BY date";
        $shows = $this->db->selectByParamFetchAll($sql, ['date' => $current_date]);
        if (isset($count)) {
            return array_slice($shows, 0, $count);
        }
        return $shows;
    }

    public function getShowById($id) {
        $sql = "SELECT * FROM $this->table_name WHERE image=:image";
        $show = $this->db->selectByParam($sql, ['image'=>$id]);
        return $show;
    }

    public function getPastShows() {
        $current_date = date('y-m-j');
        $sql = "SELECT * FROM $this->table_name WHERE date <:date";
        $shows = $this->db->selectByParamFetchAll($sql, ['date' => $current_date]);
        return $shows;
    }

}