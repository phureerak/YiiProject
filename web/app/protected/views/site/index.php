<?php
/* @var $this SiteController */
if (Yii::app()->session["employee_id"]==null):?>
<div class="panel" style="margin-left: 10px;">
	<?php echo CHtml::form(array("member/CheckLogin")); ?>
	<div class="panel_header">Login เข้าระบบ</div>
	<div class="panel_body">
		<div >Username</div>
		<div ><input class="textbox" type="text" name="user_username" ></div>
		<div >password</div>
		<div ><input class="textbox" type="password" name="user_password" ></div>
		<div ><input type="submit"  value="Login Now" class="button"></div>
		<br><br>
		<div >
			<?php echo CHtml::link("ลืมรหัสผ่าน","/index.php/member/forgetPassword"); ?>
		</div>
	</div>
	<?php echo CHtml::endForm(); ?>
</div>
<?php endif; ?>
