<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "size".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $size_number
 * @property mixed $status
 */
class Size extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'size';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'size_number',
            'status',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size_number', 'status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'size_number' => 'Size Number',
            'status' => 'Status',
        ];
    }

    public function getTableSchema(){
        return false;
    }
}
