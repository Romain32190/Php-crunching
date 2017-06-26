<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

count ($dico);
print_r('Exercice1:');
echo count($dico);

?>

<?php
$string = array();
  foreach ($dico as $recup) {
    if(strlen($recup) == 15){
      array_push($string, $recup);

    }

  }
  print_r('Exercice2:');
  echo count($string);
 ?>
