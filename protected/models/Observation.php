<?php

/**
 * This is the model class for table "observation".
 *
 * The followings are the available columns in table 'observation':
 * @property string $time_stamp
 * @property string $procedure_id
 * @property string $feature_of_interest_id
 * @property string $phenomenon_id
 * @property string $offering_id
 * @property string $text_value
 * @property string $numeric_value
 * @property string $spatial_value
 * @property string $mime_type
 * @property integer $observation_id
 *
 * The followings are the available model relations:
 * @property Quality[] $qualities
 * @property DomainFeature[] $domainFeatures
 * @property Procedure $procedure
 * @property FeatureOfInterest $featureOfInterest
 * @property Phenomenon $phenomenon
 * @property Offering $offering
 */
class Observation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Observation the static model class
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
		return 'observation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('time_stamp, procedure_id, feature_of_interest_id, phenomenon_id, offering_id', 'required'),
			array('procedure_id, feature_of_interest_id, phenomenon_id, offering_id, mime_type', 'length', 'max'=>100),
			array('text_value, numeric_value, spatial_value', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('time_stamp, procedure_id, feature_of_interest_id, phenomenon_id, offering_id, text_value, numeric_value, spatial_value, mime_type, observation_id', 'safe', 'on'=>'search'),
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
			'qualities' => array(self::HAS_MANY, 'Quality', 'observation_id'),
			'domainFeatures' => array(self::MANY_MANY, 'DomainFeature', 'obs_df(observation_id, domain_feature_id)'),
			'procedure' => array(self::BELONGS_TO, 'Procedure', 'procedure_id'),
			'featureOfInterest' => array(self::BELONGS_TO, 'FeatureOfInterest', 'feature_of_interest_id'),
			'phenomenon' => array(self::BELONGS_TO, 'Phenomenon', 'phenomenon_id'),
			'offering' => array(self::BELONGS_TO, 'Offering', 'offering_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'time_stamp' => 'Time Stamp',
			'procedure_id' => 'Procedure',
			'feature_of_interest_id' => 'Feature Of Interest',
			'phenomenon_id' => 'Phenomenon',
			'offering_id' => 'Offering',
			'text_value' => 'Text Value',
			'numeric_value' => 'Numeric Value',
			'spatial_value' => 'Spatial Value',
			'mime_type' => 'Mime Type',
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

		$criteria->compare('time_stamp',$this->time_stamp,true);
		$criteria->compare('procedure_id',$this->procedure_id,true);
		$criteria->compare('feature_of_interest_id',$this->feature_of_interest_id,true);
		$criteria->compare('phenomenon_id',$this->phenomenon_id,true);
		$criteria->compare('offering_id',$this->offering_id,true);
		$criteria->compare('text_value',$this->text_value,true);
		$criteria->compare('numeric_value',$this->numeric_value,true);
		$criteria->compare('spatial_value',$this->spatial_value,true);
		$criteria->compare('mime_type',$this->mime_type,true);
		$criteria->compare('observation_id',$this->observation_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}