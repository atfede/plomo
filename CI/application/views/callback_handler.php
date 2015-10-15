<?php

//xx
//https://docs.oneall.com/services/implementation-guide/social-login/
session_start();

//Check if we have received a connection_token
if (!empty($_POST['connection_token'])) {
//  echo "Connection token received: ".$_POST['connection_token'];
//    $_SESSION["user"] = 'https://graph.facebook.com/me?access_token=' . $_POST['connection_token'];
//Get connection_token
    $token = $_POST['connection_token'];

    //Your Site Settings
    $site_subdomain = 'proyectofinal';
    $site_public_key = '6823c942-3bec-44ba-a69d-6acbc86e5629';
    $site_private_key = 'f73581f3-6d95-4f5e-9fe6-8c3f7425e83d';

    //API Access domain
    $site_domain = $site_subdomain . '.api.oneall.com';

    //Connection Resource
    //http://docs.oneall.com/api/resources/connections/read-connection-details/
    $resource_uri = 'https://' . $site_domain . '/connections/' . $token . '.json';

    //Setup connection
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $resource_uri);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_USERPWD, $site_public_key . ":" . $site_private_key);
    curl_setopt($curl, CURLOPT_TIMEOUT, 15);
    curl_setopt($curl, CURLOPT_VERBOSE, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($curl, CURLOPT_FAILONERROR, 0);

    //Send request
    $result_json = curl_exec($curl);

    //Error
    if ($result_json === false) {
        //You may want to implement your custom error handling here
        echo 'Curl error: ' . curl_error($curl) . '<br />';
        echo 'Curl info: ' . curl_getinfo($curl) . '<br />';
        curl_close($curl);
    }
    //Success
    else {
        //Close connection
        curl_close($curl);

        //Decode
        $json = json_decode($result_json);
        //$json = json_decode($result_json, true);
        //Extract data
        $data = $json->response->result->data;

        //echo var_dump($json);

        //xx
        $_SESSION["user"] = $data;
        
        
        $_SESSION["ct"] = $_POST['connection_token'];
    }
//    else {
//        echo "No connection token received";
//    }
}

header('Location: index.php');
































//Get the user_id for a given user_token:
function GetUserIdForUserToken($user_token) {
    // Execute the query: SELECT user_id FROM user_social_link WHERE user_token = <user_token>
    // Return the user_id or null if none found.
}

//Get the user_token for a given user_id:
function GetUserTokenForUserId($user_id) {
    // Execute the query: SELECT user_token FROM user_social_link WHERE user_id = <user_id>
    // Return the user_token or null if none found.
}

//Link a user_token to an existing user account:
function LinkUserTokenToUserId($user_token, $user_id) {
    // Execute the query: INSERT INTO user_social_link SET user_token = <user_token>, user_id = <user_id>
    // Nothing has to be returned
}

//Unlink a user_token from a user account:
function UnlinkUserTokenFromUserId($user_token, $user_id) {
    // Execute the query: DELETE FROM user_social_link WHERE user_token = <user_token> AND user_id = <user_id>
    // Nothing has to be returned
}
