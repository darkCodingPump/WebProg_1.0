<?php

namespace app\models;

class car
{
    public function register()
    {
        return $this->save();
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 1], [self::RULE_MAX, 'max' => 8]],
            'passwordRep' => [[self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function attributes(): array
    {
        return ['name', 'lastname', 'email', 'password'];
    }

    public function getInfos(): array
    {
        return [
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => $this->password
        ];
    }
}