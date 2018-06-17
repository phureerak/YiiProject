<div class="panel">
  <?php echo $this->beginContent("/config/toolbar",array("current" => 4)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <fieldset>
      <legend>ข้อมูลประเภทอุปกรณ์</legend>
      <?php
        $form = $this->beginWidget('CActiveForm',array(
          'id'=>'ProjectType-form',
          'enableAjaxValidation'=>false
        ));
       ?>
       <div class="">
         <?php echo $form->labelEx($model,"device_type_name"); ?>
         <?php echo $form->textField($model,"device_type_name",array("size"=>50)); ?>
         <?php echo $form->error($model,"device_type_name"); ?>
       </div>
       <div class="">
         <label></label>
         <?php echo Chtml::submitButton("บันทึก"); ?>
       </div>
       <?php echo $form->hiddenField($model,"id"); ?>
       <?php $this->endWidget(); ?>
    </fieldset>
  </div>





  </div>
