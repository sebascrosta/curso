<?php
/*a. Leer el archivo e imprimir​ un checkbox por cada categoría, capaz de ser
enviado como array en un formulario. El value de cada checkbox será el id y
el label mostrado a su derecha será el nombre proveniente del json como
vemos en el en el array.*/
$json = file_get_contents("categorias.json");
$array = json_decode($json, true);
$categorias = $array["categorias"];
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Sarasa</title>
  </head>
  <body>
    <?php foreach ($categorias as $categoria){
      $id = $categoria["id"];
      $nombre = $categoria["nombre"];?>
      <input type="checkbox" name="categorias[]" value="<?php echo $id?>"><?php echo $nombre?>
    <?php }?>
  </body>
</html>
