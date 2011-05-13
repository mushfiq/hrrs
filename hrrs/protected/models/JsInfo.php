<?php

/**
 * This is the model class for table "js_personal".
 *
 * The followings are the available columns in table 'js_personal':
 * @property integer $id
 * @property integer $js_id
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property string $objectives
 * @property string $contact_no
 * @property string $website
 * @property string $gender
 * @property string $salary
 * @property string $photo
 * @property string $address
 * @property string $city
 * @property integer $country
 * @property string $postal_code
 * @property string $state
 * @property string $experince_year
 */
class JsInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return JsInfo the static model class
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
		return '{{js_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, objectives', 'required'),
			array('country', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, middle_name, objectives, website, city, experince_year', 'length', 'max'=>50),
			array('contact_no, gender, salary, postal_code, state', 'length', 'max'=>30),
			array('photo, address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, middle_name, objectives, contact_no, website, gender, salary, photo, address, city, country, postal_code, state, experince_year', 'safe', 'on'=>'search'),
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
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'middle_name' => 'Middle Name',
			'objectives' => 'Objectives',
			'contact_no' => 'Contact No',
			'website' => 'Website',
			'gender' => 'Gender',
			'salary' => 'Salary',
			'photo' => 'Photo',
			'address' => 'Address',
			'city' => 'City',
			'country' => 'Country',
			'postal_code' => 'Postal Code',
			'state' => 'State',
			'experince_year' => 'Experince Year',
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

		$criteria->compare('first_name',$this->first_name,true);

		$criteria->compare('last_name',$this->last_name,true);

		$criteria->compare('middle_name',$this->middle_name,true);

		$criteria->compare('objectives',$this->objectives,true);

		$criteria->compare('contact_no',$this->contact_no,true);

		$criteria->compare('website',$this->website,true);

		$criteria->compare('gender',$this->gender,true);

		$criteria->compare('salary',$this->salary,true);

		$criteria->compare('photo',$this->photo,true);

		$criteria->compare('address',$this->address,true);

		$criteria->compare('city',$this->city,true);

		$criteria->compare('country',$this->country);

		$criteria->compare('postal_code',$this->postal_code,true);

		$criteria->compare('state',$this->state,true);

		$criteria->compare('experince_year',$this->experince_year,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}