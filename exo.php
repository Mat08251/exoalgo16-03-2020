<?php

// Question 1

$a = 4;
$b = 6;

echo ('question 1 <br><br>');
if ($a < $b){
  echo "La variable b est la plus grande est égale à : ".$b;
}
  elseif ($a == $b){
    echo "Les variables sont équivalentes est égale à :";
  }
    elseif ($b < $a){
      echo "la variable a est la plus grande";
    }
    else {
      echo "ce que vous avez rentré est de la merde.";
    }


echo ('<br><br>question 1 - bis <br><br>');

echo max($a, $b);


echo ('<br><br>question 2 <br><br>');

    if ($a > $b){
      echo "La variable b est la plus petite";
    }
      elseif ($a == $b){
        echo "Les variables sont équivalentes";
      }
        elseif ($b > $a){
          echo "la variable a est la plus petite";
        }
        else {
          echo "ce que vous avez rentré est de la merde.";
        }

echo ('<br><br>question 3 <br><br>');

$a = 4;
$b = 6;
$temp = 0 ;

echo $a;
echo "<br>";
echo $b;
echo "<br>";echo "<br>";
$temp = $a;
$a = $b;
$b = $temp;

echo $a;
echo "<br>";
echo $b;

echo ('<br><br>question 4 <br><br>');
$resultat = $a + $b;
echo $resultat;


echo ('<br><br>question 5 <br><br>');
$resultat = rand(1,100);
echo $resultat;


echo ('<br><br>question 6 <br><br>');
$resultat = rand(5,10);
echo $resultat;

echo ('<br><br>question 7 <br><br>');

function addition($x, $y)
{
    $result = $x + $y;
    return $result;
}

$a = 5;
$b = 6;
$resultat = addition($a, $b);


echo $resultat;echo "<br>";
$b = 10;
$g = 6;
$resultat = addition($b, $g);
$res1 = addition ($resultat, $g);
echo $res1;echo "<br>";



?>
