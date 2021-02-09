<?php
function sumaDigitos($numbers)
{
    $arr1=explode(" ",$numbers);  

    $arraySumas = [];
   
    for ($i=0; $i<count($arr1);$i++)
        {
            $arraySumas[$arr1[$i]] = (array_sum(str_split($arr1[$i])));
        }
    
    asort($arraySumas);
    $arrayKeysOrdenado = array_keys($arraySumas);
    $stringArrayKeysOrdenado = implode(" ",$arrayKeysOrdenado);

    return $stringArrayKeysOrdenado;


}



$numbers= "56 65 74 100 99 68 86 180 90";   

echo sumaDigitos($numbers);



?>