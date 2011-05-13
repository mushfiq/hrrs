<?php

class User extends CActiveRecord
{
	public  $passowrd;
    public  $password2;
    public  $verifyCode; //for captcha verification

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
			array('full_name,username,password','required'),
			array('role','numerical','integerOnly'=>true),
			array('username','unique'),
			array('email','email'),
			array('username, password, full_name, email', 'length', 'max'=>128),
			array('username, full_name, email', 'safe', 'on'=>'search'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'message' => Yii::t("UserModule.user", "Retype Password is incorrect.")),
            array('verifyCode', 'captcha', 'allowEmpty'=>!extension_loaded('gd')),

		);
	}
	
	

	public function relations()
	{
		return array(
		);
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
			'role' => 'User Role',
            'verifyCode'=>'Verification Code',
		);
	}
	
	
	public static function full_name($id) //return name from id
	{	
		$models=self::model()->findByAttributes(array('id'=>$id));
		return $models->full_name;
	}
	
		
	public static function company_list()
	{	$result=array();
		$models=self::model()->findAll(array(
			'condition'=>'role=:role',
			'params'=>array(':role'=>2),
			'order'=>'full_name',
		));
		foreach($models as $model)
			$result[$model->id]=$model->full_name;
			
		return $result;	
	}

	
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->salt)===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
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
			if($this->isNewRecord)
			{
				self::$salt=$this->generateSalt();
				$this->password=$this->hashPassword($this->password,self::$salt);
				$this->salt=self::$salt;
				$this->create_time=time();
			}
			return true;
		}
		else
			return false;
	}

	protected function afterSave()
	{
		//if(parent::afterSave())
		//{
			if($this->isNewRecord)
			{
				if($this->role==Lookup::show('role','company'))//if company then insert a row into company
				{	$sql="insert into company (com_user_id) values('$this->id')";		}			
				if($this->role==Lookup::show('role','js'))//if js then insert a row into js_info
				{
					$name=explode(" ",$this->full_name);
					$first_name=$name[0];
					if(isset($name[1]))
						$middle_name=$name[1];
					else 	
						$middle_name='';
					if(isset($name[2]))
						$last_name=$name[2];
					else 	
						$last_name='';
					
					$sql="insert into js_info (id,first_name,middle_name,last_name) values('$this->id','$first_name','$middle_name','$last_name')";		
				}				
				
				$connection=Yii::app()->db; 
				$command=$connection->createCommand($sql);
				$command->execute(); 				
			}
			return true;
		//}
		//else
			//return false;
	}



	public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('username',$this->username,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('email',$this->email,true);
		//$criteria->compare('utyp_id',$this->utyp_id);
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
		
}