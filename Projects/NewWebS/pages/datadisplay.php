<html lang="php">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117578003-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-117578003-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta charset="utf-8"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="../cssSheet/STS.css" type="text/css" ></link>

<title>Shaffer Tech Solutions</title>

<link href="css/bootstrap.min.css" rel="stylesheet"></link>
<link href="css/style.css" rel="stylesheet"></link>

</head>
<body>
	<!-- start of home page -->
	<div id="learnProcess" class = "pageSet" role="page">
		<div class = "headButtons">
			<a class = "links" href = "../index.html">Home</a>
			<a class = "links" href = "learnProcess.html">Learn our Process</a>
			<a class = "links" href = "affiliates.html">Affiliate Sites</a>
			<a class = "links" href = "contactUs.html">Contact Us</a>
		</div>
		<div class = "headerCont">
			<img class="headerBack" src="../images/BG1.jpg">
			<p class="headerTitleText"> Shaffer Tech Solutions</p>
			<p class="headerText"> We make your tech problems, tech Solutions!</p>
			<p class="pageTitle"> Data Search</p>
			<img class="shield" src="../images/shield.png">
		</div>

<div class="row">
		<div class="col-md-4">

      <?php

      include 'config.php';
      include 'opendatabase.php';

      $sql= "SELECT firstName, lastName, jobCreated
FROM customers
ORDER BY lastName ASC";

      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "FirstName: " . $row["firstName"]. "<br>";
              echo "LastName: " . $row["lastName"]. "<br>";
              echo "JobCreated: " . $row["jobCreated"]. "<br><hr>";
        }
      } else {
        echo "0 results";
      }
      mysqli_close($conn);

      ?>
		</div>

    </div>
    </div>
</body>
</html>
