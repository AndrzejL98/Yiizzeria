<?php 
namespace app\models;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord

{
    private $NazwaPizzy;
    private $Składniki;
    private $Kategoria;

    public function rules(){
        return[
            [['NazwaPizzy', 'Składniki', 'Kategoria'], 'required']
        ];
    }

}
