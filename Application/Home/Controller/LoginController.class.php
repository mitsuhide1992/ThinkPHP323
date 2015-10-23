<?php
namespace Home\Controller;
use Think\Controller;

/**
*  
*/
class LoginController extends Controller
{

	public function showUser () {
		$Userinfo = M('Userinfo', "", 'DB_CONFIG1');
		$re = $Userinfo->select();
		var_dump($re);
	}

	public function sqlUser () {
		// $Model = M('', "", 'DB_CONFIG1');
		// $re = $Model->query('SELECT * FROM userinfo ');
		// $re = M('', "", 'DB_CONFIG1')->query('SELECT * FROM userinfo ');
		// $re = D('Userinfo')->query('SELECT * FROM userinfo ');
		$Model = D('Userinfo');
		$re = $Model->getUser();
		// $re = $Model->db(1,"mysql://root:root@localhost:3306/yii2basic")->query("SELECT * FROM userinfo");
		var_dump($re);
	}
}