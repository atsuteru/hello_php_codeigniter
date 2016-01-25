<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of goiken
 *
 * @author br-okai
 */
class Goiken {
    //put your code here
    private $_code;
    public $_email;
    public $_goiken;
    
    public $_codecode;
    
    public function __construct($code) 
    {
        $_code = $code;
        
        $codecode = $code.$code;
    }
    
    public function getCode()
    {
        return $_code;
    }
           
}
