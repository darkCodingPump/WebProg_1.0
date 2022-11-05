<?php

namespace app\models;

use app\core\DbModel;

class blog extends DbModel
{
    public int $userId = 0;
    public string $title = "";
    public string $category= "";
    public string $text= "";
    public string $created= "";
    public car $referenceCar;
    public string $titlePicture = "";

    public function saveBlog()
    {
        return $this->save();
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'blogEntrys';
    }

    public function rules(): array
    {
        return [
            'title' => [self::RULE_REQUIRED],
            'category' => [self::RULE_REQUIRED],
            'text' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['userId','title', 'category', 'text', 'created', 'referenceCar', 'titlePicture'];
    }

    public function getInfos(): array
    {
        return [
            'userId' => $this->userId,
            'title'=> $this->title,
            'category'=> $this->category,
            'text'=> $this->text,
            'created'=> $this->created,
            'referenceCar'=> $this->referenceCar,
            'titlePicture'=> $this->titlePicture
        ];
    }
}