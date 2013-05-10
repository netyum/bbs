<?php

namespace app\models;

use yii\db\ActiveRecord;
class Setting extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{%settings}}';
	}
}