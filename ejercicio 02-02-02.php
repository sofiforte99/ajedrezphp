<?php
$competencia = "zdqmwpbs";
function guerraAlfabeto($competencia){
$resultado=0;    
$derecha =0; $izquierda=0;
$arr1 = str_split($competencia);
for ($i=0; $i<count($arr1);$i++)
{
    switch($arr1[$i]){
        case 'w':
            $izquierda += 4;
            break;
        case 'p':
            $izquierda+= 3;
            break;
        
        case 'b':
            $izquierda+= 2;
            break;
        case 's':
            $izquierda++;
            break;
        case 'm':
            $derecha+= 4;
            break;
        case 'q':
            $derecha+= 3;
            break;
        case 'd':
            $derecha+= 2;
            break;
        case 'z':
            $derecha++;
            break;
            
    }
   
}

$resultado = $derecha <=> $izquierda;

return $resultado;


}

function mostrarGanador ($valor){
    if ($valor == 1){
        echo "gana el lado derecho";
    }
    else if ($valor == -1){
        echo "gana el lado izquierdo";
    }
    else{
        echo "empate";
    }

}

$valor = guerraAlfabeto($competencia);

mostrarGanador($valor);


?>