<!DOCTYPE html>
<html lang="en">
<head>
<?php echo '<?php $this->renderPartial(\'/layouts/common/header\'); ?>';?>
</head>
<body>
	
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="<?php echo '<?php echo Yii::app()->baseUrl; ?>'; ?>">
					<span>后台管理</span>
				</a>
				
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i><span class="hidden-phone"> <?php echo '<?php echo Yii::app()->user->name; ?>'; ?>
					</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><?php echo '<?php echo CHtml::link(\'退出\',array(\'default/logout\')); ?>';?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="/admin/hospital/"><i class="icon icon-blue icon-flag"></i><span class="hidden-tablet">医院管理</span></a></li>
						<li><a class="ajax-link" href="/admin/departments/"><i class="icon icon-blue icon-users"></i><span class="hidden-tablet">科室管理</span></a></li>
						<li><a class="ajax-link" href="/admin/doctor"><i class="icon icon-blue icon-contacts"></i><span class="hidden-tablet">医生管理</span></a></li>
						<li><a class="ajax-link" href="/admin/operator"><i class="icon icon-blue icon-contacts"></i><span class="hidden-tablet">操作员管理</span></a></li>
						<li><a class="ajax-link" href="/admin/device"><i class="icon icon-blue icon-contacts"></i><span class="hidden-tablet">设备接口管理</span></a></li>
						<li><a class="ajax-link" href="/admin/deviceParam"><i class="icon icon-blue icon-contacts"></i><span class="hidden-tablet">设备参数</span></a></li>
					</ul>
				</div>
			</div>

			<div id="content" class="span10">
				<div>
					<div class="breadcrumb">
<?php 

$doc = <<<EOF

					<?php
						if(empty(\$this->breadcrumbs))
							\$this->breadcrumbs = array ('');
						\$this->widget('zii.widgets.CBreadcrumbs', array(
					 		'links'=>\$this->breadcrumbs,
							'homeLink'=>'<a href="/qiye">首页</a>'
						)); ?>
EOF;

echo $doc;
?>
					
	

					</div>
				</div>
				
				<?php echo '<?php echo $content; ?>';?>

			</div>
			
		</div>
		
	</div>
	
	<?php echo'<?php echo $this->renderPartial(\'/layouts/common/footer\');?>'; ?>
</body>
</html>
