</div> 
<footer>

    
     <ul>
     <li>Copyright &copy; <?php 
         $startDate = 2020;
         $currentDate = date('Y');
         if($startDate == $currentDate) {
             echo $currentDate;
         } else {
             echo ' '.$startDate.' - '.$currentDate.'';
             
         } //end else
         
         
         
         ?></li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Hijiri</a></li>
        <li><a href="<?php echo $htmlcheck ; ?>"><img class="html" src="images/html.png" alt="html"></a></li>
        <li><a href="<?php echo $csscheck ; ?>"><img class="html" src="images/css.jpg" alt="css"></a></li>
     </ul>
     
    </footer>   

</body>
</html>