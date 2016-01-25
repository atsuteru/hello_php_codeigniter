<?php
/*
 * ご意見検索のディレクター
 */
class Goiken_director
{
    private $builders;
    
    public function __construct($builders)
    {
        $this->builders = $builders;
    }

    public function getGoikenDataByCode($code)
    {
        $anketo = $this->builders['anketoSelector']->findByCode($code);
        return ['code'=>$anketo['code'],
            'email'=>$anketo['email'],
            'goiken'=>$anketo['goiken']];
    }
    
    public function addGoiken($code, $param)
    {
        $insertedRow = $this->builders['anketoAppender']->insert($code,$param);
        return $insertedRow;
    }
}