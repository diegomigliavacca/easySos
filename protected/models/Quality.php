<?php

/**
 * This is the model class for table "quality".
 *
 * The followings are the available columns in table 'quality':
 * @property integer $quality_id
 * @property string $quality_name
 * @property string $quality_unit
 * @property string $quality_value
 * @property string $quality_type
 * @property integer $observation_id
 *
 * The followings are the available model relations:
 * @property Observation $observation
 */
class Quality extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Quality the static model class
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
		return 'quality';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quality_unit, quality_value, quality_type, observation_id', 'required'),
			array('observation_id', 'numerical', 'integerOnly'=>true),
			array('quality_name, quality_unit, quality_type', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('quality_id, quality_name, quality_unit, quality_value, quality_type, observation_id', 'safe', 'on'=>'search'),
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
			'observation' => array(self::BELONGS_TO, 'Observation', 'observation_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'quality_id' => 'Quality',
			'quality_name' => 'Quality Name',
			'quality_unit' => 'Quality Unit',
			'quality_value' => 'Quality Value',
			'quality_type' => 'Quality Type',
			'observation_id' => 'Observation',
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

		$criteria->compare('quality_id',$this->quality_id);
		$criteria->compare('quality_name',$this->quality_name,true);
		$criteria->compare('quality_unit',$this->quality_unit,true);
		$criteria->compare('quality_value',$this->quality_value,true);
		$criteria->compare('quality_type',$this->quality_type,true);
		$criteria->compare('observation_id',$this->observation_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}