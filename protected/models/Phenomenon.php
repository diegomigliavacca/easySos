<?php

/**
 * This is the model class for table "phenomenon".
 *
 * The followings are the available columns in table 'phenomenon':
 * @property string $phenomenon_id
 * @property string $phenomenon_description
 * @property string $unit
 * @property string $valuetype
 * @property string $composite_phenomenon_id
 * @property string $om_application_schema_link
 *
 * The followings are the available model relations:
 * @property Offering[] $offerings
 * @property Procedure[] $procedures
 * @property CompositePhenomenon $compositePhenomenon
 * @property RequestPhenomenon[] $requestPhenomenons
 * @property Observation[] $observations
 */
class Phenomenon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Phenomenon the static model class
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
		return 'phenomenon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phenomenon_id, unit, valuetype', 'required'),
			array('phenomenon_id, composite_phenomenon_id', 'length', 'max'=>100),
			array('phenomenon_description', 'length', 'max'=>200),
			array('unit', 'length', 'max'=>30),
			array('valuetype', 'length', 'max'=>40),
			array('om_application_schema_link', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phenomenon_id, phenomenon_description, unit, valuetype, composite_phenomenon_id, om_application_schema_link', 'safe', 'on'=>'search'),
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
			'offerings' => array(self::MANY_MANY, 'Offering', 'phen_off(phenomenon_id, offering_id)'),
			'procedures' => array(self::MANY_MANY, 'Procedure', 'proc_phen(phenomenon_id, procedure_id)'),
			'compositePhenomenon' => array(self::BELONGS_TO, 'CompositePhenomenon', 'composite_phenomenon_id'),
			'requestPhenomenons' => array(self::HAS_MANY, 'RequestPhenomenon', 'phenomenon_id'),
			'observations' => array(self::HAS_MANY, 'Observation', 'phenomenon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'phenomenon_id' => 'Phenomenon',
			'phenomenon_description' => 'Phenomenon Description',
			'unit' => 'Unit',
			'valuetype' => 'Valuetype',
			'composite_phenomenon_id' => 'Composite Phenomenon',
			'om_application_schema_link' => 'Om Application Schema Link',
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

		$criteria->compare('phenomenon_id',$this->phenomenon_id,true);
		$criteria->compare('phenomenon_description',$this->phenomenon_description,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('valuetype',$this->valuetype,true);
		$criteria->compare('composite_phenomenon_id',$this->composite_phenomenon_id,true);
		$criteria->compare('om_application_schema_link',$this->om_application_schema_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}