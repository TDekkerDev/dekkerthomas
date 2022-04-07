<table>
  <tbody>
  <tr>
<th>titel</th>
<th>afspraak</th>
<th>locatie</th>
<th>date</th>
<th>time-begin</th>
<th>time-eind</th>
</tr>

        <?php
                  $host = "localhost";
                  $user = "root";
                  $pass = "";
                  $dbname = "agenda";

                  // set DSN
                  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

                  // create a PDO instance
                  $pdo = new PDO($dsn, $user, $pass);
                  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                  # PRDO QUERY

                   $stmt = $pdo->query("SELECT * FROM posts");

                  while($row = $stmt->fetch()){
                      echo "<tr>";
                      echo "<td>".$row->title . "</td>";
                      echo "<td>".$row->afspraak . "</td>";
                      echo "<td>".$row->locatie . "</td>";
                      echo "<td>".$row->datum . "</td>";
                      echo "<td>".$row->begintijd . "</td>";
                      echo "<td>".$row->eindtijd . "</td>";
                      echo "</tr>";
                  }

                


        ?>
    

   </tbody>
</table>