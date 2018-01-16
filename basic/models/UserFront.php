<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_front".
 *
 * @property int $id
 * @property string $user_id
 * @property string $instance_id
 * @property string $head
 * @property string $head_result
 * @property string $shoulder
 * @property string $shoulder_result
 * @property string $spine
 * @property string $spine_result
 * @property string $hip
 * @property string $hip_result
 * @property string $knee
 * @property string $knee_result
 * @property string $sbase
 * @property string $sbase_result
 * @property string $center
 * @property string $center_result
 * @property string $head_p
 * @property string $neck_p
 * @property string $shoulderleft_p
 * @property string $shoulderright_p
 * @property string $spineshoulder_p
 * @property string $spinemid_p
 * @property string $hipleft_p
 * @property string $hipright_p
 * @property string $kneeleft_p
 * @property string $kneeright_p
 * @property string $spinebase_p
 * @property string $ankleleft_p
 * @property string $ankleright_p
 * @property string $path
 * @property string $times
 */
class UserFront extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_front';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['times'], 'safe'],
            [['user_id', 'instance_id', 'head', 'head_result', 'shoulder', 'shoulder_result', 'spine', 'spine_result', 'hip', 'hip_result', 'knee', 'knee_result', 'sbase', 'sbase_result', 'center', 'center_result', 'head_p', 'neck_p', 'shoulderleft_p', 'shoulderright_p', 'spineshoulder_p', 'spinemid_p', 'hipleft_p', 'hipright_p', 'kneeleft_p', 'kneeright_p', 'spinebase_p', 'ankleleft_p', 'ankleright_p', 'path'], 'string', 'max' => 255],
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
            'head' => 'Head',
            'head_result' => 'Head Result',
            'shoulder' => 'Shoulder',
            'shoulder_result' => 'Shoulder Result',
            'spine' => 'Spine',
            'spine_result' => 'Spine Result',
            'hip' => 'Hip',
            'hip_result' => 'Hip Result',
            'knee' => 'Knee',
            'knee_result' => 'Knee Result',
            'sbase' => 'Sbase',
            'sbase_result' => 'Sbase Result',
            'center' => 'Center',
            'center_result' => 'Center Result',
            'head_p' => 'Head P',
            'neck_p' => 'Neck P',
            'shoulderleft_p' => 'Shoulderleft P',
            'shoulderright_p' => 'Shoulderright P',
            'spineshoulder_p' => 'Spineshoulder P',
            'spinemid_p' => 'Spinemid P',
            'hipleft_p' => 'Hipleft P',
            'hipright_p' => 'Hipright P',
            'kneeleft_p' => 'Kneeleft P',
            'kneeright_p' => 'Kneeright P',
            'spinebase_p' => 'Spinebase P',
            'ankleleft_p' => 'Ankleleft P',
            'ankleright_p' => 'Ankleright P',
            'path' => 'Path',
            'times' => 'Times',
        ];
    }
}
