<?php

class Category extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return '{{category}}';
	}
	
	private static $_items=array();
	
	
	private static function loadItems($type)
	{
		self::$_items[$type]=array();
		$models=self::model()->findAll(array(
			'condition'=>'type=:type',
			'params'=>array(':type'=>$type),
			'order'=>'position',
		));
		foreach($models as $model)
			self::$_items[$type][$model->code]=$model->name;
	}

	
	public static function item($id) //return name from id
	{	
		$models=self::model()->findByAttributes(array('id'=>$id));
		return $models->name;
	}
	
		
	public static function category_list()
	{	$result=array();
		$models=self::model()->findAll();
		foreach($models as $model)
			$result[$model->id]=$model->name;
			
		return $result;	
	}
	
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>100),
			array('id, name', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
		);
	}

}