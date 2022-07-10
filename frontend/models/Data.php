<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Data extends ActiveRecord
{
    // public $judul;
    // public $link;
    // public $text;

    /**
     * {@inheritdoc}
     * untuk nama tabel
     */
    public static function tableName()
    {
        return 'tb_data';
    }

    /**
     * {@inheritdoc}
     * untuk validasi form
     */
    public function rules()
    {
        return [
            [['judul', 'link', 'text'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     * untuk label form
     */
    public function attributeLabels()
    {
        return [
            'judul' => 'JUDUL',
            'link'  => 'LINK',
            'text'  => 'TEXT',
        ];
    }
}
