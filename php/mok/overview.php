<?php include "../include/connectdb.php"; ?>
<?php include "../include/header.php"; ?>
<?php include "../include/navbar.php"; ?>
<?php
        $data = '';
        $label = '';
        $sql_1 = "SELECT * FROM `drink`"; 
        $sth_1 = $db->prepare($sql_1); 
        $sth_1->execute();
        while($row  = $sth_1->fetch()) : 
            $data = $data . $row['drink_count'] . ',';
            $label = $label . '"' . $row['drink'] . "  " . $row['drink_count'] .'"' . ',';
            
        endwhile; 
        $primelabel = substr_replace($label ,"", -1);
        $primedata = substr_replace($data ,"", -1);
        ?>


<div class="main_overview">
<div class="pie_text_1">
        <h5>there are currently 20 mugs!</h5>
    </div>
    <div class="pie_text_2">
        <h5>This is an overview of</h5>
    </div>
    <div class="pie_text_2">
        <h5>what has been in every mug</h5>
    </div>
    <br>
    <div class="pie">
        <canvas class="myPieChart" id="myPieChart"></canvas>
    </div>
</div>




<script>
  var ctx = document.getElementById('myPieChart').getContext('2d');
  var pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [<?php echo $primelabel; ?>],
      datasets: [{
        data: [<?php echo $primedata; ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: false
    }
  });
</script>
<?php include "../include/footer.php"; ?>