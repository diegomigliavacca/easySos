<?php

/**
 * This is the model class for table "feature_of_interest".
 *
 * The followings are the available columns in table 'feature_of_interest':
 * @property string $feature_of_interest_id
 * @property string $feature_of_interest_name
 * @property string $feature_of_interest_description
 * @property string $geom
 * @property string $feature_type
 * @property string $schema_link
 *
 * The followings are the available model relations:
 * @property Offering[] $offerings
 * @property Procedure[] $procedures
 * @property DomainFeature[] $domainFeatures
 * @property Observation[] $observations
 */
class FeatureOfInterest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FeatureOfInterest the static model class
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
		return 'feature_of_interest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('feature_of_interest_id, feature_of_interest_name, geom, feature_type', 'required'),
			array('feature_of_interest_id, feature_of_interest_name', 'length', 'max'=>100),
			array('feature_of_interest_description', 'length', 'max'=>200),
			array('schema_link', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feature_of_interest_id, feature_of_interest_name, feature_of_interest_description, geom, feature_type, schema_link', 'safe', 'on'=>'search'),
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
			'offerings' => array(self::MANY_MANY, 'Offering', 'foi_off(feature_of_interest_id, offering_id)'),
			'procedures' => array(self::MANY_MANY, 'Procedure', 'proc_foi(feature_of_interest_id, procedure_id)'),
			'domainFeatures' => array(self::MANY_MANY, 'DomainFeature', 'foi_df(feature_of_interest_id, domain_feature_id)'),
			'observations' => array(self::HAS_MANY, 'Observation', 'feature_of_interest_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'feature_of_interest_id' => 'Feature Of Interest',
			'feature_of_interest_name' => 'Feature Of Interest Name',
			'feature_of_interest_description' => 'Feature Of Interest Description',
			'geom' => 'Geom',
			'feature_type' => 'Feature Type',
			'schema_link' => 'Schema Link',
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

		$criteria->compare('feature_of_interest_id',$this->feature_of_interest_id,true);
		$criteria->compare('feature_of_interest_name',$this->feature_of_interest_name,true);
		$criteria->compare('feature_of_interest_description',$this->feature_of_interest_description,true);
		$criteria->compare('geom',$this->geom,true);
		$criteria->compare('feature_type',$this->feature_type,true);
		$criteria->compare('schema_link',$this->schema_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}