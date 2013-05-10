<?php

use \yii\web\Controller;

use app\models\Forum;
use app\models\Category;
use app\models\Comment;
use app\models\User;
use app\models\Tag;
use app\models\Link;

class HomeController extends Controller
{
	
	public function actionIndex()
	{
		$data['list'] = Forum::getList(10);
		$data['catelist'] = Category::getAll();
		$data['total_forums'] = Forum::find()->count();
		$data['today_forums'] = Forum::TodayCount();
		
		$data['total_comments'] = Comment::find()->count();
		
		$data['total_users'] = User::find()->count();
		$data['last_user'] = User::find()->limit(1)->orderBy('uid DESC')->one();
		
		$data['taglist'] = Tag::getLatest(15);
		$data['links'] = Link::getLatest(10);
		
		echo $this->render('index', $data);

	}
}

?>