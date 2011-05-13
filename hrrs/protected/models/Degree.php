<?php

/**
 * This is the model class for table "degree".
 *
 * The followings are the available columns in table 'degree':
 * @property integer $id
 * @property integer $degree_name
 * @property integer $user_id
 * @property string $institute
 * @property integer $year
 * @property string $result
 */
class Degree extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Degree the static model class
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
		return '{{js_degree}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('degree_name,institute, year','required'),
			array('user_id, year', 'numerical', 'integerOnly'=>true),
			array('institute', 'length', 'max'=>100),
			array('result', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, degree_name, user_id, institute, year, result', 'safe', 'on'=>'search'),
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
			'degree_name' => 'Degree Name',
			'user_id' => 'User',
			'institute' => 'Institute',
			'year' => 'Year',
			'result' => 'Result',
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

		$criteria->compare('degree_name',$this->degree_name);

		$criteria->compare('user_id',$this->user_id);

		$criteria->compare('institute',$this->institute,true);

		$criteria->compare('year',$this->year);

		$criteria->compare('result',$this->result,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}