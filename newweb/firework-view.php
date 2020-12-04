<?php
// people view page
include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
} else {
    header('Location:fireworks.php');
}
$sql = 'SELECT * FROM Fireworks WHERE FireworkID = '.$id.'';

//connect to the database

$iConn = 
@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { // show the records

while($row = mysqli_fetch_assoc($result)) {
    $Name = stripslashes($row['Name']);
    $Origin = stripslashes($row['Origin']);
    $Description = stripslashes($row['Description']);
    $Feedback = '';
   }

} else {
    $Feedback = 'Sorry,';
}

include('includes/header2.php');  ?>

<h2 class="main">Welcome to <?php echo $Name; ?> Fireworks page</h2>
<main class="view">

<?php 
if($Feedback == '') {
    echo '<ul class="feedback">';
    echo '<li><b>Name: </b>'.$Name.' </li>';
     echo '<li><b>Origin: </b>'.$Origin.' </li>';
      echo '</ul>';
    
     echo '<p><b>Discription</b>: '.$Description.'</p>';
    echo '<br>';
    
    echo '<p><a href="fireworks.php">Go back to the people page!</a></p>';
} else {
    echo $Feedback;
    
}// ends else    
    ?>
</main>


<aside class="view2">
<?php
  if($Feedback == '') {
    echo '<img src="upload/fireworks'.$id.'.jpg" alt="'.$FirstName.'">';  
  } else {
      echo $Feedback;
  }
    
    //release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
      
    ?>


</aside>

<?php 
include('includes/footer2.php');