<?php echo "<?php\n"; ?>

/**
 * 登录
 */
 
Yii::import('application.modules.<?php echo $this->moduleID; ?>.controllers.BaseController');
 
class LoginController extends BaseController
{
	
	/**
	 * 重载
	 * @see AdminController::init()
	 */
	public function init()
	{
		
	}
	
	/**
	 * 中转页面
	 */
	public function actionIndex()
	{
		if(isset(Yii::app()->user->back) && Yii::app()->user->back && (!Yii::app()->user->isGuest))
			$this->redirect($this->returnUrl);
		else 
			$this->redirect($this->loginUrl);
	}
	
	/**
	 * 登录
	 */
	public function actionLogin()
	{
		$model=new BackUserLogin;
		if(isset($_POST['BackUserLogin']))
		{
			$model->attributes=$_POST['BackUserLogin'];
			if($model->validate())
				$this->redirect($this->returnUrl);
		}
		$this->layout = 'login';
		$this->render('login',array('model'=>$model));
	}
	
	/**
	 * 退出登录
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect($this->loginUrl);
	}
	
}