<?php
//people.php
include('config.php');
include('includes/header.php');
?>
<div id="wa">
<main>
    <div class="first">
    <h1><?php echo $mainHeadline; ?></h1>
    <h2 class="inline">For more information</h2>    
    </div>
    <ul class="inline">
    
    <?php
$sql = 'SELECT * FROM Fireworks';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0 ) { 

while($row = mysqli_fetch_assoc($result)) {

    
    echo '<li class="bold"><a href="firework-view.php?id='.$row['FireworkID'].'">'.$row['Name'].'</a></li>';
    

} 

    
    
} else { 
    
    echo 'Nobody home!';
    
    
} 



@mysqli_free_result($result);



@mysqli_close($iConn);
 
  ?>
        </ul>    
</main>

<section class="section">
    <h2>Firework Images</h2>
<img src="images/type.jpg" alt="fireworks!">

</section>


<?php
include('includes/footer.php');
