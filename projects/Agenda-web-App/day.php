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

function getdate2($saved_items, $vandaag) { 
    foreach ($saved_items as $item) {
        if ($item['datum'] == $vandaag) {
            return true;
        }
    }
    return false;
}

function gethours($saved_items, $UrenVandaag) {
    foreach ($saved_items as $item) {
        if ($item['begintijd'] == $UrenVandaag) ;
    }
}

/*function getItem($saved_items, $vandaag) {
    foreach ($saved_items as $item) {
        if ($item['datum'] == $vandaag) {
            return $item;
        }
    }

    return false;
}*/



function getItem($saved_items, $vandaag){
    $items=[];
    foreach($saved_items as $item){
        if($item['datum']==$vandaag){
            $items[]=$item;

        }

    }
    return $items;
}

function gettitel($saved_items, $vandaag) { 
    foreach ($saved_items as $item) {
        if ($item['datum'] == $vandaag){
            return $item['title'];
        }
    }
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
$vandaag= "$jaar-$maand-$dag";
$timestamp = mktime(0,0,0,$maand,1,$jaar);

$dag1= date("w", $timestamp);
$dagenInMaand = date("t", $timestamp);
$dagenInWeek = date("w", $timestamp);
$cel = 0;

$datumloopjaar = "$jaar";
$datumloopmaand = "$maand";
$datumloopdag = 0; 

echo "<table>";

echo $dag . "-" . $maand . "-" . $jaar ;
echo "<br>";

// for($i=1; $i <= 24; $i++){
//     echo '<tr><td onclick="show()">' . $i . ':00' . '</td></tr>';
//     $cel++;
// }

$items = getItem($saved_items, $vandaag);



for($UrenVandaag=1; $UrenVandaag <= 24; $UrenVandaag++){
    $class = "box";
    foreach($items as $item){
        $splitTimeStampb = explode(":",$item['begintijd']);
        $dateb = $splitTimeStampb[0];
        $timeb = $splitTimeStampb[1];
        $splitTimeStampe = explode(":",$item['eindtijd']);
        $datee = $splitTimeStampe[0];
        $timee = $splitTimeStampe[1];

        if($UrenVandaag==$splitTimeStampe[0]){
            $class = "box red";
        }    
        if($UrenVandaag==$splitTimeStampb[0]){
            $class = "box red";
        }
        echo"<td class='$class' onclick='show()'>$UrenVandaag:00<br>" . "</td>";
    }
    
}


echo "</table>";

?>