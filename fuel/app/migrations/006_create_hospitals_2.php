<?php

namespace Fuel\Migrations;

class Create_hospitals_2
{
	public function up()
	{
		\DBUtil::create_table('hospitals_2', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'last_login' => array('constraint' => 11, 'type' => 'int'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('hospitals_2');
	}
}