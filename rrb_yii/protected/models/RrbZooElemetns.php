<?php

/**
 * This is the model class for table "rrb_zoo_elemetns".
 *
 * The followings are the available columns in table 'rrb_zoo_elemetns':
 * @property integer $id
 * @property string $type_name
 * @property string $element_id
 * @property string $element_name
 * @property string $rrb_table
 * @property string $rrb_field
 */
class RrbZooElemetns extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RrbZooElemetns the static model class
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
		return 'rrb_zoo_elemetns';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_name, element_id, element_name, rrb_table, rrb_field, rrb_replace_var', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type_name, element_id, element_name, rrb_table, rrb_field, rrb_replace_var', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type_name' => 'Type Name',
			'element_id' => 'Element',
			'element_name' => 'Element Name',
			'rrb_table' => 'Rrb Table',
			'rrb_field' => 'Rrb Field',
                        'rrb_replace_var' => 'Placeholder',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('type_name',$this->type_name,true);
		$criteria->compare('element_id',$this->element_id,true);
		$criteria->compare('element_name',$this->element_name,true);
		$criteria->compare('rrb_table',$this->rrb_table,true);
		$criteria->compare('rrb_field',$this->rrb_field,true);
                $criteria->compare('rrb_replace_var',$this->rrb_replace_var,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}