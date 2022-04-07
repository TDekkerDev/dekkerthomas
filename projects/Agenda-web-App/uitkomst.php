
<?php
include "php/header.php";
include "php/navbar.php";
?>

<?php

$titel=$_POST["titel"];
$onderwerp =$_POST["afspraak"];
$locatie = $_POST["locatie"];
$date = $_POST["date"];
$begintijd =$_POST["time-begin"];
$eindtijd = $_POST["time-eind"];
$timestamp= strtotime($date);

echo"<div id='grootphp'>";

function newafspraak($titel,$onderwerp,$locatie,$date,$begintijd,$eindtijd){

    
    $new_item = [
        "title" => $titel,
        "afspraak" => $onderwerp,
        "locatie" => $locatie,
        "datum" => $date,
        "begintijd" => $begintijd,
        "eindtijd" => $eindtijd
    ];

    $saved_items=getcontent();
    
    if(overlappendDatum($saved_items,$new_item)){
        echo '<script>alert("U kunt geen afspraken die in elkaar lopen opgeven")</script>';
        
        foreach($saved_items as $item){
            
     
            
            echo   "<div class='saveditems'><br>".$item["title"]  . "<br>". $item["afspraak"]  . "<br>". $item["locatie"] . "<br>" . $item["datum"] . "<br>" . $item["begintijd"]  . "<br>". $item["eindtijd"] . "<br></div>";

        }
    }else{
        save($new_item);
    }
}

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

function save($new_item){
    
    $saved_items =getcontent();
    $saved_items[]= $new_item;
    $datums = [];
    foreach($saved_items as $item){
        $datums[] = $item["datum"] . $item["begintijd"];
    }

    array_multisort($datums,$saved_items);

    $file_path ="data/saved_item.json";
    $saved_items_json = json_encode($saved_items);
    file_put_contents($file_path,$saved_items_json);

    foreach($saved_items as $item){
     
        echo   "<div class='saveditems'>".$item["title"]  . "<br>". $item["afspraak"]  . "<br>". $item["locatie"] . "<br>" . $item["datum"] . "<br>" . $item["begintijd"]  . "<br>". $item["eindtijd"] . "<br></div>";
        

    }
   
    
}




function overlappendDatum($saved_items,$new_item){
    
    $nb=$new_item["datum"] . " " . $new_item["begintijd"];
    $ne=$new_item["datum"] . " " . $new_item["eindtijd"];
    foreach($saved_items as $item){
        $bb=$item["datum"] ." " . $item["begintijd"]; 
        $be=$item["datum"] ." " . $item["eindtijd"];
        if($nb >= $bb && $nb <= $be){
            return true;
        }
        
        if($ne >= $bb && $ne <= $be){
            return true;
        }
        if($nb<$bb && $ne>$be){
            return true;
        }
        
    } 
    return false;
}




if(empty($titel)){
    
    header('Location:index.php?error=U moet Titel invoeren');
}

if(empty($onderwerp)){
    
    header('Location:index.php?error=U moet de omschijving van de afspraak invoeren');
}


if(empty($locatie)){
    
    header('Location:index.php?error=U moet locatie invoeren');
}
    
if(empty($date)){
    
    header('Location:index.php?error=U moet de datum invoeren');

}elseif(time()>$timestamp){
    header('Location:index.php?error=U moet een datum kiezen die nog niet is geweest');

} 

if(empty($begintijd)){
    
    header('Location:index.php?error=U moet de begintijd invoeren');
}

if(empty($eindtijd)){
    
    header('Location:index.php?error=U moet de eindtijd invoeren');
 

}


echo display();

function display(){
    $titel = $_POST["titel"];
    $onderwerp = $_POST["afspraak"];
    $locatie = $_POST["locatie"];
    $date = $_POST["date"];
    $begintijd =$_POST["time-begin"];
    $eindtijd = $_POST["time-eind"];
    echo"<div class='saveditems'> Uw nieuwe afspraak:<br>";
    echo $titel;
    echo "<br>";
    echo $onderwerp;
    echo "<br>";
    echo $locatie;
    echo "<br>";
    echo $date;
    echo "<br>";
    echo $begintijd;
    echo "<br>";
    echo $eindtijd;
    echo "</div>";
    newafspraak($titel,$onderwerp,$locatie,$date,$begintijd,$eindtijd);
};
echo"</div>";
include "php/footer.php";?>

<?php include "php/databasesend.php";?> 