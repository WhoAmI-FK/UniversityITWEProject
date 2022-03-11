<?php
include_once "dbcon.php";
$cur_date = date('l jS \of M Y');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>WhoAmIFK</title>
<link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/social-black-buttons/512/anonymous-512.png" type="image/x-icon"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="main.css"/>
<?php 
$dayOfWeek = date('l');
if($dayOfWeek=='Saturday' || $dayOfWeek=='Sunday') echo "<style>*{ color:red!important }</style>";
?>
</head>
<body>
<div style="" id="loading"><div class="loading-image">Loading...</div></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">WhoAmIFk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?id=1">About me</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?id=2">List of courses</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?id=3">List of my favourite artists</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link disabled" href="#"><?=$cur_date?></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container edited-container">
<?php
		$Defvar = 1;
		if($_GET) $Defvar = $_GET["id"];
		switch($Defvar){
		case 1:
		include_once "aboutme.php";
		break;
		case 2:
		include_once "listofcourses.php";
		break;
		case 3:
		include_once "myfavartists.php";	
		break;
		default:
		echo "Welcome page...";
		}
	
?>
</div>
 

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->

      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Text -->
    <section class="mb-4">
     <h3><?php if($Defvar==1) echo "Every day there is much work to be done."; else echo " Faisal Kassem Muhannad";?></h3>
    </section>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:<i> WhoAmIFK</i>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQiq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
		$(window).on('load', function(){
			  setTimeout(removeLoader, 1500); //wait for page load PLUS two seconds.
		});
		function removeLoader(){
			    $('#loading').hide();  
				         }
// sorting function 	
$(document).ready(function(){
	$('#sorting').change(function(e){
		let ascending = true;
		let val = e.target.value;
		let myTable = $('#myTab');
		let items = myTable.children('tr');
		let  sortList = Array.prototype.sort.bind(items);
		let doSort = function(ascending){
			sortList(function(a,b){
				let aText = val == 'IDs' ? a.children[0].innerHTML : val == 'Professors' ? a.children[1].innerHTML : val=='Courses' ?  a.children[2].innerHTML : a.children[3].innerHTML;
				let bText = val == 'IDs' ? b.children[0].innerHTML : val == 'Professors' ? b.children[1].innerHTML : val=='Courses' ? b.children[2].innerHTML : b.children[3].innerHTML;	
				if(aText < bText){
				 return ascending ? -1 : 1;
				}
				if(aText > bText){
				 return ascending ? 1:-1;
				}
				return 0;
			});
			myTable.append(items);
		}
		doSort(ascending);
		ascending=!ascending;
	});
});
</script>
</body>
</html>
