<?php

namespace app\models;

use yii\db\ActiveRecord;
class Forum extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{%forums}}';
	}
	
	public static function getList($num, $pagers=null)
	{
		return static::find()->limit($num)->all();
	}
}