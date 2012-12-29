<?php

/**
 * This is the model class for table "procedure".
 *
 * The followings are the available columns in table 'procedure':
 * @property string $procedure_id
 * @property string $description_url
 * @property string $description_type
 * @property string $sml_file
 * @property string $actual_position
 * @property boolean $active
 * @property boolean $mobile
 *
 * The followings are the available model relations:
 * @property Phenomenon[] $phenomenons
 * @property FeatureOfInterest[] $featureOfInterests
 * @property DomainFeature[] $domainFeatures
 * @property ProcedureHistory[] $procedureHistories
 * @property Offering[] $offerings
 * @property ObservationTemplate[] $observationTemplates
 * @property Observation[] $observations
 */
class Procedure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Procedure the static model class
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
		return 'procedure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('procedure_id', 'required'),
			array('procedure_id, description_type', 'length', 'max'=>100),
			array('description_url', 'length', 'max'=>200),
			array('sml_file, actual_position, active, mobile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('procedure_id, description_url, description_type, sml_file, actual_position, active, mobile', 'safe', 'on'=>'search'),
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
			'phenomenons' => array(self::MANY_MANY, 'Phenomenon', 'proc_phen(procedure_id, phenomenon_id)'),
			'featureOfInterests' => array(self::MANY_MANY, 'FeatureOfInterest', 'proc_foi(procedure_id, feature_of_interest_id)'),
			'domainFeatures' => array(self::MANY_MANY, 'DomainFeature', 'proc_df(procedure_id, domain_feature_id)'),
			'procedureHistories' => array(self::HAS_MANY, 'ProcedureHistory', 'procedure_id'),
			'offerings' => array(self::MANY_MANY, 'Offering', 'proc_off(procedure_id, offering_id)'),
			'observationTemplates' => array(self::HAS_MANY, 'ObservationTemplate', 'procedure_id'),
			'observations' => array(self::HAS_MANY, 'Observation', 'procedure_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'procedure_id' => 'Procedure',
			'description_url' => 'Description Url',
			'description_type' => 'Description Type',
			'sml_file' => 'Sml File',
			'actual_position' => 'Actual Position',
			'active' => 'Active',
			'mobile' => 'Mobile',
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

		$criteria->compare('procedure_id',$this->procedure_id,true);
		$criteria->compare('description_url',$this->description_url,true);
		$criteria->compare('description_type',$this->description_type,true);
		$criteria->compare('sml_file',$this->sml_file,true);
		$criteria->compare('actual_position',$this->actual_position,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('mobile',$this->mobile);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}