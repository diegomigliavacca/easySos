<?php

/**
 * This is the model class for table "observation_template".
 *
 * The followings are the available columns in table 'observation_template':
 * @property integer $obs_template_id
 * @property string $procedure_id
 * @property integer $request_id
 * @property string $observation_template
 *
 * The followings are the available model relations:
 * @property Procedure $procedure
 * @property Request $request
 */
class ObservationTemplate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ObservationTemplate the static model class
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
		return 'observation_template';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('procedure_id, request_id', 'required'),
			array('request_id', 'numerical', 'integerOnly'=>true),
			array('procedure_id', 'length', 'max'=>100),
			array('observation_template', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('obs_template_id, procedure_id, request_id, observation_template', 'safe', 'on'=>'search'),
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
			'procedure' => array(self::BELONGS_TO, 'Procedure', 'procedure_id'),
			'request' => array(self::BELONGS_TO, 'Request', 'request_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'obs_template_id' => 'Obs Template',
			'procedure_id' => 'Procedure',
			'request_id' => 'Request',
			'observation_template' => 'Observation Template',
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

		$criteria->compare('obs_template_id',$this->obs_template_id);
		$criteria->compare('procedure_id',$this->procedure_id,true);
		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('observation_template',$this->observation_template,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}