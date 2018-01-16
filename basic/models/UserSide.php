<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_side".
 *
 * @property int $id
 * @property string $user_id
 * @property string $instance_id
 * @property string $headz
 * @property string $headz_result
 * @property string $neckz
 * @property string $neckz_result
 * @property string $spinez
 * @property string $spinez_result
 * @property string $spinebasez
 * @property string $spinebasez_result
 * @property string $kneez
 * @property string $kneez_result
 * @property string $headz_p
 * @property string $neckz_p
 * @property string $spineshoulderz_p
 * @property string $spinemidz_p
 * @property string $spinebasez_p
 * @property string $kneeleftz_p
 * @property string $path
 * @property string $times
 */
class UserSide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_side';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['times'], 'safe'],
            [['user_id', 'instance_id', 'headz', 'headz_result', 'neckz', 'neckz_result', 'spinez', 'spinez_result', 'spinebasez', 'spinebasez_result', 'kneez', 'kneez_result', 'headz_p', 'neckz_p', 'spineshoulderz_p', 'spinemidz_p', 'spinebasez_p', 'kneeleftz_p', 'path'], 'string', 'max' => 255],
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
            'headz' => 'Headz',
            'headz_result' => 'Headz Result',
            'neckz' => 'Neckz',
            'neckz_result' => 'Neckz Result',
            'spinez' => 'Spinez',
            'spinez_result' => 'Spinez Result',
            'spinebasez' => 'Spinebasez',
            'spinebasez_result' => 'Spinebasez Result',
            'kneez' => 'Kneez',
            'kneez_result' => 'Kneez Result',
            'headz_p' => 'Headz P',
            'neckz_p' => 'Neckz P',
            'spineshoulderz_p' => 'Spineshoulderz P',
            'spinemidz_p' => 'Spinemidz P',
            'spinebasez_p' => 'Spinebasez P',
            'kneeleftz_p' => 'Kneeleftz P',
            'path' => 'Path',
            'times' => 'Times',
        ];
    }
}
