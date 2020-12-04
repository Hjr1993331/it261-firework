<?php 
include('config.php'); 
include('includes/header.php');
?>

<div id="wrapper">
    
    
    <div class="example">
     <?php
        echo randImages($photos);
    ?>
    <h1><?php echo $mainHeadline; ?></h1>
    </div>
    
    <blockquote>
        <b>"</b>Fireworks are a class of low explosive pyrotechnic devices used for aesthetic and entertainment purposes. The most common use of a firework is as part of a fireworks display (also called a fireworks show or pyrotechnics), a display of the effects produced by firework devices.

Fireworks take many forms to produce the four primary effects: noise, light, smoke, and floating materials (confetti for example). They may be designed to burn with colored flames and sparks including red, orange, yellow, green, blue, purple, and silver. Displays are common throughout the world and are the focal point of many cultural and religious celebrations.
Fireworks are generally classified as to where they perform, either as a ground or aerial firework. In the latter case they may provide their own propulsion (skyrocket) or be shot into the air by a mortar (aerial shell).
New Year fireworks
The most common feature of fireworks is a paper or pasteboard tube or casing filled with the combustible material, often pyrotechnic stars. A number of these tubes or cases are often combined so as to make when kindled, a great variety of sparkling shapes, often variously colored. A skyrocket is a common form of firework, although the first skyrockets were used in warfare. The aerial shell, however, is the backbone of today's commercial aerial display, and a smaller version for consumer use is known as the festival ball in the United States. Such rocket technology has also been used for the delivery of mail by rocket and is used as propulsion for most model rockets<b>"</b>
    
    </blockquote>
      
    

<?php 
include('includes/footer.php');
?>