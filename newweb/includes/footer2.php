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
        <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Ffirework-view.php"><img class="html" src="images/html.png" alt="html"></a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Ffirework-view.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><img class="html" src="images/css.jpg" alt="css"></a></li>
     </ul>
     
    </footer>   

</body>
</html>