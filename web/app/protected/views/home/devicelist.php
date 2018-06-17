<div class="panel">
  <?php echo $this->beginContent("/home/toolbar",array("current"=>3)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">


    <a href="<?php echo Yii::app()->createUrl("Home/deviceform"); ?>">
    <?php echo CHtml::image("images/edit_add.png"); ?>  </a>
    <div class="header-success">
      รายการอุปกรณ์
    </div>

    <?php
      $this->widget('zii.widgets.grid.CGridView',array(
        'id'=>'device-grid',
        'dataProvider'=>$model->search(),
        'columns'=>array(
          'device_code',
          'device_name',
          'device_price',
          'device_brand_name',
          array(
            'name'=>'device_buy_date',
            'value'=>'$data->device_buy_date',
            'htmlOptions'=>array(
              'width'=>'100px',
              'align'=>'center',
            ),
          ),
          array(
            'name'=>'device_garantee_expire_date',
            'value'=>'$data->device_garantee_expire_date',
            'htmlOptions'=>array(
              'width'=>'100px',
              'align'=>'center',
            ),
          ),
          array(
            'header'=>'edit',
            'class'=>'CLinkColumn',
            'imageUrl'=>'images/edit.png',
            'urlExpression'=> 'Yii::app()->createUrl("Home/DeviceForm",array("id"=>$data->id))',
            'htmlOptions'=>array(
              'width'=>'35px',
              'align'=>'center'
            )
        ),
        array(
          'header'=>'delete',
          'class'=>'CLinkColumn',
          'imageUrl'=>'images/delete.png',
          'urlExpression'=> 'Yii::app()->createUrl("Home/DeviceDelete",array("id"=>$data->id))',
          'htmlOptions'=>array(
            'width'=>'35px',
            'align'=>'center',
            'onClick'=>'return confirm("ยืนยันรายการ")'
          ),
      )


      )
    ));

     ?>
  <br/><br/>

  </div>
</div>
