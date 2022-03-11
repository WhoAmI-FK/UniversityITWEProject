<?php
include_once "dbcon.php";
$sql = "SELECT rtc.id,t.tName,c.cName FROM tbTeachers t JOIN tbRelTeachCourse rtc ON(t.id=rtc.tId) JOIN tbCourses c ON(c.id=rtc.cId);"
?>
<h1 class="display-1 border-bottom border-dark p-1">List of Courses</h1>
<div class="mt-4"><span class="display-4">Sort by</span> <select id="sorting" class="mt-2 form-select" aria-label="Default select example">
  <option selected  value="IDs">IDs</option>
  <option value="Professors">Professors</option>
  <option value="Courses">Courses</option>
  <option value="Semester#">Semester#</option>
</select></div>
<table class="table table-dark mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Professor</th>
      <th scope="col">Course</th>
      <th scope="col">Semester#</th>
    </tr>
  </thead>
  <tbody id="myTab">
<?php
    foreach($conn->query($sql) as $row){
    ?>
    <tr>
    <th id="ident" scope="row"><?=$row["id"]?></th>
    <td id="prof"><?=$row["tName"]?></td>
    <td id="course"><?=$row["cName"]?></td>
      <td id="semester#">1</td>
      </tr>
<?php }?>
  </tbody>
</table>


