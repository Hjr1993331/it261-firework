<?php



$name = '';
$email = '';
$privacy = '';
$tel = '';
$gender = '';
$fireworks = '';

$nameErr = '';
$emailErr = '';
$privacyErr = '';
$telErr = '';
$tel2Err = '';
$genderErr = '';
$fireworksErr = '';



date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Monday' :
    $fir = 'Monday!';    
    $fire = 'Meeting Day!';
    $pic = 'day1.jpg';
    $alt = 'Day1 process';
    $content = 'Meeting is most important for makeing a good firework! According to the design of the fireworks you envision, the president Saiki and a skilled craftsman will consult with each other to decide the composition, but the results will not be known until the fireworks are actually lit and launched. Knowledge and experience are essential to determine the formulation.'; 
        break;
        

    case 'Tuesday' :
    $fir = 'Tuesday!';     
    $fire = 'Metal Powder';
    $pic = 'day2.jpg';
    $alt = 'Day2 process';
    $content = 'Fireworks are made of thick paper with gunpowder in a spherical ball wrapped in layers. It is the combination of metal powder that affects the color development. There are two types of gunpowder, called "wariyaku", which explodes a ball, and "star", which surrounds the outside of the gunpowder and develops various colors. Even if the same red color is used, the color will differ depending on the composition.'; 
        break;
        

    case 'Wednesday' :
    $fir = 'Wednesday!';     
    $fire = 'Gun Powder';
    $pic = 'day3.jpg';
    $alt = 'Day3 process';
    $content = 'Next, the mixed ingredients are solidified to make gunpowder. Making "stars" that develop various colors is the cornerstone of fireworks. The core is mainly granular clay with a diameter of about 2 mm, and the gunpowder balls are gradually thickened in a rotating pot.'; 
        break;
        

    case 'Thursday' :
    $fir = 'Thursday!';     
    $fire = 'Ball Stuffing';
    $pic = 'day4.jpg';
    $alt = 'Day4 process';
    $content = '"Ball stuffing" that focuses on density, balance, and paper quality. The stars are lined up on the ball skin made by pressing thick paper, and the split medicine is packed in the center. This is called ball stuffing, and it seems that the balance inside the ball is important for launching fireworks with a beautiful round shape. We are particular about arranging the gunpowder evenly, packing the explosives according to the force you want to fly, and the thickness of the Japanese paper sandwiched between them. This is because the way the fireworks open differs depending on how much pressure is applied.';    
        break;
        

    case 'Friday' :
    $fir = 'Friday!';     
    $fire = 'Repeatedly Making';
    $pic = 'day5.jpg';
    $alt = 'Day5 process';
    $content = 'Repeatedly making a small core and putting it in the center of the next size, multiple cores such as triple cores and quadruple cores are created. Making the first ball is a difficult task, but it is a multi-core that repeats it over and over again. It\'s a big job that takes more than a day and a half to pack one ball. Monochromatic fireworks are also beautiful, but it seems that it is unique to the Japanese fireworks festival that you can see the gorgeous fireworks that mix colorful colors. It took so much time to launch it.'; 
        break;

    case 'Saturday' :
    $fir = 'Saturday!';     
    $fire = 'Tamabari';
    $pic = 'day6.jpg';
    $alt = 'Day6 process';
    $content = '"Tamabari" is important for making fireworks open round and wide. The ball that has been filled with gunpowder in this way reaches the final finish. A process called "ball pasting" in which kraft paper is pasted on top of each other. The power and pressure of the explosion is the key to whether the fireworks will open round and wide. It seems that the thickness and sticking condition of kraft paper are important for this ball pasting, which determines the pressure to hold down the ball. Using in-house glue made in consideration of minute pressure differences, the work of pasting and drying is repeated many times. This is also a time-consuming task.'; 
        break;
        

    case 'Sunday' :
    $fir = 'Sunday!'; 
    $fire = 'Beautiful fireworks';
    $pic = 'day7.jpg';
    $alt = 'Day7 process';
    $content = 'This firework is "Seireika", an original and award-winning work of "Saiki Smoke Fireworks Main Store". "The concept is\'carrying happiness". It is a firework that combines three colors: pink, which expresses affection, light blue, which expresses purity, and lemon, which expresses happiness," says Saiki. It seems that a lot of ingenuity is required in the formulation of gunpowder to produce this pale color. Fireworks in Japan are said to be the best in the world, but they are still evolving even in modern times. What kind of fireworks will you see this summer? I feel that the fireworks that you see after knowing the long process feel even more delicious.'; 
        break;        
        
        
        
}




if($_SERVER['REQUEST_METHOD']== 'POST') {

if(empty($_POST['name'])) {
    $nameErr = 'Please fill out your name!';
} else {
    $name = $_POST['name'];
}

if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your Email!';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['privacy'])) {
    $privacyErr = 'Are you a robot? I don\'t think so!';
} else {
    $privacy = $_POST['privacy'];
}
    
 if(empty($_POST['fireworks'])) {
    $fireworksErr = 'If you don\'t know the fireworks, click the gallery page!';
    } else {
        $wines = $_POST['fireworks'];
    }    

