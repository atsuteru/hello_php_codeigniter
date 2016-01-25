<?php

class Kensaku_dbsel extends CI_Model
{
	private $_code = 0;

//	public function setCode($code = 0)
	public function setCode($code)
	{
		$this->_code = $code;
	}
        
//	public function setEmail($emai)
//	{
//		$this->_email = $emai;
//	}

	public function getCode()
	{
		return $this->_code;
	}
        
	public function getDbRowByCode()
	{
            $this->load->database();
            $sql = "SELECT * FROM anketo WHERE code = ";
            $sql = $sql . $this->_code;
            print('$sql2='.$sql.'<br>');
            $query = $this->db->query($sql);
            if ($result = $this->db->query($sql))
            {
                // 成功処理
                print('db sel ok'.'<br>');
            }
            else
            {
                // 失敗処理
                print('db sel err'.'<br>');
            }

//          $row = $query->row_array();
            $row = $query->row(0, 'array');
            print('email='.$row['email'].'<br>');
            print('goiken='.$row['goiken'].'<br>');
//            return $row['email']; 
//            return $row['goiken']; 
            
            $pairs = ['email'=>'kamiya@kk-brain.jp',
                'name'=>'KAMIYA.Atsuteru'];

            if($type=="2") {
                $pairs['yaku'] = 'leader';
            }
 
            return $pairs;
	}

    public function getGoikenByCode()
	{
            $this->load->database();
            $sql = "SELECT * FROM anketo WHERE code = ";
            $sql = $sql . $this->_code;
            print('$sql2='.$sql.'<br>');
            $query = $this->db->query($sql);
            if ($result = $this->db->query($sql))
            {
                // 成功処理
                print('db sel ok'.'<br>');
            }
            else
            {
                // 失敗処理
                print('db sel err'.'<br>');
            }

            $row = $query->row(0, 'array');
            
            $goiken1 = new Goiken($this->_code);
            $goiken1->_email = $row['email'];
            $goiken1->_goiken = $row['goiken'];
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                    
            return $goiken1;
	}
}