<?php

/**
 * This is the model class for table "procedure_history".
 *
 * The followings are the available columns in table 'procedure_history':
 * @property string $procedure_id
 * @property string $time_stamp
 * @property string $position
 * @property boolean $active
 * @property boolean $mobile
 *
 * The followings are the available model relations:
 * @property Procedure $procedure
 */
class ProcedureHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProcedureHistory the static model class
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
		return 'procedure_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('procedure_id, time_stamp', 'required'),
			array('procedure_id', 'length', 'max'=>100),
			array('position, active, mobile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('procedure_id, time_stamp, position, active, mobile', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'procedure_id' => 'Procedure',
			'time_stamp' => 'Time Stamp',
			'position' => 'Position',
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
		$criteria->compare('time_stamp',$this->time_stamp,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('mobile',$this->mobile);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}