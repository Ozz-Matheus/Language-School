<?php 

use Carbon\Carbon;

function setActiveRoute($name)
{

    return request()->routeIs($name) ? 'active' : '';

}

function setHour($hour)
{

    return date("g:i a",strtotime($hour));

}

function horario($valor)
{

    $carbon = Carbon::now();

    if($valor == 'date'){

     $date = $carbon->format('Y-m-d');
     return $date; 

    }elseif($valor == 'time'){ 

        $time = $carbon->format('h'.':00 '.'a');
        return $time; 

    }elseif($valor == 'tomorrow'){

        $tomorrow = $carbon::tomorrow()->format('Y-m-d');
        return $tomorrow; 
    }

}