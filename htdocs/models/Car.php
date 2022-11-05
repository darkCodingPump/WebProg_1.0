<?php

namespace app\models;

use app\core\DbModel;

class Car extends DbModel
{
    public string $modellbezeichnung= "";
    public string $B_2_1= "";
    public string $B_2_2= "";
    public string $J= "";
    public string $vier= "";
    public string $D_1= "";
    public string $D_2= "";
    public string $zwei= "";
    public string $fuenf= "";
    public string $V_9= "";
    public string $vierzehn= "";
    public string $P3= "";
    public string $innerorts= "";
    public string $ausserorts= "";
    public string $kombiniert= "";
    public string $NEFZ_CO2_kombiniert= "";
    public string $sehr_schnell= "";
    public string $schnell= "";
    public string $langsam= "";
    public string $WLTP_CO2_kombiniert= "";
    public string $Dateiname= "";

    public function saveCar()
    {
        return $this->save();
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'carDb';
    }

    public function rules(): array
    {
        return [
            'modellbezeichnung'=> [self::RULE_REQUIRED],
            'B_2_1' =>[self::RULE_REQUIRED],
            'B_2_2' =>[self::RULE_REQUIRED],
            'J' =>[self::RULE_REQUIRED],
            'vier' =>[self::RULE_REQUIRED],
            'D_1'=>[self::RULE_REQUIRED],
            'D_2' =>[self::RULE_REQUIRED],
            'zwei' =>[self::RULE_REQUIRED],
            'fuenf' =>[self::RULE_REQUIRED],
            'V_9' =>[self::RULE_REQUIRED],
            'vierzehn'=>[self::RULE_REQUIRED],
            'P3' =>[self::RULE_REQUIRED],
            'innerorts' =>[self::RULE_REQUIRED],
            'ausserorts' =>[self::RULE_REQUIRED],
            'kombiniert' =>[self::RULE_REQUIRED],
            'NEFZ_CO2_kombiniert' =>[self::RULE_REQUIRED],
            'sehr_schnell' =>[self::RULE_REQUIRED],
            'schnell' =>[self::RULE_REQUIRED],
            'langsam' =>[self::RULE_REQUIRED],
            'WLTP_CO2_kombiniert' =>[self::RULE_REQUIRED],
            'Dateiname' =>[self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['modellbezeichnung','B_2_1','B_2_2','J','vier','D_1','D_2','zwei','fuenf','V_9','vierzehn','P3','innerorts','ausserorts','kombiniert','NEFZ_CO2_kombiniert','sehr_schnell','schnell' ,'langsam' ,'WLTP_CO2_kombiniert','Dateiname'];
    }

    public function getInfos(): array
    {
        return [
            'modellbezeichnung'=> $this->modellbezeichnung,
            'B_2_1' =>$this->B_2_1,
            'B_2_2' =>$this->B_2_2,
            'J' =>$this->J,
            'vier' =>$this->vier,
            'D_1'=>$this->D_1,
            'D_2' =>$this->D_2,
            'zwei' =>$this->zwei,
            'fuenf' =>$this->fuenf,
            'V_9' =>$this->V_9,
            'vierzehn'=>$this->vierzehn,
            'P3' =>$this->P3,
            'innerorts' =>$this->innerorts,
            'ausserorts' =>$this->ausserorts,
            'kombiniert' =>$this->kombiniert,
            'NEFZ_CO2_kombiniert' =>$this->NEFZ_CO2_kombiniert,
            'sehr_schnell' =>$this->sehr_schnell,
            'schnell' =>$this->schnell,
            'langsam' =>$this->langsam,
            'WLTP_CO2_kombiniert' =>$this->WLTP_CO2_kombiniert,
            'Dateiname' =>$this->Dateiname,
        ];
    }
}