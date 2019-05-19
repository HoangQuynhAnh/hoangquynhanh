<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
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
 * @property int $status
 * @property string $avatar
 * @property string $batch
 *
 * @property Attendance[] $attendances
 * @property Studentmajors[] $studentmajors
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'tel', 'address', 'name', 'batch'], 'required'],
            [['status'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'address', 'name', 'avatar', 'batch'], 'string', 'max' => 255],
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
            'username' => 'Tài khoản',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'tel' => 'SĐT',
            'address' => 'Địa chỉ',
            'name' => 'Tên',
            'status' => 'Trạng thái',
            'avatar' => 'Ảnh',
            'batch' => 'Khoá',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['studentID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentmajors()
    {
        return $this->hasMany(Studentmajors::className(), ['studentID' => 'id']);
    }
        public function getuser() {
    $data = User::find()->all();
    return $data;
}
}
