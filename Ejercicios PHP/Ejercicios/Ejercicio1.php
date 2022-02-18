<?php
$vrnum = $_POST["numero1"];
function tabla_de_multiplicar($vrnum)
{
    for ($vrnum2=1; $vrnum2 <= 10; $vrnum2++) {
            $vrresultado = ($vrnum * $vrnum2);
            echo $vrnum . " X " . $vrnum2 . " = " . $vrresultado;
            echo '<br>';
        }

    return $vrresultado;
}
echo tabla_de_multiplicar($vrnum);
?>