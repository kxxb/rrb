<?php	                                       			

/**
 * This is the model class for table "rrb_temporary_load".
 *
 * The followings are the available columns in table 'rrb_temporary_load':
 * @property integer $id
 * @property string $date_rec
 * @property integer $batch_number
 * @property string $n_comon
 * @property string $n_kvartal
 * @property string $report_kvartal
 * @property string $OBJECTID
 * @property string $komplex
 * @property string $ADDRESS
 * @property string $km_mkad
 * @property string $direction
 * @property string $SUBJECT
 * @property string $KOD_OKATO
 * @property string $Kod_cadastre
 * @property string $SUBJECT_rayon
 * @property string $REGION
 * @property string $SETTLEMENT
 * @property string $CITY
 * @property string $VGT
 * @property string $STREET_TYPE
 * @property string $STREET
 * @property string $HOUSE_NUM
 * @property string $LETTER
 * @property string $BUILDING
 * @property string $STRUCTURE
 * @property string $ESTATE
 * @property string $LONGITUDE
 * @property string $LATITUDE
 * @property string $CADASTRE_NUM
 * @property string $SECTION_COUNT
 * @property string $TYPE_DEVELOP
 * @property string $AREA_DEV
 * @property string $AREA_ALL_OBJECT
 * @property string $AREA_LOT
 * @property string $TECHNOLOGY
 * @property string $MATERIAL_WALL
 * @property string $PROJECT_TYPE
 * @property string $PROJECT_NUMBER
 * @property string $FLOOR_QNT_MIN
 * @property string $FLOOR_QNT_MAX
 * @property string $FLOOR_TYPE
 * @property string $CLASS_TYPE
 * @property string $CLASS
 * @property string $HEIGHT_FLOOR
 * @property string $FINISHING_TYPE_FLAT
 * @property string $FINISHING_LEVEL_FLAT
 * @property string $FINISHING_LEVEL_INSIDE
 * @property string $GLAZING
 * @property string $PARKING_TYPE
 * @property string $PARKING_COUNT
 * @property string $LIFT
 * @property string $ESTIMATE
 * @property string $FENCE
 * @property string $SECURITY
 * @property string $AREA_OBJECT
 * @property string $AREA_OBJECT_STUDIO
 * @property string $AREA_OBJECT_1
 * @property string $AREA_OBJECT_2
 * @property string $AREA_OBJECT_3
 * @property string $AREA_OBJECT_4
 * @property string $AREA_OBJECT_5
 * @property string $AREA_OBJECT_6
 * @property string $arae_studio_avg
 * @property string $AREA_OBJECT_STUDIO_MIN
 * @property string $AREA_OBJECT_STUDIO_MAX
 * @property string $AREA_OBJECT_STUDIO_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_STUDIO_NOT_HEAT_MAX
 * @property string $Area_object_1_av
 * @property string $AREA_OBJECT_1_MIN
 * @property string $AREA_OBJECT_1_MAX
 * @property string $AREA_OBJECT_1_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_1_NOT_HEAT_MAX
 * @property string $Area_object_2_av
 * @property string $AREA_OBJECT_2_MIN
 * @property string $AREA_OBJECT_2_MAX
 * @property string $AREA_OBJECT_2_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_2_NOT_HEAT_MAX
 * @property string $Area_object_3_av
 * @property string $AREA_OBJECT_3_MIN
 * @property string $AREA_OBJECT_3_MAX
 * @property string $AREA_OBJECT_3_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_3_NOT_HEAT_MAX
 * @property string $Area_object_4_av
 * @property string $AREA_OBJECT_4_MIN
 * @property string $AREA_OBJECT_4_MAX
 * @property string $AREA_OBJECT_4_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_4_NOT_HEAT_MAX
 * @property string $Area_object_5_av
 * @property string $AREA_OBJECT_5_MIN
 * @property string $AREA_OBJECT_5_MAX
 * @property string $AREA_OBJECT_5_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_5_NOT_HEAT_MAX
 * @property string $Area_object_6_av
 * @property string $AREA_OBJECT_6_MIN
 * @property string $AREA_OBJECT_6_MAX
 * @property string $AREA_OBJECT_6_NOT_HEAT_MIN
 * @property string $AREA_OBJECT_6_NOT_HEAT_MAX
 * @property string $Area_object_mnogo
 * @property string $Area_object_mnogo_av
 * @property string $Area_object_mnogo_min
 * @property string $Area_object_mnogo_max
 * @property string $Quantity_object
 * @property string $QUANTITY_OBJECT_STUDIO
 * @property string $Quantity_object_1
 * @property string $Quantity_object_2
 * @property string $Quantity_object_3
 * @property string $Quantity_object_4
 * @property string $Quantity_object_5
 * @property string $Quantity_object_6
 * @property string $Quantity_object_mnogo
 * @property string $COMMERCE_PLACE
 * @property string $AREA_COMMERCE
 * @property string $DEVELOPER
 * @property string $CONTACTS
 * @property string $URL_INFO
 * @property string $BUILDER
 * @property string $Investor
 * @property string $architect
 * @property string $DATE_PERMIT
 * @property string $NUMBER_PERMIT
 * @property string $BEGIN_SALE
 * @property string $BEGIN_BUILT
 * @property string $CONST_STAGE
 * @property string $CONST_STATUS
 * @property string $EXPL_PLAN
 * @property string $EXPL_FACT
 * @property string $impl_end
 * @property string $expl_start
 * @property string $delay_sheduly
 * @property string $EXPL_DATE
 * @property string $EXPL_NUMBER
 * @property string $INFR_TYPE
 * @property string $CONTRACT_TYPE
 * @property string $INSTALLMENT_PLAN
 * @property string $MORTGAGE
 * @property string $Price_min_object
 * @property string $Price_avg_object
 * @property string $Price_max_object
 * @property string $Price_avg_1
 * @property string $Price_avg_2
 * @property string $Price_avg_3
 * @property string $Price_avg_4
 * @property string $Price_avg_5
 * @property string $Price_avg_6
 * @property string $Price_avg_mnogo
 * @property string $Quantity_sell_object
 * @property string $Quantity_sell_1
 * @property string $Quantity_sell_2
 * @property string $Quantity_sell_3
 * @property string $Quantity_sell_4
 * @property string $Quantity_sell_5
 * @property string $Quantity_sell_6
 * @property string $total_n_rooms
 * @property string $koefficent
 * @property string $sale_temp_kavrtal
 * @property string $sale_temp_from_start
 * @property string $avg_flat_area
 * @property string $total_area_offer
 * @property string $total_whoole_price
 * @property string $total_area_offer_1r
 * @property string $total_wh_price_1r
 * @property string $total_area_offer_2r
 * @property string $total_wh_price_2r
 * @property string $total_area_offer_3r
 * @property string $total_wh_price_3r
 * @property string $total_area_offer_nr
 * @property string $total_wh_price_nr
 * @property string $quotas
 * @property string $update_category
 * @property string $SOURCE_DESC
 * @property string $DATE_RESEARCH
 * @property string $DATE_IN_BASE
 * @property string $SALE_STATUS
 * @property string $insert_date
 * @property string $comment_text
 * @property string $link1
 * @property string $link2
 * @property string $link3
 * @property string $link4
 * @property string $link5
 * @property string $link6
 * @property string $link7
 * @property string $link8
 * @property string $link9
 * @property string $link10
 * @property string $Railway_station
 * @property string $Subway_station
 * @property string $Price_Avg_1_wo_st
 * @property string $Price_Avg_Studio
 * @property string $Quantity_Sell_1_wo_st
 * @property string $Quantity_Sell_Studio
 * @property string $Total_Area_Offer_1r_wo_st
 * @property string $Total_Wh_Price_1r_wo_st
 * @property string $Total_Area_Offer_Studio
 * @property string $Total_Wh_Price_Studio
 * @property string $Seller_1
 * @property string $Seller_2
 * @property string $Seller_3
 * @property string $Seller_4
 * @property string $Seller_5
 * @property string $Seller_6
 */
