<!-- reviews submission -->
<?php 
	include 'db.php';
	include 'header.php';


	
	
?>

<form style="margin-left: 25% ; margin-right: 25%	; margin-top:32px ; margin-bottom: 64px; " method="POST" action="reviewregister.php">
	<div class="form-group">
    <label for="rTitle">Select Game</label>
    <select class="form-control" id="rTitle" name="rTitle">
     
      <?php  
      $query = "SELECT DISTINCT gTitle FROM gstore";
	  $result = mysqli_query($con , $query);
      if (mysqli_num_rows($result) >0) {
		while ($row = mysqli_fetch_array($result)) {

			?>

		 <option><?php echo $row[0];  ?></option>	

	<?php 
		}
	}
    ?>
    </select>
    </div>
    <div class="form-group">
    	<label for="rDesc"> Write your review</label>
    	<textarea class="form-control" placeholder="Please tell What you think about the game ... "  name="rDesc"> </textarea> 
    </div>
    <input type="submit" name="">
</form>