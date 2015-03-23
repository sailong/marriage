<script src="<?php echo '<?php echo Yii::app()->baseUrl;?>'; ?>/<?php echo $this->moduleID;?>/js/bootstrap.min.js"></script>
<script src="<?php echo '<?php echo Yii::app()->baseUrl;?>'; ?>/<?php echo $this->moduleID;?>/js/jquery.uniform.min.js"></script>
<script>
$(function(){
	$('ul.main-menu li a').each(function(){
		if($($(this))[0].href==String(window.location))
			$(this).parent().addClass('active');
	});
})
</script>