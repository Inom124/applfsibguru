<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string $name
 * @property string $section
 * @property string $key
 * @property string $value
 * @property int $status
 * @property string $rule
 * @property string $tag
 * @property int $createdAt
 * @property int $updatedAt
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'section', 'key', 'value', 'rule', 'tag', 'createdAt', 'updatedAt'], 'required'],
            [['value'], 'string'],
            [['status', 'createdAt', 'updatedAt'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['section', 'key', 'rule', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'section' => 'Section',
            'key' => 'Key',
            'value' => 'Value',
            'status' => 'Status',
            'rule' => 'Rule',
            'tag' => 'Tag',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
