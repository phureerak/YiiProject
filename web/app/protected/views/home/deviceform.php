<div class="panel">
  <?php echo $this->beginContent("/home/toolbar",array("current"=>5)); ?>
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
         <?php echo $form->labelEx($model,"device_type_id"); ?>
         <?php echo $form->dropDownlist($model,"device_type_id",Device::getOptions()); ?>
        </div>
        <div >
         <?php echo $form->labelEx($model,"device_name"); ?>
         <?php echo $form->textField($model,"device_name",array("size"=>80)); ?>
       </div >
       <div >
         <?php echo $form->labelEx($model,"device_brand_name"); ?>
         <?php echo $form->textArea($model,"device_brand_name"); ?>
       </div >
       <div >
         <?php echo $form->labelEx($model,"device_code"); ?>
         <?php echo $form->textField($model,"device_code"); ?>
       </div>
       <div >
         <?php echo $form->labelEx($model,"device_garantee_expire_date"); ?>
         <?php echo $form->textField($model,"device_garantee_expire_date"); ?>
       </div>
       <div >
         <?php echo $form->labelEx($model,"device_price"); ?>
         <?php echo $form->textField($model,"device_price"); ?>
       </div>
       <div >
         <?php echo $form->labelEx($model,"device_buy_date"); ?>
         <?php echo $form->textField($model,"device_buy_date"); ?>
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
