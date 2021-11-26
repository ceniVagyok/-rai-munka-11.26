<?php
    error_reporting(E_ALL);
    ini_set('display_error', '1');
    require_once("student_calss.php");
                /*echo "<pre>";
            var_dump($F_ker_nev);
            var_dump($L_ker_nev);
            var_dump(count($L_ker_nev));
            echo "</pre>";*/
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Valami </title>
    </head>
    <body>
        <?php
            //nevek
            $vez_nevek = explode(" ", "Nagy Kovács Tóth Szabó Horváth Varga Kiss Molnár Németh Farkas");
            $L_ker_nev = explode(" ", "Hanna Anna Zoé Léna Luca Emma Zsófia Boglárka Lili Mira");
            $F_ker_nev = explode(" ", "Bence Máté Dominik Levente Noel Dániel Zalán Marcell Olivér Ádám");
            //generálása mondjuk 10 embernek viszont ezt egy tömbbe bele kell rakni, mert elkell tárolni a tanulókat
            $tanulok = array();
            for($i = 0; $i < 10; $i++){
                if(rand(1, 2) == 2){
                    array_push($tanulok, new students($vez_nevek[rand(0, count($vez_nevek) - 1)] . " " . $L_ker_nev[rand(0, count($L_ker_nev) - 1)]));
                }
                else
                {
                    array_push($tanulok, new students($vez_nevek[rand(0, count($vez_nevek) - 1)] . " " . $F_ker_nev[rand(0, count($F_ker_nev) - 1)]));
                }

            }

            foreach($tanulok as $tanulo){
                echo $tanulo->nev . "<br/>";
                for($i = 0; $i < 10; $i++){
                    $tanulo->jegyetkap(rand(1, 5));
                }
                echo "jegyei: " . implode(",", $tanulo->jegyek) . "<br/>";
                echo "tanulmányi átlaga: " . $tanulo->atlag();
                echo "<br/><br/>";
            }
        ?>
    </body>
</html>