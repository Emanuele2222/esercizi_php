
<!DOCTYPE html>


<h1 align = "center">
    <?php
 
        echo " Esercizio PHP N.1 Arrigoni ";

    ?>
</h1>


<style>

/*applico gli stili alla tabella*/

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color: #690a0a;
            color: #ffffff;
        }

        th {
            background-color: #ab900c;
            color: #ffffff;
        }
        
</style>

 <h2>
    <?php
        echo "FORMAZIONE DELLA ROMA";
    ?>
</h2>   
    

<body>

<?php

// Array associativo precompilato con i calciatori che compongono la formazione della roma
$formazione = array(
    array("NumeroMaglia" => 1, "Nome" => "Mile", "Cognome" => "Svilar", "Età" => 24, "Nazione" => "Portogallo"),
    array("NumeroMaglia" => 2, "Nome" => "Gianluca", "Cognome" => "Mancini", "Età" => 27, "Nazione" => "Italia"),
    array("NumeroMaglia" => 3, "Nome" => "Dean", "Cognome" => "Huijsen", "Età" => 18, "Nazione" => "Olanda"),
    array("NumeroMaglia" => 31, "Nome" => "Leonardo", "Cognome" => "Spinazzola", "Età" => 32, "Nazione" => "Italia"),
    array("NumeroMaglia" => 25, "Nome" => "Rasmus", "Cognome" => "Kristensen", "Età" => 25, "Nazione" => "Danimarca"),
    array("NumeroMaglia" => 4, "Nome" => "Bryan", "Cognome" => "Cristante", "Età" => 27, "Nazione" => "Italia"),
    array("NumeroMaglia" => 16, "Nome" => "Leandro", "Cognome" => "Paredes", "Età" => 29, "Nazione" => "Argentina"),
    array("NumeroMaglia" => 21, "Nome" => "Paulo", "Cognome" => "Dybala", "Età" => 29, "Nazione" => "Argentina"),
    array("NumeroMaglia" => 92, "Nome" => "Stephan", "Cognome" => "El Sharawi", "Età" => 31, "Nazione" => "Italia"),
    array("NumeroMaglia" => 7, "Nome" => "Lorenzo", "Cognome" => "Pellegrini", "Età" => 26, "Nazione" => "Italia"),
    array("NumeroMaglia" => 90, "Nome" => "Romelu", "Cognome" => "Lukaku", "Età" => 31, "Nazione" => "Belgio"),
);



//stampo la tabella
echo "<table>";
echo "<tr><th>NumeroMaglia</th><th>Nome</th><th>Cognome</th><th>Età</th><th>Nazione</th></tr>"; //intestazione della tabella con i nomi delle colonne

//stampo i valori di ogni riga
foreach ($formazione as $riga) {
    echo "<tr>";
    foreach ($riga as $valore) {
        echo "<td>$valore</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>