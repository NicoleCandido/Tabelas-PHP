<html>
 <head>
  <title>Valor das parcelas</title>
  <meta charset="UTF-8"/>
   <link rel="stylesheet" type="text/css" href="estilo.css" />
 </head>
  <body>
  <div>
  <table id="table">
  <?php
$v = $_POST['Valor'];
for($cont=1;$cont <= $v; $cont++){
    if($cont%2==0){
        $class="clara";
       }
       else{
        $class="escu ra";
       }
        echo "<tr class=",$class,"><td>",$cont,"</td></tr>"; 		   
     }
  
?>
</table>
    </div>
  </body>
</html>
