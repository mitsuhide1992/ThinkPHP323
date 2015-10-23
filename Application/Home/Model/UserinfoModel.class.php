<?php
namespace Home\Model;
use Think\Model;

/**
*  
*/
class UserinfoModel extends Model
{
	protected $tablePrefix = "";
	protected $tableName = "userinfo"; 	
	protected $connection = 'DB_CONFIG1';
	public function getUser () {
		return $this->db(1,"mysql://root:root@localhost:3306/yii2basic")->query("SELECT * FROM userinfo");
	}
}