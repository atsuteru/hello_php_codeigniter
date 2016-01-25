<?php
/*
 * ご意見検索のディレクター
 */
class Kensaku_dbselector extends CI_Model
{
    private $anketoSelector;
    
    public function setAnketoSelector($anketoSelector)
    {
        $this->anketoSelector = $anketoSelector;
    }

    public function getGoikenDataByCode($code)
    {
        $anketo = $this->anketo_selector->findByCode($this->db, $code);
        return ['code'=>$anketo['code'],
            'email'=>$anketo['email'],
            'goiken'=>$anketo['goiken']];
    }
}