<?php
ob_start(); session_start();
/**
 *
 */
class HomeController extends Controller
{

  function actionIndex(){
    $this->render("index");
  }
  function actionRequestForm($id=null){
    $model = new Request();
    if (!empty($_POST["Request"])) {
      $id = $_POST["Request"]["id"];
      if (!empty($id)) {
        $model = Request::model()->findByPk($id);
      }
      $model->_attributes = $_POST["Request"];
      if ($model->save()) {
        $this->redirect(array("RequestHistory"));
      }
    }
    if (!empty($id)) {
      $model = Request::model()->findByPk($id);
    }
    $this->render("Requestform",array(
      'model'=>$model
    ));
  }

  function actionDevicelist(){
    $model = new Device();
    $this->render("Devicelist",array(
      "model"=>$model
    ));
  }
  function actionDeviceForm($id=null){
    $model = new Device();
    if (!empty($_POST["Device"])) {
      $id = $_POST["Device"]["id"];
       //$buy_date = $_POST["Device"]["device_buy_date"];
       //$garantee_expire_date = $_POST["Device"]["device_garantee_expire_date"];
      if (!empty($id)) {
        $model = Device::model()->findByPk($id);
      }
      $model->_attributes = $_POST["Device"];
      if ($model->save()) {
        $this->redirect(array("Devicelist"));
      }
    }
    if (!empty($id)) {
      $model = Device::model()->findByPk($id);
      // $model->device_buy_date = $buy_date;
      // $model->device_garantee_expire_date = $garantee_expire_date;
    }
    $this->render("DeviceForm",array(
      "model"=>$model
    ));
  }
  function actionDeviceDelete($id){
    Device::model()->deleteByPk($id);
    $this->redirect(array("Devicelist"));
  }
  function actionRequestHistory(){
    $model = new Request();
    $this->render("RequestHistory",array(
      "model"=>$model
    ));
  }
  function actionRequestHistoryForm(){
    $model = new Request();
    $this->render("RequestHistoryForm",array(
      "model"=>$model
    ));
  }

}


 ?>
