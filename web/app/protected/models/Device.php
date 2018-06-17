<?php
  /**
   *
   */
  class Device extends CActiveRecord
  {
    public static function model($className = __CLASS__){
      return parent::model($className);
    }

    public function tableName()
    {
      return "devices";
    }
    public function attributeLabels()
    {
      return array(
        'id' => "รหัสเครื่อง",
        'device_type_id' => "รหัสเครื่อง",
        'device_name' => "ชื่อ",
        'device_brand_name' => "ยี่ห้อ",
        'device_code' => "code",
        'device_price' => "ราคาซื้อ",
        'device_created_date' => "วันที่บันทึก",
         'device_buy_date'=>"วันที่ซื้อ",
         'device_garantee_expire_date'=> "วันหมดประกัน"

      );
    }
    public static function getOptions() {
        $model = Device::model()->findAll();
        $arr = array();
        foreach ($model as $r) {
            $arr[$r->id] = $r->device_brand_name." ".$r->device_name;
        }
        return $arr;
    }
    public function beforeValidate() {
        if ($this->isNewRecord) {
            $this->device_created_date = new CDbExpression("NOW()");
        }

        return parent::beforeValidate();
    }
    public function search(){
      $criteria = new CDbCriteria;
      return new CActiveDataProvider($this,array(
        'criteria' => $criteria
      ));
    }
    public function relations() {
        return array(
            "device_types" => array(self::BELONGS_TO, "DeviceType", "device_type_id")
        );
    }

  }


 ?>
