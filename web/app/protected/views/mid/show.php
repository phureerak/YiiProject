<?php
  $this->widget('zii.widgets.grid.CGridView',array(
    'dataProvider' => $device,
    'columns' =>array(
      'id',
      'device_type_id' ,
      'device_name',
      'device_brand_name',
      'device_code',
      'device_price'
    )
));
 ?>
