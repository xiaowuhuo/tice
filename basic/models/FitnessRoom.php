<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fitness_room".
 *
 * @property int $id
 * @property string $name
 * @property string $add
 * @property string $tel
 * @property string $type
 * @property string $area
 * @property string $location
 * @property string $head
 * @property string $head_phone
 * @property string $open_time
 * @property string $member_num
 * @property string $bathe
 */
class FitnessRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fitness_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'add', 'tel', 'type', 'area', 'location', 'head', 'head_phone', 'open_time', 'member_num', 'bathe'], 'string', 'max' => 255],
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
            'add' => 'Add',
            'tel' => 'Tel',
            'type' => 'Type',
            'area' => 'Area',
            'location' => 'Location',
            'head' => 'Head',
            'head_phone' => 'Head Phone',
            'open_time' => 'Open Time',
            'member_num' => 'Member Num',
            'bathe' => 'Bathe',
        ];
    }
}
