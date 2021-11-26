<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "og_historialscore".
 *
 * @property int $hSportsID
 * @property string $hSports
 * @property string $hSportsRecord
 *
 * @property OgRecordranking $hSports0
 */
class OgHistorialscore extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_historialscore';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hSports', 'hSportsRecord'], 'required'],
            [['hSportsRecord'], 'string'],
            [['hSports'], 'string', 'max' => 255],
            [['hSportsID'], 'exist', 'skipOnError' => true, 'targetClass' => OgRecordranking::className(), 'targetAttribute' => ['hSportsID' => 'sportsID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hSportsID' => 'H Sports ID',
            'hSports' => 'H Sports',
            'hSportsRecord' => 'H Sports Record',
        ];
    }

    /**
     * Gets query for [[HSports0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHSports0()
    {
        return $this->hasOne(OgRecordranking::className(), ['sportsID' => 'hSportsID']);
    }
}
