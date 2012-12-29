<?php

/**
 * This is the model class for table "offering".
 *
 * The followings are the available columns in table 'offering':
 * @property string $offering_id
 * @property string $offering_name
 * @property string $min_time
 * @property string $max_time
 *
 * The followings are the available model relations:
 * @property CompositePhenomenon[] $compositePhenomenons
 * @property Phenomenon[] $phenomenons
 * @property FeatureOfInterest[] $featureOfInterests
 * @property DomainFeature[] $domainFeatures
 * @property Procedure[] $procedures
 * @property Request[] $requests
 * @property Observation[] $observations
 */
class Offering extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Offering the static model class
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
		return 'offering';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('offering_id', 'required'),
			array('offering_id, offering_name', 'length', 'max'=>100),
			array('min_time, max_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offering_id, offering_name, min_time, max_time', 'safe', 'on'=>'search'),
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
			'compositePhenomenons' => array(self::MANY_MANY, 'CompositePhenomenon', 'com_phen_off(offering_id, composite_phenomenon_id)'),
			'phenomenons' => array(self::MANY_MANY, 'Phenomenon', 'phen_off(offering_id, phenomenon_id)'),
			'featureOfInterests' => array(self::MANY_MANY, 'FeatureOfInterest', 'foi_off(offering_id, feature_of_interest_id)'),
			'domainFeatures' => array(self::MANY_MANY, 'DomainFeature', 'df_off(offering_id, domain_feature_id)'),
			'procedures' => array(self::MANY_MANY, 'Procedure', 'proc_off(offering_id, procedure_id)'),
			'requests' => array(self::HAS_MANY, 'Request', 'offering_id'),
			'observations' => array(self::HAS_MANY, 'Observation', 'offering_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'offering_id' => 'Offering',
			'offering_name' => 'Offering Name',
			'min_time' => 'Min Time',
			'max_time' => 'Max Time',
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

		$criteria->compare('offering_id',$this->offering_id,true);
		$criteria->compare('offering_name',$this->offering_name,true);
		$criteria->compare('min_time',$this->min_time,true);
		$criteria->compare('max_time',$this->max_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}