<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="index.css">
  
</head>
  <body> 
  <h3>Juego de Ajedrez</h3>
  <button onclick="jugar()">
  Apoya el mouse sobre el tablero para aumentar el tamaño
</button>
   <table width="500px" height ="500px" cellspacing="0px" cellpadding="0px" border="5px">
      <?php
      for($fila=1;$fila<=8;$fila++)
	  {
            for($col=1;$col<=8;$col++)
		  {
            $total=$fila+$col;
          
            if($total%2==0)
		  {
            echo "<td height=30px width=30px bgcolor=#DC143C></td>";
            }
		else
		  {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
 
  </body>
  </html>