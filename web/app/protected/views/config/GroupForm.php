<div class="panel">
  <?php echo $this->beginContent("/config/toolbar",array("current" => 1)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <fieldset>
      <legend>ข้อมูลโครงสร้างองค์กร</legend>
      <?php
        $form = $this->beginWidget('CActiveForm',array(
          'id'=>'ProjectType-form',
          'enableAjaxValidation'=>false
        ));
       ?>
       <div class="">
         <?php echo $form->labelEx($model,"group_name"); ?>
         <?php echo $form->textField($model,"group_name",array("size"=>50)); ?>
         <?php echo $form->error($model,"group_name"); ?>
         <?php echo $form->labelEx($model,"group_id"); ?>
         <?php echo $form->textField($model,"group_id",array("size"=>50)); ?>
         <?php echo $form->error($model,"group_id"); ?>
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
