<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class SearchForm extends Model
{
    public string $query = "";

    public function search()
    {

    }

    public function rules(): array
    {
        return [
            'query' => [self::RULE_REQUIRED],
        ];
    }
}