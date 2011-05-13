<?php

class UserUpdate extends CActiveRecord
{
	public  $passowrd;	
	public  $password2;
	private static $salt;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return '{{user}}';
	}

	public function rules()
	{
		return array(
			array('full_name,username, password','required'),
			array('username','unique'),
			array('email','email'),
			array('username, password, full_name, email', 'length', 'max'=>128),
			array('password2', 'compare', 'compareAttribute'=>'password'),
			
		);
	}

	public function relations()
	{
		return array(
		);
	}

	
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	protected function generateSalt()
	{
		return uniqid('',true);
	}
	
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
				self::$salt=$this->generateSalt();
				$this->password=$this->hashPassword($this->password,self::$salt);
				$this->salt=self::$salt;
			return true;	
		}
		else
			return false;
	}
	
	
	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
            'password2' => 'Retype-password',			
			'salt' => 'Salt',
			'full_name' => 'Name',
			'email' => 'Email',
			'role' => 'Role',
			'create_time' => 'Create Time',
		);
	}

}