<div class="row-fluid">
	<div class="span12 center login-header">
		<h2>Lis后台管理</h2>
	</div><!--/span-->
</div><!--/row-->
			
<div class="row-fluid">
	<div class="well span6 center login-box">
		
		<div class="alert alert-warning">
	
<?php 

$doc = <<<EOF
			<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>
				<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
			<?php else:?>
				请输入用户名和密码
			<?php endif;?>

EOF;

echo $doc;
?>
		
		
		
			
		</div>
		
<?php 

$doc = <<<EOF
		<?php
			\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			    'id'=>'backUserLogin',
			    'type'=>'horizontal',
		)); ?>

EOF;

echo $doc;
?>
 
<fieldset>
		
		<?php echo '<?php echo $form->textFieldRow($model,\'username\'); ?>'; ?>
		
		<?php echo '<?php echo $form->passwordFieldRow($model, \'password\'); ?>'; ?>
		
		<div class="control-group">
			<div class="controls">
				<?php echo '<?php $this->widget(\'bootstrap.widgets.TbButton\', array(\'buttonType\'=>\'submit\', \'type\'=>\'primary\', \'size\'=>\'large\', \'label\'=>\'登录\'));?>'; ?>
			</div>
		</div>
</fieldset>

<?php echo '<?php $this->endWidget();?>'; ?>
	</div>
		
</div>

