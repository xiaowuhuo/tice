<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "body_p_p".
 *
 * @property int $id
 * @property string $instance_id
 * @property double $head_p_x
 * @property double $head_p_y
 * @property double $head_p_z
 * @property double $head_r_x
 * @property double $head_r_y
 * @property double $head_r_z
 * @property double $neck_p_x
 * @property double $neck_p_y
 * @property double $neck_p_z
 * @property double $neck_r_x
 * @property double $neck_r_y
 * @property double $neck_r_z
 * @property double $shoulder_center_p_x
 * @property double $shoulder_center_p_y
 * @property double $shoulder_center_p_z
 * @property double $shoulder_center_r_x
 * @property double $shoulder_center_r_y
 * @property double $shoulder_center_r_z
 * @property double $shoulder_left_p_x
 * @property double $shoulder_left_p_y
 * @property double $shoulder_left_p_z
 * @property double $shoulder_left_r_x
 * @property double $shoulder_left_r_y
 * @property double $shoulder_left_r_z
 * @property double $shoulder_right_p_x
 * @property double $shoulder_right_p_y
 * @property double $shoulder_right_p_z
 * @property double $shoulder_right_r_x
 * @property double $shoulder_right_r_y
 * @property double $shoulder_right_r_z
 * @property double $elbow_left_p_x
 * @property double $elbow_left_p_y
 * @property double $elbow_left_p_z
 * @property double $elbow_left_r_x
 * @property double $elbow_left_r_y
 * @property double $elbow_left_r_z
 * @property double $elbow_right_p_x
 * @property double $elbow_right_p_y
 * @property double $elbow_right_p_z
 * @property double $elbow_right_r_x
 * @property double $elbow_right_r_y
 * @property double $elbow_right_r_z
 * @property double $wrist_left_p_x
 * @property double $wrist_left_p_y
 * @property double $wrist_left_p_z
 * @property double $wrist_left_r_x
 * @property double $wrist_left_r_y
 * @property double $wrist_left_r_z
 * @property double $wrist_right_p_x
 * @property double $wrist_right_p_y
 * @property double $wrist_right_p_z
 * @property double $wrist_right_r_x
 * @property double $wrist_right_r_y
 * @property double $wrist_right_r_z
 * @property double $hand_left_p_x
 * @property double $hand_left_p_y
 * @property double $hand_left_p_z
 * @property double $hand_left_r_x
 * @property double $hand_left_r_y
 * @property double $hand_left_r_z
 * @property double $hand_right_p_x
 * @property double $hand_right_p_y
 * @property double $hand_right_p_z
 * @property double $hand_right_r_x
 * @property double $hand_right_r_y
 * @property double $hand_right_r_z
 * @property double $spine_p_x
 * @property double $spine_p_y
 * @property double $spine_p_z
 * @property double $spine_r_x
 * @property double $spine_r_y
 * @property double $spine_r_z
 * @property double $hip_left_p_x
 * @property double $hip_left_p_y
 * @property double $hip_left_p_z
 * @property double $hip_left_r_x
 * @property double $hip_left_r_y
 * @property double $hip_left_r_z
 * @property double $hip_right_p_x
 * @property double $hip_right_p_y
 * @property double $hip_right_p_z
 * @property double $hip_right_r_x
 * @property double $hip_right_r_y
 * @property double $hip_right_r_z
 * @property double $spine_base_p_x
 * @property double $spine_base_p_y
 * @property double $spine_base_p_z
 * @property double $spine_base_r_x
 * @property double $spine_base_r_y
 * @property double $spine_base_r_z
 * @property double $knee_left_p_x
 * @property double $knee_left_p_y
 * @property double $knee_left_p_z
 * @property double $knee_left_r_x
 * @property double $knee_left_r_y
 * @property double $knee_left_r_z
 * @property double $knee_right_p_x
 * @property double $knee_right_p_y
 * @property double $knee_right_p_z
 * @property double $knee_right_r_x
 * @property double $knee_right_r_y
 * @property double $knee_right_r_z
 * @property double $ankle_left_p_x
 * @property double $ankle_left_p_y
 * @property double $ankle_left_p_z
 * @property double $ankle_left_r_x
 * @property double $ankle_left_r_y
 * @property double $ankle_left_r_z
 * @property double $ankle_right_p_x
 * @property double $ankle_right_p_y
 * @property double $ankle_right_p_z
 * @property double $ankle_right_r_x
 * @property double $ankle_right_r_y
 * @property double $ankle_right_r_z
 * @property double $foot_left_p_x
 * @property double $foot_left_p_y
 * @property double $foot_left_p_z
 * @property double $foot_left_r_x
 * @property double $foot_left_r_y
 * @property double $foot_left_r_z
 * @property double $foot_right_p_x
 * @property double $foot_right_p_y
 * @property double $foot_right_p_z
 * @property double $foot_right_r_x
 * @property double $foot_right_r_y
 * @property double $foot_right_r_z
 * @property double $scale_x
 * @property double $scale_y
 * @property double $scale_z
 * @property string $times
 */
