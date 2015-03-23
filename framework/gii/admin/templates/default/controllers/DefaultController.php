<?php echo "<?php\n"; ?>


Yii::import('application.modules.<?php echo $this->moduleID; ?>.controllers.BaseController');

class DefaultController extends BaseController
{
	public function actionIndex()
	{
		$this->render('index');
	}
}