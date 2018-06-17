<?php

class midController extends Controller
{
  function actionTest()
  {
    echo "string";
  }
  function actionShow()
  {
    $model = new Device();
    $device = new CActiveDataProvider($model);
    $this->render("show",array(
      'device' =>  $device
    ));
  }

}
  ?>
