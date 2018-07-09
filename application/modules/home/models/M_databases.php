<?php

class M_databases extends CI_Model {

    function __construct() {
        parent :: __construct();
    }

    function select($table, $where = null, $tjoin = null, $onjoin = null, $group_by = null, $select = null){
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($tjoin)) {
            $this->db->join($tjoin, $onjoin, "left");
        }
        if (!empty($group_by)) {
            $this->db->group_by($group_by);
        }
        if (!empty($select)) {
            $this->db->select($select);
        }

        $query = $this->db->get($table);

        return $query;
    }

    function insert($table, $data){
        $this->db->insert($table, $data);
    }

    function update($table, $data, $where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete($table, $where){
        $this->db->where($where);
        $this->db->delete($table);
    }   
}
