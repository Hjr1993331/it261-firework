<?php 
include('config.php'); 
include('includes/header.php');
?>
<div id="wa">
<div class="first">
    <h1><?php echo $mainHeadline; ?></h1>
</div>

<main class="plan">
<h1><?php echo $fire; ?></h1>
<p><?php echo $content;  ?></p>
    
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">    
</main>
    
<aside class="plan2"> 
    <p>Today is <b><?php echo $fir; ?></b></p>        
<ul class="day2">
<li class="day"><a href="daily.php?today=Monday">Monday</a></li> 
<li class="day"><a href="daily.php?today=Tuesday">Tuesday</a></li> 
<li class="day"><a href="daily.php?today=Wednesday">Wedneday</a></li> 
<li class="day"><a href="daily.php?today=Thursday">Thursday</a></li> 
<li class="day"><a href="daily.php?today=Friday">Friday</a></li> 
<li class="day"><a href="daily.php?today=Saturday">Saturday</a></li> 
<li class="day"><a href="daily.php?today=Sunday">Sunday</a></li>     
    
    
    </ul>    
    
</aside>
<?php 
include('includes/footer.php');
?>