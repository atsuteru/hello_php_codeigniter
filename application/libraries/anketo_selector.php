<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnketoSelector
 *
 * @author br-okai
 */
class Anketo_selector {

    private $db;
    
    function __construct($db) {
        $this->db = $db;
    }

    public function findByCode($code)
    {
        $sql = "SELECT * FROM anketo WHERE code = ${code}";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1)
        {
            // 成功処理
            print('db sel ok'.'<br>');
        }
        else
        {
            // 失敗処理
            print('db sel err'.'<br>');
            return NULL;
        }
        
        $row = $query->row(0, 'array');
        return $row;
    }
}
