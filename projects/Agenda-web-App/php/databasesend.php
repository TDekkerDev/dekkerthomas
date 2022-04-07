<?php
           $host = "localhost";
           $user = "root";
           $pass = "";
           $dbname = "agenda";

           // set DSN
           $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

           $pdo = new PDO($dsn, $user, $pass);

           // insrt data
                $title = $_POST['titel'];
                $afspraak = $_POST['afspraak'];
                $locatie = $_POST['locatie'];
                $datum = $_POST['date'];
                $begintijd = $_POST['time-begin'];
                $eindtijd = $_POST['time-eind'];

                $sql = "INSERT INTO posts(title, afspraak, locatie, datum, begintijd, eindtijd) VALUES (:titel, :afspraak, :locatie, :datum, :timebegin, :timeeind)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['titel' => $title, 'afspraak' => $afspraak, 'locatie' => $locatie, 'datum' => $datum, 'timebegin' => $begintijd, 'timeeind' => $eindtijd]);
                echo "Data is toegevoegd";


           

?> 
