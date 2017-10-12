<?php
/*HERE I GET THE NUMBER TO CREATE "X" NUMBER OF FORMS*/

if (isset($_POST["num"]))
{   
$num=$_POST["num"];
$_POST["num"]=$num;

        if ( is_numeric($num) and $num>=0)
        {
           echo"<form action=\"tercera.php\" method=\"post\">"; 
            echo "Quina operació vols fer?:<br><br> "
                . "<input type=\"radio\" name=\"operacio\" value=\"suma\"/>Suma "
                . "<input type=\"radio\" name=\"operacio\" value=\"mitja\"/>Mitja"
                . "<input type=\"radio\" name=\"operacio\" value=\"major\"/>Major"
                . "<input type=\"radio\" name=\"operacio\" value=\"menor\"/>Menor</p>";


/*HERE I MAKE THE FOR LOOP TO GENERATE THE FORMS WITH "numero[$i]" */

            for ($i=1; $i<=$num; $i++)
            {
               echo" <input type=\'text\' name=\'numero[$i]\' maxlength=\'10\' size=\"10\"/>"; 

            }
            echo "<p><input type='submit' value='Calcula' /></p>";               
        }
        else
        {
            echo "<H3>Has d'escriure un numero mes gran que 0, torna-ho a intentar.";
        }
}//isset*/

?>

/*/ NEXT  PHP PAGE /*/

<?php

if (isset($_POST["operacio"])) $operacio=$_POST["operacio"];

//HERE I GET THE NUMBERS OF THE LAST PAGE

   for ($i=1; $i<=2; $i++)
   {
       if (isset($_POST["numero[$i]"])) $num2=$_POST["numero[$i]"] ;


//HERE IS WHERE I GET THE ERROR: Undefined variable: num2  

//echo $num2;       
    }


//this part is ok ...

       // if ($operacio == "suma") 
        {
            echo "i equals 0";
        }

        //elseif ($operacio == "mitja") 
        {
            echo "i equals 1";
        }
       // elseif ($operacio == "major") 
        {
            echo "i equals 2";
        }

       // elseif ($operacio == "menor") 
        {
            echo "i equals 3";
        }
echo $num2;

        //if ( is_numeric($num) and $num>=0)
        {

           // for ($i=1; $i<=$num; $i++)
            {


            }

        }
      //  else
        {
            echo "<H3>Has d'escriure un numero mes gran que 0, torna-ho a intentar.";
        }
//isset*/

?>