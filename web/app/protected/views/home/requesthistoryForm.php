<div class="panel">
  <?php echo $this->beginContent("/home/toolbar",array("current"=>5)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <?php
      $form = $this->beginWidget('CActiveForm',array(
        'id'=>'request-form',
        'enableAjaxValidation'=>false
      ));
     ?>
      <div >
        <?php echo $form->labelEx($model,"device_id"); ?>
        <?php echo $form->textField($model,"device_id",array(
          "disabled"=>"disabled",
          "size"=>50,
          "value"=>$model->device->device_brand_name." ".$model->device->device_name
        )); ?>
      </div>
      <div >
        <?php echo $form->labelEx($model,"employee_id"); ?>
        <?php echo $form->textField($model,"employee_id",array(
          "disabled"=>"disabled",
          "size"=>50,
          "value"=>$model->employee->employee_fname." ".$model->employee->employee_lname
        )); ?>
      </div>
      <div >
        <?php echo $form->labelEx($model,"request_problem"); ?>
        <?php echo $form->textField($model,"request_problem",array(
          "disabled"=>"disabled",
          "size"=>100,
        )); ?>
      </div>
      <div >
        <?php echo $form->labelEx($model,"request_detail"); ?>
        <?php echo $form->textField($model,"request_detail",array(
          "disabled"=>"disabled",
          "rows"=>8,
          "cols"=>100
        )); ?>
      </div>

      <div>
        <label></label>
        <?php echo Chtml::submitButton("บันทึก"); ?>
      </div>
      <?php echo $form->hiddenField($model,"id"); ?>
      <?php $this->endWidget(); ?>

  </div>

</div>
