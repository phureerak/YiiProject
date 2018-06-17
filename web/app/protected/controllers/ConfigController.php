<?php
  /**
   *
   */
  class ConfigController extends Controller
  {

    public function actionIndex()
    {
      $this->render("index");
    }
    public function actionEmployee(){
      $model = new Employee();
      $this->render("Employee",array(
        'model' => $model
      ));
    }
    function actionEmployeeView($id){
      $model = Employee::model()->findByPk($id);
      $this->render("EmployeeView",array(
        'model' => $model
      ));
    }
    public function actionGroup(){
      $model = new Group();
      $this->render("Group",array(
        'model' => $model
      ));
    }
    function actionGroupForm($id = null){
      if(!empty($_POST["Group"])){
        $model = new Group();
        $id = $_POST["Group"]["id"];

        if(!empty($id)){
          $model = Group::model()->findByPk($id);
        }
        $model->_attributes = $_POST["Group"];
        if ($model->save()) {
          $this->redirect(array("Group"));
        }
      }
      $model = new Group();
      if (!empty($id)) {
        $model = Group::model()->findByPk($id);
      }
      $this->render("GroupForm",array(
        'model' => $model
      ));
    }
    function actionGroupDelete($id){
      Group::model()->deleteByPk($id);
      $this->redirect(array("Group"));
    }



    public function actionDeviceType(){
      $model = new DeviceType();
      $this->render("DeviceType",array(
        'model' => $model
      ));
    }
    function actionDeviceTypeForm($id = null){
      if(!empty($_POST["ProjectType"])){
        $model = new DeviceType();
        $id = $_POST["DeviceType"]["id"];

        if(!empty($id)){
          $model = DeviceType::model()->findByPk($id);
        }
        $model->_attributes = $_POST["DeviceType"];
        if ($model->save()) {
          $this->redirect(array("DeviceType"));
        }
      }
      $model = new DeviceType();
      if (!empty($id)) {
        $model = DeviceType::model()->findByPk($id);
      }
      $this->render("DeviceTypeForm",array(
        'model' => $model
      ));
    }

    public function actionProjectType(){
      $model = new ProjectType();
      $this->render("ProjectType",array(
        'model' => $model
      ));
    }
    function actionProjectTypeForm($id = null){
      if(!empty($_POST["ProjectType"])){
        $model = new ProjectType();
        $id = $_POST["ProjectType"]["id"];

        if(!empty($id)){
          $model = ProjectType::model()->findByPk($id);
        }
        $model->_attributes = $_POST["ProjectType"];
        if ($model->save()) {
          $this->redirect(array("ProjectType"));
        }
      }
      $model = new ProjectType();
      if (!empty($id)) {
        $model = ProjectType::model()->findByPk($id);
      }
      $this->render("ProjectTypeForm",array(
        'model' => $model
      ));
    }


    function actionProjectTypeDelete($id){
      ProjectType::model()->deleteByPk($id);
      $this->redirect(array("ProjectType"));
    }


    public function actionRepairType(){
      $model = new RepairType();
      $this->render("RepairType",array(
        'model' => $model,
      ));
    }
    function actionRepairTypeForm($id=null){

      if (!empty($_POST["RepairType"])) {
        $repairType = new RepairType();
        $id = $_POST["RepairType"]["id"];
        if (!empty($id)) {
          $repairType = RepairType::model()->findByPk($id);
        }
        $repairType->_attributes = $_POST["RepairType"];
        if ($repairType->save()) {
          $this->redirect(array("RepairType"));
        }
      }
      $model = new RepairType();
      if (!empty($id)) {
        $model = RepairType::model()->findByPk($id);
      }

      $this->render("RepairTypeForm",array(
          'model' => $model,
      ));
    }
    function actionRepairTypeDelete($id){
      RepairType::model()->deleteByPk($id);
      $this->redirect(array("repairType"));
    }





  }



 ?>