class bodyPP extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'body_p_p';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['head_p_x', 'head_p_y', 'head_p_z', 'head_r_x', 'head_r_y', 'head_r_z', 'neck_p_x', 'neck_p_y', 'neck_p_z', 'neck_r_x', 'neck_r_y', 'neck_r_z', 'shoulder_center_p_x', 'shoulder_center_p_y', 'shoulder_center_p_z', 'shoulder_center_r_x', 'shoulder_center_r_y', 'shoulder_center_r_z', 'shoulder_left_p_x', 'shoulder_left_p_y', 'shoulder_left_p_z', 'shoulder_left_r_x', 'shoulder_left_r_y', 'shoulder_left_r_z', 'shoulder_right_p_x', 'shoulder_right_p_y', 'shoulder_right_p_z', 'shoulder_right_r_x', 'shoulder_right_r_y', 'shoulder_right_r_z', 'elbow_left_p_x', 'elbow_left_p_y', 'elbow_left_p_z', 'elbow_left_r_x', 'elbow_left_r_y', 'elbow_left_r_z', 'elbow_right_p_x', 'elbow_right_p_y', 'elbow_right_p_z', 'elbow_right_r_x', 'elbow_right_r_y', 'elbow_right_r_z', 'wrist_left_p_x', 'wrist_left_p_y', 'wrist_left_p_z', 'wrist_left_r_x', 'wrist_left_r_y', 'wrist_left_r_z', 'wrist_right_p_x', 'wrist_right_p_y', 'wrist_right_p_z', 'wrist_right_r_x', 'wrist_right_r_y', 'wrist_right_r_z', 'hand_left_p_x', 'hand_left_p_y', 'hand_left_p_z', 'hand_left_r_x', 'hand_left_r_y', 'hand_left_r_z', 'hand_right_p_x', 'hand_right_p_y', 'hand_right_p_z', 'hand_right_r_x', 'hand_right_r_y', 'hand_right_r_z', 'spine_p_x', 'spine_p_y', 'spine_p_z', 'spine_r_x', 'spine_r_y', 'spine_r_z', 'hip_left_p_x', 'hip_left_p_y', 'hip_left_p_z', 'hip_left_r_x', 'hip_left_r_y', 'hip_left_r_z', 'hip_right_p_x', 'hip_right_p_y', 'hip_right_p_z', 'hip_right_r_x', 'hip_right_r_y', 'hip_right_r_z', 'spine_base_p_x', 'spine_base_p_y', 'spine_base_p_z', 'spine_base_r_x', 'spine_base_r_y', 'spine_base_r_z', 'knee_left_p_x', 'knee_left_p_y', 'knee_left_p_z', 'knee_left_r_x', 'knee_left_r_y', 'knee_left_r_z', 'knee_right_p_x', 'knee_right_p_y', 'knee_right_p_z', 'knee_right_r_x', 'knee_right_r_y', 'knee_right_r_z', 'ankle_left_p_x', 'ankle_left_p_y', 'ankle_left_p_z', 'ankle_left_r_x', 'ankle_left_r_y', 'ankle_left_r_z', 'ankle_right_p_x', 'ankle_right_p_y', 'ankle_right_p_z', 'ankle_right_r_x', 'ankle_right_r_y', 'ankle_right_r_z', 'foot_left_p_x', 'foot_left_p_y', 'foot_left_p_z', 'foot_left_r_x', 'foot_left_r_y', 'foot_left_r_z', 'foot_right_p_x', 'foot_right_p_y', 'foot_right_p_z', 'foot_right_r_x', 'foot_right_r_y', 'foot_right_r_z', 'scale_x', 'scale_y', 'scale_z'], 'number'],
            [['times'], 'safe'],
            [['instance_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'instance_id' => 'Instance ID',
            'head_p_x' => 'Head P X',
            'head_p_y' => 'Head P Y',
            'head_p_z' => 'Head P Z',
            'head_r_x' => 'Head R X',
            'head_r_y' => 'Head R Y',
            'head_r_z' => 'Head R Z',
            'neck_p_x' => 'Neck P X',
            'neck_p_y' => 'Neck P Y',
            'neck_p_z' => 'Neck P Z',
            'neck_r_x' => 'Neck R X',
            'neck_r_y' => 'Neck R Y',
            'neck_r_z' => 'Neck R Z',
            'shoulder_center_p_x' => 'Shoulder Center P X',
            'shoulder_center_p_y' => 'Shoulder Center P Y',
            'shoulder_center_p_z' => 'Shoulder Center P Z',
            'shoulder_center_r_x' => 'Shoulder Center R X',
            'shoulder_center_r_y' => 'Shoulder Center R Y',
            'shoulder_center_r_z' => 'Shoulder Center R Z',
            'shoulder_left_p_x' => 'Shoulder Left P X',
            'shoulder_left_p_y' => 'Shoulder Left P Y',
            'shoulder_left_p_z' => 'Shoulder Left P Z',
            'shoulder_left_r_x' => 'Shoulder Left R X',
            'shoulder_left_r_y' => 'Shoulder Left R Y',
            'shoulder_left_r_z' => 'Shoulder Left R Z',
            'shoulder_right_p_x' => 'Shoulder Right P X',
            'shoulder_right_p_y' => 'Shoulder Right P Y',
            'shoulder_right_p_z' => 'Shoulder Right P Z',
            'shoulder_right_r_x' => 'Shoulder Right R X',
            'shoulder_right_r_y' => 'Shoulder Right R Y',
            'shoulder_right_r_z' => 'Shoulder Right R Z',
            'elbow_left_p_x' => 'Elbow Left P X',
            'elbow_left_p_y' => 'Elbow Left P Y',
            'elbow_left_p_z' => 'Elbow Left P Z',
            'elbow_left_r_x' => 'Elbow Left R X',
            'elbow_left_r_y' => 'Elbow Left R Y',
            'elbow_left_r_z' => 'Elbow Left R Z',
            'elbow_right_p_x' => 'Elbow Right P X',
            'elbow_right_p_y' => 'Elbow Right P Y',
            'elbow_right_p_z' => 'Elbow Right P Z',
            'elbow_right_r_x' => 'Elbow Right R X',
            'elbow_right_r_y' => 'Elbow Right R Y',
            'elbow_right_r_z' => 'Elbow Right R Z',
            'wrist_left_p_x' => 'Wrist Left P X',
            'wrist_left_p_y' => 'Wrist Left P Y',
            'wrist_left_p_z' => 'Wrist Left P Z',
            'wrist_left_r_x' => 'Wrist Left R X',
            'wrist_left_r_y' => 'Wrist Left R Y',
            'wrist_left_r_z' => 'Wrist Left R Z',
            'wrist_right_p_x' => 'Wrist Right P X',
            'wrist_right_p_y' => 'Wrist Right P Y',
            'wrist_right_p_z' => 'Wrist Right P Z',
            'wrist_right_r_x' => 'Wrist Right R X',
            'wrist_right_r_y' => 'Wrist Right R Y',
            'wrist_right_r_z' => 'Wrist Right R Z',
            'hand_left_p_x' => 'Hand Left P X',
            'hand_left_p_y' => 'Hand Left P Y',
            'hand_left_p_z' => 'Hand Left P Z',
            'hand_left_r_x' => 'Hand Left R X',
            'hand_left_r_y' => 'Hand Left R Y',
            'hand_left_r_z' => 'Hand Left R Z',
            'hand_right_p_x' => 'Hand Right P X',
            'hand_right_p_y' => 'Hand Right P Y',
            'hand_right_p_z' => 'Hand Right P Z',
            'hand_right_r_x' => 'Hand Right R X',
            'hand_right_r_y' => 'Hand Right R Y',
            'hand_right_r_z' => 'Hand Right R Z',
            'spine_p_x' => 'Spine P X',
            'spine_p_y' => 'Spine P Y',
            'spine_p_z' => 'Spine P Z',
            'spine_r_x' => 'Spine R X',
            'spine_r_y' => 'Spine R Y',
            'spine_r_z' => 'Spine R Z',
            'hip_left_p_x' => 'Hip Left P X',
            'hip_left_p_y' => 'Hip Left P Y',
            'hip_left_p_z' => 'Hip Left P Z',
            'hip_left_r_x' => 'Hip Left R X',
            'hip_left_r_y' => 'Hip Left R Y',
            'hip_left_r_z' => 'Hip Left R Z',
            'hip_right_p_x' => 'Hip Right P X',
            'hip_right_p_y' => 'Hip Right P Y',
            'hip_right_p_z' => 'Hip Right P Z',
            'hip_right_r_x' => 'Hip Right R X',
            'hip_right_r_y' => 'Hip Right R Y',
            'hip_right_r_z' => 'Hip Right R Z',
            'spine_base_p_x' => 'Spine Base P X',
            'spine_base_p_y' => 'Spine Base P Y',
            'spine_base_p_z' => 'Spine Base P Z',
            'spine_base_r_x' => 'Spine Base R X',
            'spine_base_r_y' => 'Spine Base R Y',
            'spine_base_r_z' => 'Spine Base R Z',
            'knee_left_p_x' => 'Knee Left P X',
            'knee_left_p_y' => 'Knee Left P Y',
            'knee_left_p_z' => 'Knee Left P Z',
            'knee_left_r_x' => 'Knee Left R X',
            'knee_left_r_y' => 'Knee Left R Y',
            'knee_left_r_z' => 'Knee Left R Z',
            'knee_right_p_x' => 'Knee Right P X',
            'knee_right_p_y' => 'Knee Right P Y',
            'knee_right_p_z' => 'Knee Right P Z',
            'knee_right_r_x' => 'Knee Right R X',
            'knee_right_r_y' => 'Knee Right R Y',
            'knee_right_r_z' => 'Knee Right R Z',
            'ankle_left_p_x' => 'Ankle Left P X',
            'ankle_left_p_y' => 'Ankle Left P Y',
            'ankle_left_p_z' => 'Ankle Left P Z',
            'ankle_left_r_x' => 'Ankle Left R X',
            'ankle_left_r_y' => 'Ankle Left R Y',
            'ankle_left_r_z' => 'Ankle Left R Z',
            'ankle_right_p_x' => 'Ankle Right P X',
            'ankle_right_p_y' => 'Ankle Right P Y',
            'ankle_right_p_z' => 'Ankle Right P Z',
            'ankle_right_r_x' => 'Ankle Right R X',
            'ankle_right_r_y' => 'Ankle Right R Y',
            'ankle_right_r_z' => 'Ankle Right R Z',
            'foot_left_p_x' => 'Foot Left P X',
            'foot_left_p_y' => 'Foot Left P Y',
            'foot_left_p_z' => 'Foot Left P Z',
            'foot_left_r_x' => 'Foot Left R X',
            'foot_left_r_y' => 'Foot Left R Y',
            'foot_left_r_z' => 'Foot Left R Z',
            'foot_right_p_x' => 'Foot Right P X',
            'foot_right_p_y' => 'Foot Right P Y',
            'foot_right_p_z' => 'Foot Right P Z',
            'foot_right_r_x' => 'Foot Right R X',
            'foot_right_r_y' => 'Foot Right R Y',
            'foot_right_r_z' => 'Foot Right R Z',
            'scale_x' => 'Scale X',
            'scale_y' => 'Scale Y',
            'scale_z' => 'Scale Z',
            'times' => 'Times',
        ];
    }
}
