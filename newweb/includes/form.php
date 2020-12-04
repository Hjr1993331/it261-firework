<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php 
     if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <span><?php echo $nameErr; ?></span>
    
    <label>Email</label>
    <input type="email" name="email" value="<?php 
     if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    
        <span><?php echo $emailErr; ?></span>
    
     <label>Phone number</label>
    <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
     if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>">
    
        <span><?php echo $telErr; ?></span>
    
    
    <label>Gender</label>
     <ul>
        
        <li><input type="radio" name="gender" value="female"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>       
                   >Female</li>
         <li><input type="radio" name="gender" value="male"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>       
                   >Male</li>
        
    </ul>   
     <span><?php echo $genderErr; ?></span>
   
    
     <label class="favo">Favorite Fireworks (multiply choices are OK!)</label>
    
    <ul class="identification">
<!--Radio butoons  and checkboxes are very similar    -->
        
        <li><input type="checkbox" name="fireworks[]" value="Brocade firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Brocade firework') echo 'checked="checked"'; ?>       
                   >Brocade firework</li>
        
        <li><input type="checkbox" name="fireworks[]" value="Comet firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Comet firework') echo 'checked="checked"'; ?>       
                   >Comet firework</li>
   
        <li><input type="checkbox" name="fireworks[]" value="Willow firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Willow firework') echo 'checked="checked"'; ?>       
                   >Willow firework</li>
   
        <li><input type="checkbox" name="fireworks[]" value="Peonyfi rework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Peony firework') echo 'checked="checked"'; ?>       
                   >Peony firework</li>
   
        <li><input type="checkbox" name="fireworks[]" value="Palm firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Palm firework') echo 'checked="checked"'; ?>       
                   >Palm firework</li>
        </ul>
        
        <ul class="identification">
        <li><input type="checkbox" name="fireworks[]" value="Crosette firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Crosette firework') echo 'checked="checked"'; ?>       
                   >Crosette firework</li>
            
        <li><input type="checkbox" name="fireworks[]" value="Chrysanthemum firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Chrysanthemum firework') echo 'checked="checked"'; ?>       
                   >Chrysanthemum firework</li>
            
        <li><input type="checkbox" name="fireworks[]" value="Fish firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Fish firework') echo 'checked="checked"'; ?>       
                   >Fish firework</li>
            
        <li><input type="checkbox" name="fireworks[]" value="Tourbillion firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Tourbillion firework') echo 'checked="checked"'; ?>       
                   >Tourbillion firework</li>
            
        <li><input type="checkbox" name="fireworks[]" value="Strobe firework"
            <?php if(isset($_POST['fireworks']) && $_POST['fireworks'] == 'Strobe firework') echo 'checked="checked"'; ?>       
                   >Strobe firework</li>    
    
            
    </ul>
    
    
    <span><?php echo $fireworksErr; ?></span>
    
    
    <label>Privacy Policy</label>
        <input type="radio" name="privacy" value="<?php 
        if(isset($_Post['privacy'])) echo htmlspecialchars($_POST['privacy']) ;?>">
    I'm not a Robot
    
    <span><?php echo $privacyErr; ?></span>
    
    
    <input type="submit" value="Submit">
    <p><a href="">Reset</a></p>
        </fieldset>    
    
    </form>          
            