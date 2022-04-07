<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
<?php
$zoeken_naam = $_POST["zoeken"];
$zoeken_term = $_POST["zoekenkeuzen"];
echo "<br>";
echo "<br>";
echo "u zocht naar: $zoeken_term";
echo "<br>";
echo "u zocht naar:$zoeken_naam";
echo "<br>";
echo "<br>";
echo "afspraken die overeenkomen met uw zoekopdracht zijn:";
echo "<br>";
function load(){ 
    $file_path ="data/saved_item.json";
        if (file_exists($file_path)){
            $saved_items = file_get_contents($file_path);
            $saved_items = json_decode($saved_items,true);
        }else{
            $saved_items = [];
        }
    return $saved_items;
}
$file_path = "data/saved_items.json";
$saved_items = load($file_path);

foreach ($saved_items as $item) {
    $title = $item["title"];
    $description = $item["afspraak"];
    $location = $item["locatie"];
    $date = $item["datum"];
    $timebg = $item["begintijd"];
    $timeed = $item["eindtijd"];


    if ($zoeken_term == "titel") {
        if (strstr($title, $zoeken_naam )) {
            echo "<br>".$title . "<br>". $description . "<br>". $location . "<br>" . $date . "<br>" . $timebg . "<br>" . $timeed . "<br>";
        }
    }
    if ($zoeken_term == "afspraak") {
        if (strstr($location, $zoeken_naam)) {
            echo "<br>".$title . "<br>". $description . "<br>". $location . "<br>" . $date . "<br>" . $timebg . "<br>" . $timeed . "<br>";
        }
    }
    if ($zoeken_term == "locatie") {
        if (strstr($location, $zoeken_naam)) {
            echo "<br>".$title . "<br>". $description . "<br>". $location . "<br>" . $date . "<br>" . $timebg . "<br>" . $timeed . "<br>";
        }
    }
    
}

?>
<?php include "php/footer.php";?>