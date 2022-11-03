<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $name;
    public string $lastname;
    public string $mail;
    public string $password;
    public string $passwordRep;

    public function register()
    {
        echo 'Creating new User';
    }

    public function rules(): array
    {
        return [
            'name' =>[self::RULE_REQUIRED],
            'lastname' =>[self::RULE_REQUIRED],
            'mail' =>[self::RULE_REQUIRED],
            'password' =>[self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 1], [self::RULE_MAX, 'max'=> 8]],
            'passwordRep' =>[[self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}