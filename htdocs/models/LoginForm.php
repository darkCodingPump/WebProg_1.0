<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{

    public string $email ='';
    public string $password ='';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login()
    {
        $user = User::findInstance(['email' => $this->email]);
        if (!$user) {
            $this->addErrorByRule('email', 'Keine Übereinstimmung gefunden');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addErrorByRule('password', 'Passwort ist falsch');
            return false;
        }

        return Application::$app->login($user);

    }
}