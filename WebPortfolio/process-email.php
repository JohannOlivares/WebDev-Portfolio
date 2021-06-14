<?php
	//if submit button was clicked
    if( isset($_POST['submit']) ) {
 
        //Get Form input
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg =  $_POST['msg'];

        //Validatae input
        $msg = wordwrap($msg,70);

        //Setup Email
        $to = "johannolivares102@gmail.com";
        $headers = 'From: ' . $email;

        mail($to, $subject, $msg, $headers);

        
    
?>
        <script>
            window.alert("Message sent!");
        </script>

<?php
    }
?>
