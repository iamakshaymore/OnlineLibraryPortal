<!DOCTYPE html>
<html lang="en">
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<BODY>
<div style="text-align:center;">
<h1> Change the availability? <br> Enter Details :</h1>
<form action="./update.php?bid=<?php echo $_GET['bid'];?>" method="post">


<input type="hidden" name="availability" value="<?php echo $availability; ?>"/>


<div>

<p><strong>Availability:</strong> <input type="number" name="availability"><?php echo $availability; ?></p>


<input type="submit" name="submit" value="Submit">


</form>


</div>
</body>
</html>