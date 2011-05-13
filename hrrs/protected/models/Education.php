<?php

/**
 * This is the model class for table "js_education".
 *
 * The followings are the available columns in table 'js_education':
 * @property integer $id
 * @property integer $js_id
 * @property string $degree
 * @property string $institute
 * @property string $start_date
 * @property string $end_date
 * @property string $subject
 * @property string $duration
 * @property string $result
 * @property string $outof
 * @property string $degree_type
 */
class Education extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Education the static model class
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
		return '{{js_education}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('js_id', 'required'),
			array('js_id', 'numerical', 'integerOnly'=>true),
			array('degree, institute, subject', 'length', 'max'=>100),
			array('duration', 'length', 'max'=>50),
			array('result, outof, degree_type', 'length', 'max'=>30),
			array('start_date, end_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, js_id, degree, institute, start_date, end_date, subject, duration, result, outof, degree_type', 'safe', 'on'=>'search'),
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
			'degree' => 'Degree',
			'institute' => 'Institute',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'subject' => 'Subject',
			'duration' => 'Duration',
			'result' => 'Result',
			'outof' => 'Outof',
			'degree_type' => 'Degree Type',
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

		$criteria->compare('degree',$this->degree,true);

		$criteria->compare('institute',$this->institute,true);

		$criteria->compare('start_date',$this->start_date,true);

		$criteria->compare('end_date',$this->end_date,true);

		$criteria->compare('subject',$this->subject,true);

		$criteria->compare('duration',$this->duration,true);

		$criteria->compare('result',$this->result,true);

		$criteria->compare('outof',$this->outof,true);

		$criteria->compare('degree_type',$this->degree_type,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}