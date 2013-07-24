<?php	                                       			

/**
 * This is the model class for table "rrb_temporary_flats".
 *
 * The followings are the available columns in table 'rrb_temporary_flats':
 * @property integer $id
 * @property string $date_rec
 * @property string $rrb_housing_id
 * @property string $address
 * @property string $section
 * @property string $floor_numb
 * @property string $quant_rooms_in_flat
 * @property string $total_flat_area
 * @property string $live_area
 * @property string $kitchen_area
 * @property string $balcony_area
 * @property string $price_whoole_payment
 * @property string $price_lease_payment
 * @property string $flat_descripton
 * @property string $saler_name
 * @property string $saler_contact
 * @property string $link_to_source_inf
 * @property string $collect_information_dt
 * @property string $report_on_phase_dt
 */
class RrbTemporaryFlats extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RrbTemporaryFlats the static model class
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
		return 'rrb_temporary_flats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rrb_housing_id, address, section, floor_numb, quant_rooms_in_flat, total_flat_area, live_area, kitchen_area, balcony_area, price_whoole_payment, price_lease_payment, flat_descripton, saler_name, saler_contact, link_to_source_inf, collect_information_dt, report_on_phase_dt', 'length', 'max'=>100),
			array('date_rec', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_rec, rrb_housing_id, address, section, floor_numb, quant_rooms_in_flat, total_flat_area, live_area, kitchen_area, balcony_area, price_whoole_payment, price_lease_payment, flat_descripton, saler_name, saler_contact, link_to_source_inf, collect_information_dt, report_on_phase_dt', 'safe', 'on'=>'search'),
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
			'date_rec' => 'Date Rec',
			'rrb_housing_id' => 'Rrb Housing',
			'address' => 'Address',
			'section' => 'Section',
			'floor_numb' => 'Floor Numb',
			'quant_rooms_in_flat' => 'Quant Rooms In Flat',
			'total_flat_area' => 'Total Flat Area',
			'live_area' => 'Live Area',
			'kitchen_area' => 'Kitchen Area',
			'balcony_area' => 'Balcony Area',
			'price_whoole_payment' => 'Price Whoole Payment',
			'price_lease_payment' => 'Price Lease Payment',
			'flat_descripton' => 'Flat Descripton',
			'saler_name' => 'Saler Name',
			'saler_contact' => 'Saler Contact',
			'link_to_source_inf' => 'Link To Source Inf',
			'collect_information_dt' => 'Collect Information Dt',
			'report_on_phase_dt' => 'Report On Phase Dt',
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
		$criteria->compare('date_rec',$this->date_rec,true);
		$criteria->compare('rrb_housing_id',$this->rrb_housing_id,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('section',$this->section,true);
		$criteria->compare('floor_numb',$this->floor_numb,true);
		$criteria->compare('quant_rooms_in_flat',$this->quant_rooms_in_flat,true);
		$criteria->compare('total_flat_area',$this->total_flat_area,true);
		$criteria->compare('live_area',$this->live_area,true);
		$criteria->compare('kitchen_area',$this->kitchen_area,true);
		$criteria->compare('balcony_area',$this->balcony_area,true);
		$criteria->compare('price_whoole_payment',$this->price_whoole_payment,true);
		$criteria->compare('price_lease_payment',$this->price_lease_payment,true);
		$criteria->compare('flat_descripton',$this->flat_descripton,true);
		$criteria->compare('saler_name',$this->saler_name,true);
		$criteria->compare('saler_contact',$this->saler_contact,true);
		$criteria->compare('link_to_source_inf',$this->link_to_source_inf,true);
		$criteria->compare('collect_information_dt',$this->collect_information_dt,true);
		$criteria->compare('report_on_phase_dt',$this->report_on_phase_dt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}