<div class="panel">
  <?php echo $this->beginContent("/config/toolbar",array("current" => 4)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <a href="<?php echo Yii::app()->createUrl("Config/DeviceTypeForm"); ?>">
    <?php echo CHtml::image("images/edit_add.png"); ?>
    </a>
    <?php
      $this->widget('zii.widgets.grid.CGridView',array(
        'id'=>'device-type-grid',
        'dataProvider'=>$model->search(),
        'columns'=>array(
          array(
            'name'=>'device_type_name',
            'htmlOptions'=>array(
              'width'=>'430px'
            ),
          ),
          array(
            'header'=>'edit',
            'class'=>'CLinkColumn',
            'imageUrl'=>'images/edit.png',
            'urlExpression'=> 'Yii::app()->createUrl("Config/DeviceTypeForm",array("id"=>$data->id))',
            'htmlOptions'=>array(
              'width'=>'35px',
              'align'=>'center'
            )
        ),
        array(
          'header'=>'edit',
          'class'=>'CLinkColumn',
          'imageUrl'=>'images/delete.png',
          'urlExpression'=> 'Yii::app()->createUrl("Config/ProjectTypeDelete",array("id"=>$data->id))',
          'htmlOptions'=>array(
            'width'=>'35px',
            'align'=>'center',
            'onClick'=>'return confirm("ยืนยันรายการ")'
          ),
      )


      )
    ));

     ?>
  </div>
</div>
