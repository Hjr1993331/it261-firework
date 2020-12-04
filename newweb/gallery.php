<?php 
include('config.php'); 
include('includes/header.php');
?>
<div id="wa">
<div class="first">
    <h1><?php echo $mainHeadline; ?></h1>
    </div>
<main>

   <table class="fireworks">
    <?php foreach($firework as $fullName => $image) : ?>   
<tr>
    <td>
<img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $fullName ?>">         
    </td>
    <td><?php echo str_replace('_', ' ', $fullName); ?></td>  
    
    <td><?php echo substr($image, 6); ?></td>    
</tr>
    
    
    
    <?php endforeach ; ?>
    </table>
</main>
    
<aside>
    
    
    </aside>    
<?php 
include('includes/footer.php');
?>