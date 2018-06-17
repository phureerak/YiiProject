<?php
  echo CHtml::form();
  echo CHtml::label("ลูกค้าชื่อ","name");
  echo CHtml::textField("name");
  echo "<BR>";
  echo CHtml::label("หมายเลขโทรศัพท์","phone");
  echo CHtml::textField("phone");
  echo "<BR>สั่งอาหาร";
  echo CHtml::radioButton("where",true,array("value"=>"1"));
  echo "ทานที่ร้าน";
  echo "<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo CHtml::radioButton("where",false,array("value"=>"2"));
  echo "กลับที่บ้าน";
  echo "<BR>";
  echo "รายการอาหาร ราคาจานละ จำนวน";
  echo "<BR>";
  echo "ข้าวผัดอเมริกัน  &nbsp;&nbsp;&nbsp; 40   &nbsp;&nbsp;&nbsp;  ";
  echo CHtml::textField("amount");
  echo "<BR>";
  echo CHtml::submitButton("submit");
  echo CHtml::endform();
  if (!empty($_POST)) {
      echo "<BR>";
      echo "สรุปการสั่งอาหาร ร้านอาหารศรีไทย <br>";
      echo "ลูกค้าชื่อ : ".$name;
      echo "<br>หมายเลขโทรศัพท์ : ".$phone;
      echo "<br>สั่งอาหาร : ".$word;
      echo "<BR>";
      echo "รายการอาหาร ราคาจานละ จำนวน";
      echo "<BR>";
      echo "ข้าวผัดอเมริกัน  &nbsp;&nbsp;&nbsp; 40   &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp; $amount";
      echo "<BR>";
      echo "รวมเงิน $sumPrice บาท";

  }

 ?>
