<?php

namespace app\models;

use yii\db\ActiveRecord;
class Favorite extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{%favorites}}';
	}
}