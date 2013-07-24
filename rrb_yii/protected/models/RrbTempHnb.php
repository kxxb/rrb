<?php	                                       			

/**
 * This is the model class for table "rrb_temp_hnb".
 *
 * The followings are the available columns in table 'rrb_temp_hnb':
 * @property integer $id
 * @property string $date_load
 * @property string $hndb_name
 * @property integer $hndb_key
 * @property string $hndb_key_value
 */
class RrbTempHnb extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RrbTempHnb the static model class
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
		return 'rrb_temp_hnb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hndb_key', 'numerical', 'integerOnly'=>true),
			array('hndb_name', 'length', 'max'=>150),
			array('hndb_key_value', 'length', 'max'=>450),
			array('date_load', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_load, hndb_name, hndb_key, hndb_key_value', 'safe', 'on'=>'search'),
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
			'date_load' => 'Date Load',
			'hndb_name' => 'Hndb Name',
			'hndb_key' => 'Hndb Key',
			'hndb_key_value' => 'Hndb Key Value',
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
		$criteria->compare('date_load',$this->date_load,true);
		$criteria->compare('hndb_name',$this->hndb_name,true);
		$criteria->compare('hndb_key',$this->hndb_key);
		$criteria->compare('hndb_key_value',$this->hndb_key_value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}