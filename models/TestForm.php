<?php
/**
 * Created by PhpStorm.
 * User: Raila
 * Date: 02.08.2018
 * Time: 12:35
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['name', 'string','length'=> [2,5],],
            ['name', 'myRule'],
            ['text','trim'],
        ];
    }
    public function MyRule($attr) {
        if( !in_array($this->$attr, ['hello', 'world'])){
            $this->addError($attr, 'Wrong!');
        }
    }
}