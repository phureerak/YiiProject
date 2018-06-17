<?php

class foodController extends Controller
{
  public function actionOrder(){
    if (!empty($_POST)) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $where = $_POST['where'];
      $amount = $_POST['amount'];
      if ($where=="1") {
        $word = "ทานที่ร้าน";
      }else {
        $word = "กลับบ้าน";
        $amountValue=5*$amount;
      }
      $sumPrice=($amount*40)+$amountValue;
    }
    $this->render("showFood",array(
      'name' => $name,
      'phone' => $phone,
      'word' => $word,
      'amountValue' => $amountValue,
      'amount'=>$amount,
      'where'=>$where,
      'sumPrice'=>$sumPrice
    ));
  }

}
  ?>
