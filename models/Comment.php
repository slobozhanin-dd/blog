<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_comment}}".
 *
 * @property int $id
 * @property string|null $content
 * @property int|null $status
 * @property string|null $create_time
 * @property string|null $author
 * @property string|null $email
 * @property string|null $url
 * @property int|null $post_id
 *
 * @property TblPost $post
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_comment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'post_id'], 'integer'],
            [['create_time'], 'safe'],
            [['content', 'author', 'email', 'url'], 'string', 'max' => 255],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'author' => 'Author',
            'email' => 'Email',
            'url' => 'Url',
            'post_id' => 'Post ID',
        ];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(TblPost::className(), ['id' => 'post_id']);
    }
}
