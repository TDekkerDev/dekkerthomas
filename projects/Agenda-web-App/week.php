<?php
include "php/header.php";
include "php/navbar.php";

if (!empty($_GET)) {
    $error = $_GET["error"];
    echo $error;
}
$saved_items=getcontent();

    function getcontent(){ 
        $file_path ="data/saved_item.json";
            if (file_exists($file_path)){
                $saved_items = file_get_contents($file_path);
                $saved_items = json_decode($saved_items,true);
            }else{
                $saved_items = [];
            }
        return $saved_items;
    }
?>

<div id="click">
    <div class=new_afspraak2>
     
        <div class="new_afspraak">
            
            <form action="uitkomst.php" method="POST">
                <h1>Nieuwe Agenda Item</h1>

                <br>
                <label class=vragen for="titel" >Titel:
                    <input type="text" name="titel"> <br>
                </label>
                <br>
                <label class=vragen for="afspraak">Omschrijving van de afspraak:
                    <input type="text" name="afspraak" id="omschrijving"> <br>
                </label>
                <br>
                <label class=vragen for="locatie">Locatie:
                    <input type="text" name="locatie" id="locatie1"> <br>
                </label>
                <br>
                <label class=vragen for="date">Datum van afspraak:
                    <input type="date" name="date" id="datum"> <br> 
                </label>
                <br>
                <label class=vragen for="time"> Begintijd:
                    <input type="time" name="time-begin" id="time-begin">  &nbsp; Eindtijd:<input type="time" name="time-eind" id="time-eind"><br>
                </label>
                <br>
                <input class=vragen id="help" type="submit" value="Maak Item Aan">
                <br>

            </form>
    
        </div>
    </div>
</div>
<div class="container_box">

<?php 
$dag = date('d');
$week = date('w');
$maand = date('m');
$jaar= date('Y');
$dag_letter= date('l');

$eerste_dag = $dag - $week;

$timestamp = mktime(0,0,0,$maand,1,$jaar);

$dag1= date("w", $timestamp);
$dagenInMaand = date("t", $timestamp);
$dagenInWeek = date("w", $timestamp);
$cel = 0;

echo $dag . "-" . $maand . "-" . $jaar ;

echo"<table>";

echo"<tr><th>ZONDAG</th><th>MAANDAG</th><th>DINSDAG</th><th>WOENSDAG</th><th>DONDERDAG</th><th>VRIJDAG</th><th>ZATERDAG</th>";

echo"<tr>";

function getdate2($saved_items, $datumloop) { 
    foreach ($saved_items as $item) {
        if ($item['datum'] == $datumloop) {
            return true;
        }
    }
    return false;
}

function gettitel($saved_items, $datumloop) { 
    foreach ($saved_items as $item) {
        if ($item['datum'] == $datumloop){
            return $item['title'];
        }
    }
}

$datumloopjaar = $jaar;
$datumloopmaand = "$maand";
$datumloopdag = 0;    

// for($i=0; $i< $dag1; $i++){
//     echo'<td class="box" onclick="show()"> x </td>';
//     $cel++;
// }
for($datumloopdag=$eerste_dag; $datumloopdag <= $eerste_dag+6; $datumloopdag++){
    $datumloop="$datumloopjaar-$datumloopmaand-$datumloopdag";
    $class = "box";
    $titelloop = "";
    if (getdate2($saved_items, $datumloop)) {
        $class = "box red";
    }
    $titel = gettitel($saved_items, $datumloop);
    echo "<td class='$class' onclick='show()'>$datumloopdag<br>$titel</td>";
    $cel++; 
}


echo"</table>";

?>