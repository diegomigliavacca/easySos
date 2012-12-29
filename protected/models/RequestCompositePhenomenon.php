<?php

/**
 * This is the model class for table "request_composite_phenomenon".
 *
 * The followings are the available columns in table 'request_composite_phenomenon':
 * @property string $composite_phenomenon_id
 * @property integer $request_id
 *
 * The followings are the available model relations:
 * @property CompositePhenomenon $compositePhenomenon
 * @property Request $request
 */
class RequestCompositePhenomenon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RequestCompositePhenomenon the static model class
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
		return 'request_composite_phenomenon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('composite_phenomenon_id, request_id', 'required'),
			array('request_id', 'numerical', 'integerOnly'=>true),
			array('composite_phenomenon_id', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('composite_phenomenon_id, request_id', 'safe', 'on'=>'search'),
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
			'compositePhenomenon' => array(self::BELONGS_TO, 'CompositePhenomenon', 'composite_phenomenon_id'),
			'request' => array(self::BELONGS_TO, 'Request', 'request_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'composite_phenomenon_id' => 'Composite Phenomenon',
			'request_id' => 'Request',
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

		$criteria->compare('composite_phenomenon_id',$this->composite_phenomenon_id,true);
		$criteria->compare('request_id',$this->request_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}