<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie1_Exo4</title>
</head>
<body>
  <?php
    $name = "Hello world"; //strval — Récupère la valeur d'une variable, au format chaîne.
      settype($name, "string");
    echo $name . " ";
//A string is a sequence of characters, like "Hello world!".

    $age = 12; //intval — Retourne la valeur numérique entière équivalente d'une variable.
      settype($age, "integer");
      echo $age . " ";
//An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    $poids = 60.52; //floatval — Convertit une chaîne en nombre à virgule flottante.
      settype($poids, "float");
    echo $poids . " ";
//A float (floating point number) is a number with a decimal point or a number in exponential form.

    $reponse = 10; // boolval — Récupère la valeur booléenne d'une variable.
      settype($repone, "bool");
    echo $reponse;
//A Boolean represents two possible states: TRUE or FALSE.


  ?>
</body>
</html>
