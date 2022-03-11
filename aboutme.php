<div class="back-berserk">
		</div>
		<h3 class="display-2 mt-3">Faisal Kassem Muhannad</h3>
		<blockquote class="blockquote text-center mt-4 p-2 border-top border-bottom border-dark">
  <p class="mb-0">When something is important enough, you do it even if the odds are not in your favor.</p>
  <footer class="mt-2 blockquote-footer"><cite title="Source Title">Elon Musk</cite></footer>
</blockquote>

<h2 class="display-3 mt-5 border-bottom border-dark mb-4">My projects section.</h2>
<div class="table-responsive mt-5">
  <table class="table">
   <tr>
    <th scope="col">Title</th>
    <th scope="col">Image</th>
   </tr>
<?php 
    $sql = "SELECT url,title FROM tbPhotosUrl;";
	    foreach($conn->query($sql) as $row){
?>
	<tr scope="row">
	<td class="text-center td-text" style="width:50%"><h4 class="td-text-inner responsive-font-example"><?=$row['title']?></h4></td>
	<td class="imgtd img-fluid rounded"><?php echo "<img src=" . $row['url'] . "/>"?></td>
	</tr>
<?php 
	    }
?>
   </table>
</div>
<div class="mt-5">
<h3>Briefly about me...</h3>
<p class="mt-4 border-top border-dark mb-4 p-1">Since I was 6 years old I have started using computer. Undoubtedly, I was passioned by the beauty of technology which had already been exploited. I have started programming around 15 years old, when my first programming language was C, followed by C++, where I have gained all the basic skills for function and object-oriented-programming. I studied HTML/CSS/JS/JQUERY/BOOTSTRAP/PHP and now I am focused on learning React.JS and Laravel and start my programming career. I have already made some projects and look forward to honing my skills to be able to complete more complex tasks. Moreover, I love Math and wilful to widen my knowledge studying this subject.</p>
</div>
<div class="container mt-5">
<h3 class="responsive-text border-bottom mb-2 border-dark">Academic career</h3>
 <div class="container d-flex p-1 mt-3 justify-content-between align-items-center">
<h3 class="responsive-text text-center"><i>Lodz University</i></h3>
<img src="data:image/png;base64,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" class="img-fluid rounded"/>
</div>
</div>
<div class="bers-png">
</div>
<div class="bers2-png">
