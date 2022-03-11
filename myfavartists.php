<?php include_once "dbcon.php" ?>
		<blockquote class="blockquote text-center mt-4 mb-4 p-2 border-top border-bottom border-dark">
  <p class="mb-0">“Simplicity is a prerequisite for reliability.”</p>
  <footer class="blockquote-footer mt-2"><cite title="Source Title">Edsger Dijkstra</cite></footer>
</blockquote>
		<?php
			$sql = "SELECT FullName, DateOfBirth, photoUrl,autQuote FROM tbMyFavArtists";
			foreach($conn->query($sql) as $row){
?>
		<div class="sub-container">
			<?php
			  print "<div class='first-row'><span class='display-1 text-responsive'>".$row['FullName'] . "</span>";
			  print "<span class='display-2 text-responsive'>".$row['DateOfBirth'] . "</span></div>";
			  print "<div class='second-row'><img src=" . $row['photoUrl'] . "></div>";
			?>		  
	       </div>
	<blockquote class="blockquote text-center mt-4 mb-4 p-2 border-top border-bottom border-dark">
	<p class="mb-0"><?=$row['autQuote']?></p>
	<footer class="blockquote-footer mt-2"><cite title="Source Title"><?=$row['FullName']?></cite></footer>
        </blockquote>

<?php 	
		}
	
