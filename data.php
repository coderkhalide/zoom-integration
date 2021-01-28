<?php

if(isset($_POST['userEmail'])){
    if( $_POST['userEmail'] == "khalid@gmail.com" ){

        // Variables

        $api_key = "9y06kVbxReWoyOPCS0FZ0w";
        $api_secret = "AGjJtZl9OJIiWpa1OTWaF6uDG6LghrilzYsG";
        $meeting_number = 3062443351;
        $role = 0;
        $userEmail = "mdkhalide3@gmail.com";
        $userName = "Khalid Saifullah - hello guys";
        $passWord = "fnsclub";
        $leaveUrl = "/zoom/leave.html";

        // Generate signature

        function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

            $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
            
            $data = base64_encode($api_key . $meeting_number . $time . $role);
            
            $hash = hash_hmac('sha256', $data, $api_secret, true);
            
            $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
            
            //return signature, url safe base64 encoded
            return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
        }

        $signature = generate_signature ( $api_key, $api_secret, $meeting_number, $role);

        // Create array of data

        $data = array(
            'meetingNumber' => $meeting_number,
            'userName' => $userName,
            'passWord' => $passWord,
            'leaveUrl' => $leaveUrl,
            'role' => $role,
            'userEmail' => $userEmail,
            'signature' => $signature,
            'apiKey' => $api_key
        );

        echo json_encode($data);

    }else{
        return false;
    }
}else{
    return false;
}


?>