class RrbTemporaryLoad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RrbTemporaryLoad the static model class
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
		return 'rrb_temporary_load';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('batch_number', 'numerical', 'integerOnly'=>true),
			array('n_comon, n_kvartal, report_kvartal, OBJECTID, komplex, ADDRESS, km_mkad, direction, SUBJECT, KOD_OKATO, Kod_cadastre, SUBJECT_rayon, REGION, SETTLEMENT, CITY, VGT, STREET_TYPE, STREET, HOUSE_NUM, LETTER, BUILDING, STRUCTURE, ESTATE, LONGITUDE, LATITUDE, CADASTRE_NUM, SECTION_COUNT, TYPE_DEVELOP, AREA_DEV, AREA_ALL_OBJECT, AREA_LOT, TECHNOLOGY, MATERIAL_WALL, PROJECT_TYPE, PROJECT_NUMBER, FLOOR_QNT_MIN, FLOOR_QNT_MAX, FLOOR_TYPE, CLASS_TYPE, CLASS, HEIGHT_FLOOR, FINISHING_TYPE_FLAT, FINISHING_LEVEL_FLAT, FINISHING_LEVEL_INSIDE, GLAZING, PARKING_TYPE, PARKING_COUNT, LIFT, ESTIMATE, FENCE, SECURITY, AREA_OBJECT, AREA_OBJECT_STUDIO, AREA_OBJECT_1, AREA_OBJECT_2, AREA_OBJECT_3, AREA_OBJECT_4, AREA_OBJECT_5, AREA_OBJECT_6, arae_studio_avg, AREA_OBJECT_STUDIO_MIN, AREA_OBJECT_STUDIO_MAX, AREA_OBJECT_STUDIO_NOT_HEAT_MIN, AREA_OBJECT_STUDIO_NOT_HEAT_MAX, Area_object_1_av, AREA_OBJECT_1_MIN, AREA_OBJECT_1_MAX, AREA_OBJECT_1_NOT_HEAT_MIN, AREA_OBJECT_1_NOT_HEAT_MAX, Area_object_2_av, AREA_OBJECT_2_MIN, AREA_OBJECT_2_MAX, AREA_OBJECT_2_NOT_HEAT_MIN, AREA_OBJECT_2_NOT_HEAT_MAX, Area_object_3_av, AREA_OBJECT_3_MIN, AREA_OBJECT_3_MAX, AREA_OBJECT_3_NOT_HEAT_MIN, AREA_OBJECT_3_NOT_HEAT_MAX, Area_object_4_av, AREA_OBJECT_4_MIN, AREA_OBJECT_4_MAX, AREA_OBJECT_4_NOT_HEAT_MIN, AREA_OBJECT_4_NOT_HEAT_MAX, Area_object_5_av, AREA_OBJECT_5_MIN, AREA_OBJECT_5_MAX, AREA_OBJECT_5_NOT_HEAT_MIN, AREA_OBJECT_5_NOT_HEAT_MAX, Area_object_6_av, AREA_OBJECT_6_MIN, AREA_OBJECT_6_MAX, AREA_OBJECT_6_NOT_HEAT_MIN, AREA_OBJECT_6_NOT_HEAT_MAX, Area_object_mnogo, Area_object_mnogo_av, Area_object_mnogo_min, Area_object_mnogo_max, Quantity_object, QUANTITY_OBJECT_STUDIO, Quantity_object_1, Quantity_object_2, Quantity_object_3, Quantity_object_4, Quantity_object_5, Quantity_object_6, Quantity_object_mnogo, COMMERCE_PLACE, AREA_COMMERCE, DEVELOPER, CONTACTS, URL_INFO, BUILDER, Investor, architect, DATE_PERMIT, NUMBER_PERMIT, BEGIN_SALE, BEGIN_BUILT, CONST_STAGE, CONST_STATUS, EXPL_PLAN, EXPL_FACT, impl_end, expl_start, delay_sheduly, EXPL_DATE, EXPL_NUMBER, INFR_TYPE, CONTRACT_TYPE, INSTALLMENT_PLAN, MORTGAGE, Price_min_object, Price_avg_object, Price_max_object, Price_avg_1, Price_avg_2, Price_avg_3, Price_avg_4, Price_avg_5, Price_avg_6, Price_avg_mnogo, Quantity_sell_object, Quantity_sell_1, Quantity_sell_2, Quantity_sell_3, Quantity_sell_4, Quantity_sell_5, Quantity_sell_6, total_n_rooms, koefficent, sale_temp_kavrtal, sale_temp_from_start, avg_flat_area, total_area_offer, total_whoole_price, total_area_offer_1r, total_wh_price_1r, total_area_offer_2r, total_wh_price_2r, total_area_offer_3r, total_wh_price_3r, total_area_offer_nr, total_wh_price_nr, quotas, update_category, SOURCE_DESC, DATE_RESEARCH, DATE_IN_BASE, SALE_STATUS, insert_date, comment_text', 'length', 'max'=>100),
			array('link1, link2, link3, link4, link5, link6, link7, link8, link9, link10, Railway_station, Subway_station, Price_Avg_1_wo_st, Seller_1, Seller_2, Seller_3, Seller_4, Seller_5, Seller_6', 'length', 'max'=>200),
			array('Price_Avg_Studio, Quantity_Sell_1_wo_st, Quantity_Sell_Studio, Total_Area_Offer_1r_wo_st, Total_Wh_Price_1r_wo_st, Total_Area_Offer_Studio, Total_Wh_Price_Studio', 'length', 'max'=>45),
			array('date_rec', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_rec, batch_number, n_comon, n_kvartal, report_kvartal, OBJECTID, komplex, ADDRESS, km_mkad, direction, SUBJECT, KOD_OKATO, Kod_cadastre, SUBJECT_rayon, REGION, SETTLEMENT, CITY, VGT, STREET_TYPE, STREET, HOUSE_NUM, LETTER, BUILDING, STRUCTURE, ESTATE, LONGITUDE, LATITUDE, CADASTRE_NUM, SECTION_COUNT, TYPE_DEVELOP, AREA_DEV, AREA_ALL_OBJECT, AREA_LOT, TECHNOLOGY, MATERIAL_WALL, PROJECT_TYPE, PROJECT_NUMBER, FLOOR_QNT_MIN, FLOOR_QNT_MAX, FLOOR_TYPE, CLASS_TYPE, CLASS, HEIGHT_FLOOR, FINISHING_TYPE_FLAT, FINISHING_LEVEL_FLAT, FINISHING_LEVEL_INSIDE, GLAZING, PARKING_TYPE, PARKING_COUNT, LIFT, ESTIMATE, FENCE, SECURITY, AREA_OBJECT, AREA_OBJECT_STUDIO, AREA_OBJECT_1, AREA_OBJECT_2, AREA_OBJECT_3, AREA_OBJECT_4, AREA_OBJECT_5, AREA_OBJECT_6, arae_studio_avg, AREA_OBJECT_STUDIO_MIN, AREA_OBJECT_STUDIO_MAX, AREA_OBJECT_STUDIO_NOT_HEAT_MIN, AREA_OBJECT_STUDIO_NOT_HEAT_MAX, Area_object_1_av, AREA_OBJECT_1_MIN, AREA_OBJECT_1_MAX, AREA_OBJECT_1_NOT_HEAT_MIN, AREA_OBJECT_1_NOT_HEAT_MAX, Area_object_2_av, AREA_OBJECT_2_MIN, AREA_OBJECT_2_MAX, AREA_OBJECT_2_NOT_HEAT_MIN, AREA_OBJECT_2_NOT_HEAT_MAX, Area_object_3_av, AREA_OBJECT_3_MIN, AREA_OBJECT_3_MAX, AREA_OBJECT_3_NOT_HEAT_MIN, AREA_OBJECT_3_NOT_HEAT_MAX, Area_object_4_av, AREA_OBJECT_4_MIN, AREA_OBJECT_4_MAX, AREA_OBJECT_4_NOT_HEAT_MIN, AREA_OBJECT_4_NOT_HEAT_MAX, Area_object_5_av, AREA_OBJECT_5_MIN, AREA_OBJECT_5_MAX, AREA_OBJECT_5_NOT_HEAT_MIN, AREA_OBJECT_5_NOT_HEAT_MAX, Area_object_6_av, AREA_OBJECT_6_MIN, AREA_OBJECT_6_MAX, AREA_OBJECT_6_NOT_HEAT_MIN, AREA_OBJECT_6_NOT_HEAT_MAX, Area_object_mnogo, Area_object_mnogo_av, Area_object_mnogo_min, Area_object_mnogo_max, Quantity_object, QUANTITY_OBJECT_STUDIO, Quantity_object_1, Quantity_object_2, Quantity_object_3, Quantity_object_4, Quantity_object_5, Quantity_object_6, Quantity_object_mnogo, COMMERCE_PLACE, AREA_COMMERCE, DEVELOPER, CONTACTS, URL_INFO, BUILDER, Investor, architect, DATE_PERMIT, NUMBER_PERMIT, BEGIN_SALE, BEGIN_BUILT, CONST_STAGE, CONST_STATUS, EXPL_PLAN, EXPL_FACT, impl_end, expl_start, delay_sheduly, EXPL_DATE, EXPL_NUMBER, INFR_TYPE, CONTRACT_TYPE, INSTALLMENT_PLAN, MORTGAGE, Price_min_object, Price_avg_object, Price_max_object, Price_avg_1, Price_avg_2, Price_avg_3, Price_avg_4, Price_avg_5, Price_avg_6, Price_avg_mnogo, Quantity_sell_object, Quantity_sell_1, Quantity_sell_2, Quantity_sell_3, Quantity_sell_4, Quantity_sell_5, Quantity_sell_6, total_n_rooms, koefficent, sale_temp_kavrtal, sale_temp_from_start, avg_flat_area, total_area_offer, total_whoole_price, total_area_offer_1r, total_wh_price_1r, total_area_offer_2r, total_wh_price_2r, total_area_offer_3r, total_wh_price_3r, total_area_offer_nr, total_wh_price_nr, quotas, update_category, SOURCE_DESC, DATE_RESEARCH, DATE_IN_BASE, SALE_STATUS, insert_date, comment_text, link1, link2, link3, link4, link5, link6, link7, link8, link9, link10, Railway_station, Subway_station, Price_Avg_1_wo_st, Price_Avg_Studio, Quantity_Sell_1_wo_st, Quantity_Sell_Studio, Total_Area_Offer_1r_wo_st, Total_Wh_Price_1r_wo_st, Total_Area_Offer_Studio, Total_Wh_Price_Studio, Seller_1, Seller_2, Seller_3, Seller_4, Seller_5, Seller_6', 'safe', 'on'=>'search'),
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
			'batch_number' => 'Batch Number',
			'n_comon' => 'N Comon',
			'n_kvartal' => 'N Kvartal',
			'report_kvartal' => 'Report Kvartal',
			'OBJECTID' => 'Objectid',
			'komplex' => 'Komplex',
			'ADDRESS' => 'Address',
			'km_mkad' => 'Km Mkad',
			'direction' => 'Direction',
			'SUBJECT' => 'Subject',
			'KOD_OKATO' => 'Kod Okato',
			'Kod_cadastre' => 'Kod Cadastre',
			'SUBJECT_rayon' => 'Subject Rayon',
			'REGION' => 'Region',
			'SETTLEMENT' => 'Settlement',
			'CITY' => 'City',
			'VGT' => 'Vgt',
			'STREET_TYPE' => 'Street Type',
			'STREET' => 'Street',
			'HOUSE_NUM' => 'House Num',
			'LETTER' => 'Letter',
			'BUILDING' => 'Building',
			'STRUCTURE' => 'Structure',
			'ESTATE' => 'Estate',
			'LONGITUDE' => 'Longitude',
			'LATITUDE' => 'Latitude',
			'CADASTRE_NUM' => 'Cadastre Num',
			'SECTION_COUNT' => 'Section Count',
			'TYPE_DEVELOP' => 'Type Develop',
			'AREA_DEV' => 'Area Dev',
			'AREA_ALL_OBJECT' => 'Area All Object',
			'AREA_LOT' => 'Area Lot',
			'TECHNOLOGY' => 'Technology',
			'MATERIAL_WALL' => 'Material Wall',
			'PROJECT_TYPE' => 'Project Type',
			'PROJECT_NUMBER' => 'Project Number',
			'FLOOR_QNT_MIN' => 'Floor Qnt Min',
			'FLOOR_QNT_MAX' => 'Floor Qnt Max',
			'FLOOR_TYPE' => 'Floor Type',
			'CLASS_TYPE' => 'Class Type',
			'CLASS' => 'Class',
			'HEIGHT_FLOOR' => 'Height Floor',
			'FINISHING_TYPE_FLAT' => 'Finishing Type Flat',
			'FINISHING_LEVEL_FLAT' => 'Finishing Level Flat',
			'FINISHING_LEVEL_INSIDE' => 'Finishing Level Inside',
			'GLAZING' => 'Glazing',
			'PARKING_TYPE' => 'Parking Type',
			'PARKING_COUNT' => 'Parking Count',
			'LIFT' => 'Lift',
			'ESTIMATE' => 'Estimate',
			'FENCE' => 'Fence',
			'SECURITY' => 'Security',
			'AREA_OBJECT' => 'Area Object',
			'AREA_OBJECT_STUDIO' => 'Area Object Studio',
			'AREA_OBJECT_1' => 'Area Object 1',
			'AREA_OBJECT_2' => 'Area Object 2',
			'AREA_OBJECT_3' => 'Area Object 3',
			'AREA_OBJECT_4' => 'Area Object 4',
			'AREA_OBJECT_5' => 'Area Object 5',
			'AREA_OBJECT_6' => 'Area Object 6',
			'arae_studio_avg' => 'Arae Studio Avg',
			'AREA_OBJECT_STUDIO_MIN' => 'Area Object Studio Min',
			'AREA_OBJECT_STUDIO_MAX' => 'Area Object Studio Max',
			'AREA_OBJECT_STUDIO_NOT_HEAT_MIN' => 'Area Object Studio Not Heat Min',
			'AREA_OBJECT_STUDIO_NOT_HEAT_MAX' => 'Area Object Studio Not Heat Max',
			'Area_object_1_av' => 'Area Object 1 Av',
			'AREA_OBJECT_1_MIN' => 'Area Object 1 Min',
			'AREA_OBJECT_1_MAX' => 'Area Object 1 Max',
			'AREA_OBJECT_1_NOT_HEAT_MIN' => 'Area Object 1 Not Heat Min',
			'AREA_OBJECT_1_NOT_HEAT_MAX' => 'Area Object 1 Not Heat Max',
			'Area_object_2_av' => 'Area Object 2 Av',
			'AREA_OBJECT_2_MIN' => 'Area Object 2 Min',
			'AREA_OBJECT_2_MAX' => 'Area Object 2 Max',
			'AREA_OBJECT_2_NOT_HEAT_MIN' => 'Area Object 2 Not Heat Min',
			'AREA_OBJECT_2_NOT_HEAT_MAX' => 'Area Object 2 Not Heat Max',
			'Area_object_3_av' => 'Area Object 3 Av',
			'AREA_OBJECT_3_MIN' => 'Area Object 3 Min',
			'AREA_OBJECT_3_MAX' => 'Area Object 3 Max',
			'AREA_OBJECT_3_NOT_HEAT_MIN' => 'Area Object 3 Not Heat Min',
			'AREA_OBJECT_3_NOT_HEAT_MAX' => 'Area Object 3 Not Heat Max',
			'Area_object_4_av' => 'Area Object 4 Av',
			'AREA_OBJECT_4_MIN' => 'Area Object 4 Min',
			'AREA_OBJECT_4_MAX' => 'Area Object 4 Max',
			'AREA_OBJECT_4_NOT_HEAT_MIN' => 'Area Object 4 Not Heat Min',
			'AREA_OBJECT_4_NOT_HEAT_MAX' => 'Area Object 4 Not Heat Max',
			'Area_object_5_av' => 'Area Object 5 Av',
			'AREA_OBJECT_5_MIN' => 'Area Object 5 Min',
			'AREA_OBJECT_5_MAX' => 'Area Object 5 Max',
			'AREA_OBJECT_5_NOT_HEAT_MIN' => 'Area Object 5 Not Heat Min',
			'AREA_OBJECT_5_NOT_HEAT_MAX' => 'Area Object 5 Not Heat Max',
			'Area_object_6_av' => 'Area Object 6 Av',
			'AREA_OBJECT_6_MIN' => 'Area Object 6 Min',
			'AREA_OBJECT_6_MAX' => 'Area Object 6 Max',
			'AREA_OBJECT_6_NOT_HEAT_MIN' => 'Area Object 6 Not Heat Min',
			'AREA_OBJECT_6_NOT_HEAT_MAX' => 'Area Object 6 Not Heat Max',
			'Area_object_mnogo' => 'Area Object Mnogo',
			'Area_object_mnogo_av' => 'Area Object Mnogo Av',
			'Area_object_mnogo_min' => 'Area Object Mnogo Min',
			'Area_object_mnogo_max' => 'Area Object Mnogo Max',
			'Quantity_object' => 'Quantity Object',
			'QUANTITY_OBJECT_STUDIO' => 'Quantity Object Studio',
			'Quantity_object_1' => 'Quantity Object 1',
			'Quantity_object_2' => 'Quantity Object 2',
			'Quantity_object_3' => 'Quantity Object 3',
			'Quantity_object_4' => 'Quantity Object 4',
			'Quantity_object_5' => 'Quantity Object 5',
			'Quantity_object_6' => 'Quantity Object 6',
			'Quantity_object_mnogo' => 'Quantity Object Mnogo',
			'COMMERCE_PLACE' => 'Commerce Place',
			'AREA_COMMERCE' => 'Area Commerce',
			'DEVELOPER' => 'Developer',
			'CONTACTS' => 'Contacts',
			'URL_INFO' => 'Url Info',
			'BUILDER' => 'Builder',
			'Investor' => 'Investor',
			'architect' => 'Architect',
			'DATE_PERMIT' => 'Date Permit',
			'NUMBER_PERMIT' => 'Number Permit',
			'BEGIN_SALE' => 'Begin Sale',
			'BEGIN_BUILT' => 'Begin Built',
			'CONST_STAGE' => 'Const Stage',
			'CONST_STATUS' => 'Const Status',
			'EXPL_PLAN' => 'Expl Plan',
			'EXPL_FACT' => 'Expl Fact',
			'impl_end' => 'Impl End',
			'expl_start' => 'Expl Start',
			'delay_sheduly' => 'Delay Sheduly',
			'EXPL_DATE' => 'Expl Date',
			'EXPL_NUMBER' => 'Expl Number',
			'INFR_TYPE' => 'Infr Type',
			'CONTRACT_TYPE' => 'Contract Type',
			'INSTALLMENT_PLAN' => 'Installment Plan',
			'MORTGAGE' => 'Mortgage',
			'Price_min_object' => 'Price Min Object',
			'Price_avg_object' => 'Price Avg Object',
			'Price_max_object' => 'Price Max Object',
			'Price_avg_1' => 'Price Avg 1',
			'Price_avg_2' => 'Price Avg 2',
			'Price_avg_3' => 'Price Avg 3',
			'Price_avg_4' => 'Price Avg 4',
			'Price_avg_5' => 'Price Avg 5',
			'Price_avg_6' => 'Price Avg 6',
			'Price_avg_mnogo' => 'Price Avg Mnogo',
			'Quantity_sell_object' => 'Quantity Sell Object',
			'Quantity_sell_1' => 'Quantity Sell 1',
			'Quantity_sell_2' => 'Quantity Sell 2',
			'Quantity_sell_3' => 'Quantity Sell 3',
			'Quantity_sell_4' => 'Quantity Sell 4',
			'Quantity_sell_5' => 'Quantity Sell 5',
			'Quantity_sell_6' => 'Quantity Sell 6',
			'total_n_rooms' => 'Total N Rooms',
			'koefficent' => 'Koefficent',
			'sale_temp_kavrtal' => 'Sale Temp Kavrtal',
			'sale_temp_from_start' => 'Sale Temp From Start',
			'avg_flat_area' => 'Avg Flat Area',
			'total_area_offer' => 'Total Area Offer',
			'total_whoole_price' => 'Total Whoole Price',
			'total_area_offer_1r' => 'Total Area Offer 1r',
			'total_wh_price_1r' => 'Total Wh Price 1r',
			'total_area_offer_2r' => 'Total Area Offer 2r',
			'total_wh_price_2r' => 'Total Wh Price 2r',
			'total_area_offer_3r' => 'Total Area Offer 3r',
			'total_wh_price_3r' => 'Total Wh Price 3r',
			'total_area_offer_nr' => 'Total Area Offer Nr',
			'total_wh_price_nr' => 'Total Wh Price Nr',
			'quotas' => 'Quotas',
			'update_category' => 'Update Category',
			'SOURCE_DESC' => 'Source Desc',
			'DATE_RESEARCH' => 'Date Research',
			'DATE_IN_BASE' => 'Date In Base',
			'SALE_STATUS' => 'Sale Status',
			'insert_date' => 'Insert Date',
			'comment_text' => 'Comment Text',
			'link1' => 'Link1',
			'link2' => 'Link2',
			'link3' => 'Link3',
			'link4' => 'Link4',
			'link5' => 'Link5',
			'link6' => 'Link6',
			'link7' => 'Link7',
			'link8' => 'Link8',
			'link9' => 'Link9',
			'link10' => 'Link10',
			'Railway_station' => 'Railway Station',
			'Subway_station' => 'Subway Station',
			'Price_Avg_1_wo_st' => 'Price Avg 1 Wo St',
			'Price_Avg_Studio' => 'Price Avg Studio',
			'Quantity_Sell_1_wo_st' => 'Quantity Sell 1 Wo St',
			'Quantity_Sell_Studio' => 'Quantity Sell Studio',
			'Total_Area_Offer_1r_wo_st' => 'Total Area Offer 1r Wo St',
			'Total_Wh_Price_1r_wo_st' => 'Total Wh Price 1r Wo St',
			'Total_Area_Offer_Studio' => 'Total Area Offer Studio',
			'Total_Wh_Price_Studio' => 'Total Wh Price Studio',
			'Seller_1' => 'Seller 1',
			'Seller_2' => 'Seller 2',
			'Seller_3' => 'Seller 3',
			'Seller_4' => 'Seller 4',
			'Seller_5' => 'Seller 5',
			'Seller_6' => 'Seller 6',
                        'State' => 'State',
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
		$criteria->compare('batch_number',$this->batch_number);
		$criteria->compare('n_comon',$this->n_comon,true);
		$criteria->compare('n_kvartal',$this->n_kvartal,true);
		$criteria->compare('report_kvartal',$this->report_kvartal,true);
		$criteria->compare('OBJECTID',$this->OBJECTID,true);
		$criteria->compare('komplex',$this->komplex,true);
		$criteria->compare('ADDRESS',$this->ADDRESS,true);
		$criteria->compare('km_mkad',$this->km_mkad,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('SUBJECT',$this->SUBJECT,true);
		$criteria->compare('KOD_OKATO',$this->KOD_OKATO,true);
		$criteria->compare('Kod_cadastre',$this->Kod_cadastre,true);
		$criteria->compare('SUBJECT_rayon',$this->SUBJECT_rayon,true);
		$criteria->compare('REGION',$this->REGION,true);
		$criteria->compare('SETTLEMENT',$this->SETTLEMENT,true);
		$criteria->compare('CITY',$this->CITY,true);
		$criteria->compare('VGT',$this->VGT,true);
		$criteria->compare('STREET_TYPE',$this->STREET_TYPE,true);
		$criteria->compare('STREET',$this->STREET,true);
		$criteria->compare('HOUSE_NUM',$this->HOUSE_NUM,true);
		$criteria->compare('LETTER',$this->LETTER,true);
		$criteria->compare('BUILDING',$this->BUILDING,true);
		$criteria->compare('STRUCTURE',$this->STRUCTURE,true);
		$criteria->compare('ESTATE',$this->ESTATE,true);
		$criteria->compare('LONGITUDE',$this->LONGITUDE,true);
		$criteria->compare('LATITUDE',$this->LATITUDE,true);
		$criteria->compare('CADASTRE_NUM',$this->CADASTRE_NUM,true);
		$criteria->compare('SECTION_COUNT',$this->SECTION_COUNT,true);
		$criteria->compare('TYPE_DEVELOP',$this->TYPE_DEVELOP,true);
		$criteria->compare('AREA_DEV',$this->AREA_DEV,true);
		$criteria->compare('AREA_ALL_OBJECT',$this->AREA_ALL_OBJECT,true);
		$criteria->compare('AREA_LOT',$this->AREA_LOT,true);
		$criteria->compare('TECHNOLOGY',$this->TECHNOLOGY,true);
		$criteria->compare('MATERIAL_WALL',$this->MATERIAL_WALL,true);
		$criteria->compare('PROJECT_TYPE',$this->PROJECT_TYPE,true);
		$criteria->compare('PROJECT_NUMBER',$this->PROJECT_NUMBER,true);
		$criteria->compare('FLOOR_QNT_MIN',$this->FLOOR_QNT_MIN,true);
		$criteria->compare('FLOOR_QNT_MAX',$this->FLOOR_QNT_MAX,true);
		$criteria->compare('FLOOR_TYPE',$this->FLOOR_TYPE,true);
		$criteria->compare('CLASS_TYPE',$this->CLASS_TYPE,true);
		$criteria->compare('CLASS',$this->CLASS,true);
		$criteria->compare('HEIGHT_FLOOR',$this->HEIGHT_FLOOR,true);
		$criteria->compare('FINISHING_TYPE_FLAT',$this->FINISHING_TYPE_FLAT,true);
		$criteria->compare('FINISHING_LEVEL_FLAT',$this->FINISHING_LEVEL_FLAT,true);
		$criteria->compare('FINISHING_LEVEL_INSIDE',$this->FINISHING_LEVEL_INSIDE,true);
		$criteria->compare('GLAZING',$this->GLAZING,true);
		$criteria->compare('PARKING_TYPE',$this->PARKING_TYPE,true);
		$criteria->compare('PARKING_COUNT',$this->PARKING_COUNT,true);
		$criteria->compare('LIFT',$this->LIFT,true);
		$criteria->compare('ESTIMATE',$this->ESTIMATE,true);
		$criteria->compare('FENCE',$this->FENCE,true);
		$criteria->compare('SECURITY',$this->SECURITY,true);
		$criteria->compare('AREA_OBJECT',$this->AREA_OBJECT,true);
		$criteria->compare('AREA_OBJECT_STUDIO',$this->AREA_OBJECT_STUDIO,true);
		$criteria->compare('AREA_OBJECT_1',$this->AREA_OBJECT_1,true);
		$criteria->compare('AREA_OBJECT_2',$this->AREA_OBJECT_2,true);
		$criteria->compare('AREA_OBJECT_3',$this->AREA_OBJECT_3,true);
		$criteria->compare('AREA_OBJECT_4',$this->AREA_OBJECT_4,true);
		$criteria->compare('AREA_OBJECT_5',$this->AREA_OBJECT_5,true);
		$criteria->compare('AREA_OBJECT_6',$this->AREA_OBJECT_6,true);
		$criteria->compare('arae_studio_avg',$this->arae_studio_avg,true);
		$criteria->compare('AREA_OBJECT_STUDIO_MIN',$this->AREA_OBJECT_STUDIO_MIN,true);
		$criteria->compare('AREA_OBJECT_STUDIO_MAX',$this->AREA_OBJECT_STUDIO_MAX,true);
		$criteria->compare('AREA_OBJECT_STUDIO_NOT_HEAT_MIN',$this->AREA_OBJECT_STUDIO_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_STUDIO_NOT_HEAT_MAX',$this->AREA_OBJECT_STUDIO_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_1_av',$this->Area_object_1_av,true);
		$criteria->compare('AREA_OBJECT_1_MIN',$this->AREA_OBJECT_1_MIN,true);
		$criteria->compare('AREA_OBJECT_1_MAX',$this->AREA_OBJECT_1_MAX,true);
		$criteria->compare('AREA_OBJECT_1_NOT_HEAT_MIN',$this->AREA_OBJECT_1_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_1_NOT_HEAT_MAX',$this->AREA_OBJECT_1_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_2_av',$this->Area_object_2_av,true);
		$criteria->compare('AREA_OBJECT_2_MIN',$this->AREA_OBJECT_2_MIN,true);
		$criteria->compare('AREA_OBJECT_2_MAX',$this->AREA_OBJECT_2_MAX,true);
		$criteria->compare('AREA_OBJECT_2_NOT_HEAT_MIN',$this->AREA_OBJECT_2_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_2_NOT_HEAT_MAX',$this->AREA_OBJECT_2_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_3_av',$this->Area_object_3_av,true);
		$criteria->compare('AREA_OBJECT_3_MIN',$this->AREA_OBJECT_3_MIN,true);
		$criteria->compare('AREA_OBJECT_3_MAX',$this->AREA_OBJECT_3_MAX,true);
		$criteria->compare('AREA_OBJECT_3_NOT_HEAT_MIN',$this->AREA_OBJECT_3_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_3_NOT_HEAT_MAX',$this->AREA_OBJECT_3_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_4_av',$this->Area_object_4_av,true);
		$criteria->compare('AREA_OBJECT_4_MIN',$this->AREA_OBJECT_4_MIN,true);
		$criteria->compare('AREA_OBJECT_4_MAX',$this->AREA_OBJECT_4_MAX,true);
		$criteria->compare('AREA_OBJECT_4_NOT_HEAT_MIN',$this->AREA_OBJECT_4_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_4_NOT_HEAT_MAX',$this->AREA_OBJECT_4_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_5_av',$this->Area_object_5_av,true);
		$criteria->compare('AREA_OBJECT_5_MIN',$this->AREA_OBJECT_5_MIN,true);
		$criteria->compare('AREA_OBJECT_5_MAX',$this->AREA_OBJECT_5_MAX,true);
		$criteria->compare('AREA_OBJECT_5_NOT_HEAT_MIN',$this->AREA_OBJECT_5_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_5_NOT_HEAT_MAX',$this->AREA_OBJECT_5_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_6_av',$this->Area_object_6_av,true);
		$criteria->compare('AREA_OBJECT_6_MIN',$this->AREA_OBJECT_6_MIN,true);
		$criteria->compare('AREA_OBJECT_6_MAX',$this->AREA_OBJECT_6_MAX,true);
		$criteria->compare('AREA_OBJECT_6_NOT_HEAT_MIN',$this->AREA_OBJECT_6_NOT_HEAT_MIN,true);
		$criteria->compare('AREA_OBJECT_6_NOT_HEAT_MAX',$this->AREA_OBJECT_6_NOT_HEAT_MAX,true);
		$criteria->compare('Area_object_mnogo',$this->Area_object_mnogo,true);
		$criteria->compare('Area_object_mnogo_av',$this->Area_object_mnogo_av,true);
		$criteria->compare('Area_object_mnogo_min',$this->Area_object_mnogo_min,true);
		$criteria->compare('Area_object_mnogo_max',$this->Area_object_mnogo_max,true);
		$criteria->compare('Quantity_object',$this->Quantity_object,true);
		$criteria->compare('QUANTITY_OBJECT_STUDIO',$this->QUANTITY_OBJECT_STUDIO,true);
		$criteria->compare('Quantity_object_1',$this->Quantity_object_1,true);
		$criteria->compare('Quantity_object_2',$this->Quantity_object_2,true);
		$criteria->compare('Quantity_object_3',$this->Quantity_object_3,true);
		$criteria->compare('Quantity_object_4',$this->Quantity_object_4,true);
		$criteria->compare('Quantity_object_5',$this->Quantity_object_5,true);
		$criteria->compare('Quantity_object_6',$this->Quantity_object_6,true);
		$criteria->compare('Quantity_object_mnogo',$this->Quantity_object_mnogo,true);
		$criteria->compare('COMMERCE_PLACE',$this->COMMERCE_PLACE,true);
		$criteria->compare('AREA_COMMERCE',$this->AREA_COMMERCE,true);
		$criteria->compare('DEVELOPER',$this->DEVELOPER,true);
		$criteria->compare('CONTACTS',$this->CONTACTS,true);
		$criteria->compare('URL_INFO',$this->URL_INFO,true);
		$criteria->compare('BUILDER',$this->BUILDER,true);
		$criteria->compare('Investor',$this->Investor,true);
		$criteria->compare('architect',$this->architect,true);
		$criteria->compare('DATE_PERMIT',$this->DATE_PERMIT,true);
		$criteria->compare('NUMBER_PERMIT',$this->NUMBER_PERMIT,true);
		$criteria->compare('BEGIN_SALE',$this->BEGIN_SALE,true);
		$criteria->compare('BEGIN_BUILT',$this->BEGIN_BUILT,true);
		$criteria->compare('CONST_STAGE',$this->CONST_STAGE,true);
		$criteria->compare('CONST_STATUS',$this->CONST_STATUS,true);
		$criteria->compare('EXPL_PLAN',$this->EXPL_PLAN,true);
		$criteria->compare('EXPL_FACT',$this->EXPL_FACT,true);
		$criteria->compare('impl_end',$this->impl_end,true);
		$criteria->compare('expl_start',$this->expl_start,true);
		$criteria->compare('delay_sheduly',$this->delay_sheduly,true);
		$criteria->compare('EXPL_DATE',$this->EXPL_DATE,true);
		$criteria->compare('EXPL_NUMBER',$this->EXPL_NUMBER,true);
		$criteria->compare('INFR_TYPE',$this->INFR_TYPE,true);
		$criteria->compare('CONTRACT_TYPE',$this->CONTRACT_TYPE,true);
		$criteria->compare('INSTALLMENT_PLAN',$this->INSTALLMENT_PLAN,true);
		$criteria->compare('MORTGAGE',$this->MORTGAGE,true);
		$criteria->compare('Price_min_object',$this->Price_min_object,true);
		$criteria->compare('Price_avg_object',$this->Price_avg_object,true);
		$criteria->compare('Price_max_object',$this->Price_max_object,true);
		$criteria->compare('Price_avg_1',$this->Price_avg_1,true);
		$criteria->compare('Price_avg_2',$this->Price_avg_2,true);
		$criteria->compare('Price_avg_3',$this->Price_avg_3,true);
		$criteria->compare('Price_avg_4',$this->Price_avg_4,true);
		$criteria->compare('Price_avg_5',$this->Price_avg_5,true);
		$criteria->compare('Price_avg_6',$this->Price_avg_6,true);
		$criteria->compare('Price_avg_mnogo',$this->Price_avg_mnogo,true);
		$criteria->compare('Quantity_sell_object',$this->Quantity_sell_object,true);
		$criteria->compare('Quantity_sell_1',$this->Quantity_sell_1,true);
		$criteria->compare('Quantity_sell_2',$this->Quantity_sell_2,true);
		$criteria->compare('Quantity_sell_3',$this->Quantity_sell_3,true);
		$criteria->compare('Quantity_sell_4',$this->Quantity_sell_4,true);
		$criteria->compare('Quantity_sell_5',$this->Quantity_sell_5,true);
		$criteria->compare('Quantity_sell_6',$this->Quantity_sell_6,true);
		$criteria->compare('total_n_rooms',$this->total_n_rooms,true);
		$criteria->compare('koefficent',$this->koefficent,true);
		$criteria->compare('sale_temp_kavrtal',$this->sale_temp_kavrtal,true);
		$criteria->compare('sale_temp_from_start',$this->sale_temp_from_start,true);
		$criteria->compare('avg_flat_area',$this->avg_flat_area,true);
		$criteria->compare('total_area_offer',$this->total_area_offer,true);
		$criteria->compare('total_whoole_price',$this->total_whoole_price,true);
		$criteria->compare('total_area_offer_1r',$this->total_area_offer_1r,true);
		$criteria->compare('total_wh_price_1r',$this->total_wh_price_1r,true);
		$criteria->compare('total_area_offer_2r',$this->total_area_offer_2r,true);
		$criteria->compare('total_wh_price_2r',$this->total_wh_price_2r,true);
		$criteria->compare('total_area_offer_3r',$this->total_area_offer_3r,true);
		$criteria->compare('total_wh_price_3r',$this->total_wh_price_3r,true);
		$criteria->compare('total_area_offer_nr',$this->total_area_offer_nr,true);
		$criteria->compare('total_wh_price_nr',$this->total_wh_price_nr,true);
		$criteria->compare('quotas',$this->quotas,true);
		$criteria->compare('update_category',$this->update_category,true);
		$criteria->compare('SOURCE_DESC',$this->SOURCE_DESC,true);
		$criteria->compare('DATE_RESEARCH',$this->DATE_RESEARCH,true);
		$criteria->compare('DATE_IN_BASE',$this->DATE_IN_BASE,true);
		$criteria->compare('SALE_STATUS',$this->SALE_STATUS,true);
		$criteria->compare('insert_date',$this->insert_date,true);
		$criteria->compare('comment_text',$this->comment_text,true);
		$criteria->compare('link1',$this->link1,true);
		$criteria->compare('link2',$this->link2,true);
		$criteria->compare('link3',$this->link3,true);
		$criteria->compare('link4',$this->link4,true);
		$criteria->compare('link5',$this->link5,true);
		$criteria->compare('link6',$this->link6,true);
		$criteria->compare('link7',$this->link7,true);
		$criteria->compare('link8',$this->link8,true);
		$criteria->compare('link9',$this->link9,true);
		$criteria->compare('link10',$this->link10,true);
		$criteria->compare('Railway_station',$this->Railway_station,true);
		$criteria->compare('Subway_station',$this->Subway_station,true);
		$criteria->compare('Price_Avg_1_wo_st',$this->Price_Avg_1_wo_st,true);
		$criteria->compare('Price_Avg_Studio',$this->Price_Avg_Studio,true);
		$criteria->compare('Quantity_Sell_1_wo_st',$this->Quantity_Sell_1_wo_st,true);
		$criteria->compare('Quantity_Sell_Studio',$this->Quantity_Sell_Studio,true);
		$criteria->compare('Total_Area_Offer_1r_wo_st',$this->Total_Area_Offer_1r_wo_st,true);
		$criteria->compare('Total_Wh_Price_1r_wo_st',$this->Total_Wh_Price_1r_wo_st,true);
		$criteria->compare('Total_Area_Offer_Studio',$this->Total_Area_Offer_Studio,true);
		$criteria->compare('Total_Wh_Price_Studio',$this->Total_Wh_Price_Studio,true);
		$criteria->compare('Seller_1',$this->Seller_1,true);
		$criteria->compare('Seller_2',$this->Seller_2,true);
		$criteria->compare('Seller_3',$this->Seller_3,true);
		$criteria->compare('Seller_4',$this->Seller_4,true);
		$criteria->compare('Seller_5',$this->Seller_5,true);
		$criteria->compare('Seller_6',$this->Seller_6,true);
                $criteria->compare('State',$this->State,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}