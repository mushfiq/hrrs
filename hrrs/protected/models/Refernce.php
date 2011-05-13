<?php

/**
 * This is the model class for table "js_refernce".
 *
 * The followings are the available columns in table 'js_refernce':
 * @property integer $id
 * @property integer $js_id
 * @property string $name
 * @property string $designation
 * @property string $dept
 * @property string $company_name
 * @property string $contact_no
 * @property string $email
 * @property string $relation
 */
class Refernce extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Refernce the static model class
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
		return '{{js_refernce}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('js_id, name', 'required'),
			array('js_id', 'numerical', 'integerOnly'=>true),
			array('name, designation, dept, company_name, contact_no, email, relation', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, js_id, name, designation, dept, company_name, contact_no, email, relation', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'js_id' => 'Js',
			'name' => 'Name',
			'designation' => 'Designation',
			'dept' => 'Dept',
			'company_name' => 'Company Name',
			'contact_no' => 'Contact No',
			'email' => 'Email',
			'relation' => 'Relation',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('js_id',$this->js_id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('designation',$this->designation,true);

		$criteria->compare('dept',$this->dept,true);

		$criteria->compare('company_name',$this->company_name,true);

		$criteria->compare('contact_no',$this->contact_no,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('relation',$this->relation,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}