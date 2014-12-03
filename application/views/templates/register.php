 <?php
/********************
*File name: register.php
*System Name: morfeo
*Module Name: registration
*Class Name: none
*Dependencies: view			
*Revision: 2014-11-22
*Author: Rodrigo Morteo 
*e-mail Author: rodrigo@uabc.edu.mx
*Copyright Notice: Derechos reservados, UABC 2014
*********************/
?>
<?php
#[TODO]: Form fields do not conform to use case definition (see "Registrar" use case in the document "O-001 Propuesta de Proyecto"
		#echo form_password($data["passwordVerification"]);
		#echo form_button($data["cancelBtn"]);
?>

 <div id="Content">
     <div id='reg'>
      <H1>Welcome to the registration form</H1>
        <?php echo form_open("users/processRegistration"); ?>
                        
                        <div id="containerUsername" class="containerRes">
                        <label for="username">Username:</label>
                        <?php echo form_input($username);?>
			<br/></div>
                        
                        <div id="containerName" class="containerRes">
                        <label for="name">Name:</label>
			<input class="input" type="text" size="20" id="name" name="name"/>
			<br/></div>
                        
                        <div id="containerLastname" class="containerRes">
              		<label for="lastname">Lastname:</label>
                        <input class="input" type="text" size="20" id="lastname" name="lastname"/>
			<br/></div>
                        
                        <div id="containerEmail" class="containerRes">
                        <label for="email">Email:</label>
                        <?php echo form_input($email);?>
                        
			<br/></div>
                        
                        <div id="containerReemail" class="containerRes">
                        <label for="reemail">Re-enter Email:</label>
                        <input class="input" type="email" size="20" id="reemail" name="reemail" placeholder="example@domain.com"/>
			<br/></div>
                        
                        <div id="containerPassword" class="containerRes">
                        <label for="password">Password:</label>
                        <?php echo form_password($password);?>
			<br/></div>
                        
                        <div class="terms">
                        <p id="termsTitle">Terms and Conditions</p>
                        <div id="divisor"></div>
                        <p>sfdfsdfsdfsdafsdf</p>
                        <p>sdfgdfgfdgdsfgdfsgdsf</p>
                        <p>dfgdfgsdfgdsfgdfs</p>
                        <p>sdfgsdgdsg</p>
                        <p>sdfsdf</p>
                        <p>ygdsfgsdfgsd</p>
                        <p>fdhjdjfjsksk</p>
                        <p>jdhuussjs</p>
                        <p>hshshgsgsgshjkakakajsjsjs</p>
                        </div>
                        
                        <input type="checkbox" name="i_agree_check" id="i_agree_check">
                        <label for="i_agree_check" id="label_agree">Agree and I'm over 18</label>
						<?php echo form_submit('register', 'Submit');?>    
            <?php echo form_close(); ?>
    </div>
</div>
