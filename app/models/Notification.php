<?php

namespace app\models;

use yii\db\ActiveRecord;
class Notification extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{%notifications}}';
	}
}