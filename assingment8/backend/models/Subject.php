<?php
namespace backend\models;

use yii\behaviors\TimestampBehavior;

class Subject extends \common\models\Subject
{
    public function behaviors()
    {
        return[
            TimestampBehavior::class,
            
        ];
    }
}