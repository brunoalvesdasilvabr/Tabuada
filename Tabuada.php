<?php
$num= isset($_GET['num'])?$_GET['num']:0;
$multi;
$cont=1;
while ($cont <= 10) {
  $multi = $num * $cont;
  echo "$num X $cont = <b>" . $multi . "</b></br>";
    $cont++;
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .botao{
        padding: 10px;
        border-radius: 0 50% 50% 0;
      }
select{
  padding: 10px;
 width:90px;
}
h1{

}
    </style>
  </head>
  <body>
    <form action="Tabuada.php" method="get">
      <fieldset>
        <legend> <h1> Escolha sua Tabuada </h1></legend>
        <select name="num">
        <?php
        $cont=0;
        while ($cont <= 10) {
          echo  "<option value='$cont'> $cont</option><br/>";
          $cont++;
        }
        ?>
        </select>
        <button class="botao" type=submit>Gerar</button>
      </fieldset>
    </form>

  </body>
</html>
