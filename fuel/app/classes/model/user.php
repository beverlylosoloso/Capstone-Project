<?php
class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'contact_number',
		'hospital_name',
		'address',
		'url',
		'Website',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[50]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('group', 'Group', 'required|valid_string[numeric]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('contact_number', 'Contact Number', 'required|max_length[20]');
		$val->add_field('hospital_name', 'Hospital_name', 'required|max_length[50]');
		$val->add_field('address', 'Address', 'required|max_length[50]');
		$val->add_field('url', 'URL', 'required|valid_email|max_length[255]');

		return $val;
	}

}
