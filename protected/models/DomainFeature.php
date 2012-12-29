<?php

/**
 * This is the model class for table "domain_feature".
 *
 * The followings are the available columns in table 'domain_feature':
 * @property string $domain_feature_id
 * @property string $domain_feature_name
 * @property string $domain_feature_description
 * @property string $geom
 * @property string $feature_type
 * @property string $schema_link
 *
 * The followings are the available model relations:
 * @property Offering[] $offerings
 * @property Procedure[] $procedures
 * @property FeatureOfInterest[] $featureOfInterests
 * @property Observation[] $observations
 */
class DomainFeature extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DomainFeature the static model class
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
		return 'domain_feature';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('domain_feature_id, domain_feature_name, geom, feature_type', 'required'),
			array('domain_feature_id, domain_feature_name', 'length', 'max'=>100),
			array('domain_feature_description', 'length', 'max'=>200),
			array('schema_link', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('domain_feature_id, domain_feature_name, domain_feature_description, geom, feature_type, schema_link', 'safe', 'on'=>'search'),
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
			'offerings' => array(self::MANY_MANY, 'Offering', 'df_off(domain_feature_id, offering_id)'),
			'procedures' => array(self::MANY_MANY, 'Procedure', 'proc_df(domain_feature_id, procedure_id)'),
			'featureOfInterests' => array(self::MANY_MANY, 'FeatureOfInterest', 'foi_df(domain_feature_id, feature_of_interest_id)'),
			'observations' => array(self::MANY_MANY, 'Observation', 'obs_df(domain_feature_id, observation_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'domain_feature_id' => 'Domain Feature',
			'domain_feature_name' => 'Domain Feature Name',
			'domain_feature_description' => 'Domain Feature Description',
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

		$criteria->compare('domain_feature_id',$this->domain_feature_id,true);
		$criteria->compare('domain_feature_name',$this->domain_feature_name,true);
		$criteria->compare('domain_feature_description',$this->domain_feature_description,true);
		$criteria->compare('geom',$this->geom,true);
		$criteria->compare('feature_type',$this->feature_type,true);
		$criteria->compare('schema_link',$this->schema_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}