if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else {
        $gender = $_POST['gender'];
    } 
    
if($gender == 'male') {
                $male ='checked';
            }elseif($gender == 'female') {
                $female = 'checked';            
            }
        

function ourFireworks() {
        $myReturn = ''; 
       if(!empty($_POST['fireworks'])) {   
       $myReturn =  implode(',', $_POST['fireworks']) ;   
            } return $myReturn;  //end if  
        
    } //end function
    
    if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Please fill out your phone number!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Don\'t forget add hyphen!';
} else{
$tel = $_POST['tel'];
}
}
    
    

    if(isset($_POST['name'],
             $_POST['gender'],
             $_POST['privacy'],
             $_POST['tel'])) {
        
    $to = 'hijiri@hijirimaruo.com';
    $subject = 'Fireworks Organization Confimation Email ' .date('m/d/Y');
    $body = ''.$name.' has filled out your form ' .PHP_EOL.'';
    $body .= 'Email: '.$email.' '.PHP_EOL.''; 
    $body .= 'Gender: '.$gender.' '.PHP_EOL.'';    
    $body .= ''.$name.'\'s phone number: '.$tel.' '.PHP_EOL.'';     
    $body .= ''.$name.'\'s favorite fireworks: '.ourFireworks().'' .PHP_EOL.'';           
        
    $headers = array(
    'From' => 'no-reply@hijirimaruo.com',
    'Reply-to' => ' '.$email.'');    
        
    mail($to, $subject, $body, $headers) ;
        header('Location: thx.php');
    }//end isset
}







define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


//Our gallery php

$firework['Brocade_firework'] = 'broca_A spider like effect in the sky, much like fine lace.';
$firework['Comet_firework'] = 'comet_A single slug of pyrotechnic composition ignited and fired from the ground up, often at angles.';
$firework['Willow_firework'] = 'willo_An aerial effect that looks like a giant gold willow tree in the sky. ';
$firework['Peony_firework'] = 'peony_One of the most common kinds of aerial pyrotechnic effects.';
$firework['Palm_firework'] = 'apalm_Rising comet that bursts into six large trailing stars and can also have small reports (coconuts).';
$firework['Crosette_firework'] = 'cross_Creating a crisscrossing grid-like effect';
$firework['Chrysanthemum_firework'] = 'chrys_A spherical break of colored stars, similar to a peony.';
$firework['Fish_firework'] = 'afish_Large inserts that propel themselves rapidly away from the shell burst.';
$firework['Tourbillion_firework'] = 'tourb_A small, rotating device fired from candles, mines or shells.';
$firework['Strobe_firework'] = 'strob_Colored stars that flash on and off.';








switch(THIS_PAGE) {
  case 'index.php':    
    $title = 'Fireforks Home Page';
    $mainHeadline = 'FireWorks HomePage!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Findex.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;
        
  case 'about.php':    
    $title = 'About Page';
    $mainHeadline = 'About Page!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fabout.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fabout.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;    
  
  case 'daily.php':    
    $title = 'Daily Page';
    $mainHeadline = 'Daily Page!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fdaily.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fdaily.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;
        
   case 'fireworks.php':    
    $title = 'Fireworks Page';
    $mainHeadline = 'Fireworks Page!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Ffireworks.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Ffireworks.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;
        
   case 'contact.php':    
    $title = 'Contact Page';
    $mainHeadline = 'Contact Page!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fcontact.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fcontact.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;
        
   case 'gallery.php':    
    $title = 'Gallery Page';
    $mainHeadline = 'Gallery Page!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fgallery.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fgallery.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break; 
        
    case 'thx.php':    
    $title = 'Thanks!';
    $mainHeadline = 'Thank you!';
    $body = '';
    $htmlcheck = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fthx.php';   
    $csscheck = 'https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Fnewweb%2Fthx.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en'; 
  break;             
        
} //end switch


$photos[0] = 'scenery';
$photos[1] = 'download2';
$photos[2] = 'download3';
$photos[3] = 'download4';
    
   function randImages($photos) {
       $myReturn = '';
    $i = rand(0, count($photos)-1);
    $selectedImages = 'images/'.$photos[$i].'.jpg';
    $myReturn = '<img src="'.$selectedImages.'" alt="My rendom fireworks images">';
       return $myReturn;
   }





$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['fireworks.php'] = 'Fireworks';
$nav['gallery.php'] = 'Gallery';
$nav['contact.php'] = 'Contact';


function makeLinks($nav) {
    $myReturn = '' ;
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myReturn .= '<li><a href=" '.$key.' " class="active"> '.$value.' </a></li>';    
    
}  else {
$myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';      
    
}  //end else
    
} //end foreach    
   
    
    
    
//always remember to return $myReturn
return $myReturn;    
} //end function


// this will be our config file that we will link to the credentials.php
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // We want to see our errors

include('credentials.php');

// Please I rememeber - This is placed at the very bottom of your config file

function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG')  && DEBUG) {
        
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
    
}





?>