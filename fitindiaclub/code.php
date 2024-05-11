
<?php  
    // Check if the form is submitted 
    if ( isset( $_POST['submit'] ) ) { // retrieve the form data by using the element's name attributes value as key 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pincode = $_POST['pincode']; 
        
        $curl = curl_init();
    
        curl_setopt($curl, CURLOPT_URL, 'https://www.privyr.com/api/v1/incoming-leads/0vZfjMQw/HQBFKSA9#generic-webhook');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        
        $data = array(
          'name' => $name,
          'email' => $email,
          'phone' => $phone,
          'pincode' => $pincode
        );
        
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
        // $response = curl_exec($curl);
        // curl_close($curl);
        
        // echo $response;
        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
        $response = curl_exec($curl);
        
        // Check if cURL request was successful and response is as expected
        if ($response !== false) {
            // Redirect to thank you page if cURL request was successful
            header("Location: https://fitindiaclub.com/best-online-yoga-trainer-in-delhi/thanks.html");
            exit();
        } else {
            // Handle the case if cURL request fails
            echo "Error occurred. Please try again.";
        }
        
        curl_close($curl);
        
        
    }
?> 
