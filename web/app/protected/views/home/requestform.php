<div class="panel">
  <?php echo $this->beginContent("/home/toolbar",array("current"=>4)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <fieldset>
      <?php
        $form = $this->beginWidget('CActiveForm',array(
          'id'=>'ProjectType-form',
          'enableAjaxValidation'=>false
        ));
       ?>
       <div >
         <?php echo $form->labelEx($model,"device_id"); ?>
         <?php echo $form->dropDownlist($model,"device_id",Device::getOptions()); ?>
        </div>
        <div >
         <?php echo $form->labelEx($model,"request_problem"); ?>
         <?php echo $form->textField($model,"request_problem",array("size"=>50)); ?>
       </div >
       <div >
         <?php echo $form->labelEx($model,"request_detail"); ?>
         <?php echo $form->textArea($model,"request_detail",array("rows"=>10,"cols"=>100)); ?>
       </div >
       <div >
         <?php echo $form->labelEx($model,"request_remark"); ?>
         <?php echo $form->textField($model,"request_remark",array("size"=>50)); ?>
       </div>
       <div>
         <label></label>
         <?php echo Chtml::submitButton("บันทึก"); ?>
       </div>
       <?php echo $form->hiddenField($model,"id"); ?>
       <?php $this->endWidget(); ?>
    </fieldset>
  </div>
</div>
