<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $tel
 * @property string $address
 * @property string $name
 * @property string $avatar
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'tel', 'address', 'name'], 'required'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'address', 'name', 'avatar'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['tel'], 'string', 'max' => 10],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Tên',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'tel' => 'Tel',
            'address' => 'Address',
            'name' => 'Name',
            'avatar' => 'Avatar',
        ];
    }
}
