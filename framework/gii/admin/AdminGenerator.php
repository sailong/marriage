<?php

Yii::import('gii.generators.module.ModuleGenerator');

/**
 * 
 * 生成后台管理模块
 * @author zhoujianjun
 *
 */
class AdminGenerator extends ModuleGenerator
{
	
	public $codeModel = 'ext.gii.admin.AdminCode';
	
}