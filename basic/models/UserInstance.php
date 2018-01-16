<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_instance".
 *
 * @property int $id
 * @property string $user_id
 * @property string $instance_id
 */
class UserInstance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_instance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'instance_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'instance_id' => 'Instance ID',
        ];
    }
}
