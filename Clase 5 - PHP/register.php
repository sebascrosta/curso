<?PHP
  define("DEBUG", true);

  if (DEBUG){
    var_dump($_POST);
    var_dump($_GET);
  }

 $paises = [
   1 => 'Argentina',
   2 => 'Bolivia',
   3 => 'Brasil',
   4 => 'Chile',
   5 => 'Colombia',
   6 => 'Ecuador',
   7 => 'Paraguay',
   8 => 'Perú',
   9 => 'Uruguay',
  10 => 'Venezuela',
 ];

if ($_POST) {
  var_dump($_POST);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario no feo</title>
  </head>
  <body>
    <form action="" method="post">

      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" placeholder="Nombre" class="input"> <br> <br>

      <label for="pass">Contraseña:</label>
      <input type="password" name="pass" placeholder="Password" class="input"> <br><br>

      <?php if(empty($_GET["versionCorta"])){
        echo' <label for="repitepass">Repita su contraseña:</label>
              <input type="password" name="repitepass" placeholder="Repita su password" class="input"> <br><br>';
      } ?>

      <label for="pais">País:</label>
      <select name="pais">

      <?php foreach ($paises as $codigo => $nombre): ?>
        <option value="<?php echo $codigo; ?>"> <?php echo $nombre; ?></option>
      <?php endforeach; ?>

      </select>

      <br><br> <input type="submit">
    </form>
  </body>
</html>
