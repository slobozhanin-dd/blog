<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username'], 'string'],
            [['username'], 'unique'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email'],
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $username = new User();
            $username->attributes = $this->attributes;
            return $username->create();
        }
    }

}