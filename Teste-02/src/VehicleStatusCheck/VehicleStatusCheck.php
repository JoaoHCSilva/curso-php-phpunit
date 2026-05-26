<?php

namespace App\VehicleStatusCheck;

class VehicleStatusCheck
{
    public function checkStatus(int $quilometers, int $monthsBeforeLastMaintenance) : string
    {
       if( $quilometers > 200_000 ){
            return "Aposentado";
       }
       elseif ( !($quilometers > 200_000) && $monthsBeforeLastMaintenance > 12){
            return "Em Manutenção";
       }
       
       return "Disponível";
    }
}