<?php

/**
 * This is the model class for table "{{company}}".
 *
 * The followings are the available columns in table '{{company}}':
 * @property integer $com_id
 * @property string $com_type
 * @property string $com_info
 * @property string $com_address
 * @property string $com_contact_no
 * @property string $com_web
 * @property string $com_logo
 * @property integer $create_time
 * @property integer $com_user_id
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{company}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_time, com_user_id', 'numerical', 'integerOnly'=>true),
			array('com_type, com_web', 'length', 'max'=>50),
			array('com_contact_no', 'length', 'max'=>30),
			array('com_info, com_address, com_logo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('com_id, com_type, com_info, com_address, com_contact_no, com_web, com_logo, create_time, com_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'com_id' => 'Com Id',
			'com_type' => 'Company Type',
			'com_info' => 'Description',
			'com_address' => 'Address',
			'com_contact_no' => 'Contact No',
			'com_web' => 'Web Address',
			'com_logo' => 'Logo',
			'create_time' => 'Create Time',
			'com_user_id' => 'Com User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('com_id',$this->com_id);
		$criteria->compare('com_type',$this->com_type,true);
		$criteria->compare('com_info',$this->com_info,true);
		$criteria->compare('com_address',$this->com_address,true);
		$criteria->compare('com_contact_no',$this->com_contact_no,true);
		$criteria->compare('com_web',$this->com_web,true);
		$criteria->compare('com_logo',$this->com_logo,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('com_user_id',$this->com_user_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}