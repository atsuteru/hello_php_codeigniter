<?php
/**
 * 検索のコントローラー.
 * Maps URL
 * 		http://example.com/kisos/index.php/kensaku
 */
class Kensaku extends CI_Controller {

	/**
	 * 初期表示.
	 */
	public function index()
	{
		//検索画面を、ビューに出力
		$this->parser->parse(
				'kensaku_welcome',
				[
				]
				);
	}

	/**
	 * データを検索し、検索結果を表示する.
	 * Maps URL
	 * 		http://example.com/kisos/index.php/kensaku/sel
	 */
	public function sel()
	{
            /*
		//フォームデータの取得
		$code = $this->input->post('code');
		//データベースからデータを抽出
		$this->load->model('kensaku/kensaku_dbsel','dbsel', TRUE);
                if ($this->db->conn_id === FALSE)
                {
                    // データベースに接続されていません。
                    print('db connect err');
                }
                else
                {
                    // データベースに接続されています。
                    print('db connect ok');
                }
                
                $this->dbsel->setCode($code);
	
                // データベースの行データを取得する
                $row = $this->dbsel->getDbRowByCode();
               
                 // データベースの行データをビューに渡し、画面を表示する
                $this->parser->parse(
                         'kensaku_sel',
                         [       'code'=>$this->dbsel->getCode(),
                                 'email'=>$row['email'],
                                 'goiken'=>$row['goiken']
                         ]
                         );
                
             */
                // --fix start
                // 画面からのリクエストを取得
		$code = $this->input->post('code');
                // ビルダーをそろえる
		$this->load->model('dbaccesor/anketo_selector','anketo_selector', TRUE);
                // ディレクターを呼び出してビルダーを引き渡す
                $this->load->library('goiken_director', ["anketoSelector"=>$this->anketo_selector]);
                // ご意見データを取得してもらう
                $goiken = $this->goiken_director->getGoikenDataByCode($code);
                // ご意見データをビューに渡し、画面を表示する
                $this->parser->parse(
                         'kensaku_sel',
                         [       'code'=>$goiken['code'],
                                 'email'=>$goiken['email'],
                                 'goiken'=>$goiken['goiken']
                         ]
                         );
                }
}