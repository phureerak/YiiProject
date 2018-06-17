<div class="panel">
  <?php echo $this->beginContent("/config/toolbar",array("current" => 5)); ?>
  <?php echo $this->endContent(); ?>
  <div class="panel_body">
    <a href="<?php echo Yii::app()->createUrl("Member/Register"); ?>">
    <?php echo CHtml::image("images/edit_add.png"); ?>
    </a>
    <?php
      $this->widget('zii.widgets.grid.CGridView',array(
        'id'=>'device-type-grid',
        'dataProvider'=>$model->search(),
        'columns'=>array(
          array(
            'name'=>'employee_code',
            'type'=>'html',
            'value'=>'CHtml::link($data->employee_code,array("Config/EmployeeView","id"=>$data->id))',
            'htmlOptions'=>array(
              'width'=>'100px'
            ),
          ),
          array(
            'name'=>'employee_fname',
            'htmlOptions'=>array(
              'width'=>'100px'
            ),
          ),
          array(
            'name'=>'employee_lname',
            'htmlOptions'=>array(
              'width'=>'100px'
            ),
          ),
          array(
              'name'=>'group_id',
              'htmlOptions'=>array(
                'width'=>'100px'
              ),
            ),
          array(
                'name'=>'employee_level',
                'htmlOptions'=>array(
                  'width'=>'100px'
                ),
              ),
          array(
            'header'=>'edit',
            'class'=>'CLinkColumn',
            'imageUrl'=>'images/edit.png',
            'urlExpression'=> 'Yii::app()->createUrl("Member/Register",array("id"=>$data->id))',
            'htmlOptions'=>array(
              'width'=>'35px',
              'align'=>'center'
            )
        ),
        array(
          'header'=>'delete',
          'class'=>'CLinkColumn',
          'imageUrl'=>'images/delete.png',
          'urlExpression'=> 'Yii::app()->createUrl("Member/EmployeeDelete",array("id"=>$data->id))',
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
