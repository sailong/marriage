
<?php echo '<?php $this->beginContent(\'/layouts/main\'); ?>'; ?>

	<div class="box">
		<div data-original-title="" class="box-header well">
			<h2><?php echo '<?php if (!empty($this->title)) echo $this->title;?>';?></h2>
		</div>
		<div class="box-content">
			<?php echo '<?php echo $content;?>'; ?>
		</div>
	</div>
	
<?php echo '<?php $this->endContent();?>'; ?>