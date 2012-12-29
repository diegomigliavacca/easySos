<?php

/**
 * This is the model class for table "request".
 *
 * The followings are the available columns in table 'request':
 * @property integer $request_id
 * @property string $offering_id
 * @property string $request
 * @property string $begin_lease
 * @property string $end_lease
 *
 * The followings are the available model relations:
 * @property ObservationTemplate[] $observationTemplates
 * @property RequestPhenomenon[] $requestPhenomenons
 * @property RequestCompositePhenomenon[] $requestCompositePhenomenons
 * @property Offering $offering
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Request the static model class
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
		return 'request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('offering_id, request, end_lease', 'required'),
			array('offering_id', 'length', 'max'=>100),
			array('begin_lease', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('request_id, offering_id, request, begin_lease, end_lease', 'safe', 'on'=>'search'),
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
			'observationTemplates' => array(self::HAS_MANY, 'ObservationTemplate', 'request_id'),
			'requestPhenomenons' => array(self::HAS_MANY, 'RequestPhenomenon', 'request_id'),
			'requestCompositePhenomenons' => array(self::HAS_MANY, 'RequestCompositePhenomenon', 'request_id'),
			'offering' => array(self::BELONGS_TO, 'Offering', 'offering_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'request_id' => 'Request',
			'offering_id' => 'Offering',
			'request' => 'Request',
			'begin_lease' => 'Begin Lease',
			'end_lease' => 'End Lease',
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

		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('offering_id',$this->offering_id,true);
		$criteria->compare('request',$this->request,true);
		$criteria->compare('begin_lease',$this->begin_lease,true);
		$criteria->compare('end_lease',$this->end_lease,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}