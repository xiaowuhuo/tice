<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $sexuality
 * @property string $age
 * @property string $height
 * @property string $weight
 * @property string $add
 * @property string $tel
 * @property string $room_id
 * @property string $password
 * @property string $train_id
 * @property string $role_id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sexuality', 'age', 'height', 'weight', 'add', 'tel', 'room_id', 'password', 'train_id', 'role_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sexuality' => 'Sexuality',
            'age' => 'Age',
            'height' => 'Height',
            'weight' => 'Weight',
            'add' => 'Add',
            'tel' => 'Tel',
            'room_id' => 'Room ID',
            'password' => 'Password',
            'train_id' => 'Train ID',
            'role_id' => 'Role ID',
        ];
    }
}
