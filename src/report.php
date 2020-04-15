<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/report.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            <img src="../assets/img/logo.png" style="width: 80px ; margin-top:5%;height : 80px;">
            </div>
            <div class="col-sm-8">
                <h2 style="text-align:center">Hello, Here is the Report
            </div>
            <div class="col-sm-2">
            <a href="login.php" ><button type="button" class="btn btn-primary btn-lg" style="margin-top:10%;margin-left:90%">Log Out</button></a>
            </div>
        </div>
    </div>
    </div>
    

<button class="tablink" onclick="openPage('Home', this, '#ffcccc')">Home</button>
<button class="tablink" onclick="openPage('News', this, ' #00e64d')" id="defaultOpen">News</button>
<button class="tablink" onclick="openPage('Contact', this, '#4dd2ff')">Contact</button>
<button class="tablink" onclick="openPage('About', this, ' #8080ff')">About</button>

<div id="Home" class="tabcontent">
  <h3>Pengambilan Paket Belajar</h3>
  <div id="piechart" class="diagram">
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart)
        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 8],
        ['Eat', 2],
        ['TV', 4],
        ['Gym', 2],
        ['Sleep', 8]
        ])
        // Optional; add a title and set the width and height of the chart
        var options = {'title':'My Average Day', 'width':550, 'height':400}
        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>
    </div>
</div>

<div id="News" class="tabcontent">
  <h3>Progress</h3>
  <div class="progress">
    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </div>
</div>

<div id="Contact" class="tabcontent">
  <h3>Jumlah Peserta : </h3>
  <h3>Jumlah pengambil Paket premium : </h3>
  <h3>Jumlah pengambil Paket Gold : </h3>
  <h3>Jumlah pengambil Paket Silver : </h3>
</div>

<div id="About" class="tabcontent">
  <h3>Pendaftar</h3>
  <h3> List Daftar Pelajar </h3>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

    <div class="manager-info">
	<div class="container-fluid">
		<div class="row">
            
		</div>
	</div>
    </div>
</body>
</html>