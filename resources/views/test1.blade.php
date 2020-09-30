<?php
    // function callAPI($method, $url, $data){
    //     $curl = curl_init();
    //     switch ($method){
    //     case "POST":
    //         curl_setopt($curl, CURLOPT_POST, 1);
    //         if ($data)
    //             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //         break;
    //     case "PUT":
    //         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    //         if ($data)
    //             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
    //         break;
    //     default:
    //         if ($data)
    //             $url = sprintf("%s?%s", $url, http_build_query($data));
    //     }
    //     // OPTIONS:
    //     curl_setopt($curl, CURLOPT_URL, $url);
    //     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    //     'APIKEY: 8405791ef34d67710469e7fc10fc6e50',
    //     'Content-Type: application/json',
    //     ));
    //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //     // EXECUTE:
    //     $result = curl_exec($curl);
    //     if(!$result){die("Connection Failure");}
    //     curl_close($curl);
    //     return $result;
    // }

    // $data_array = "Inside that cage there was a green teddy bear";
    // $make_call = callAPI('POST', 'https://www.prepostseo.com/apis/checkSentence', json_encode($data_array));
    // $response = json_decode($make_call, true);
    // // $errors   = $response['response']['errors'];
    // // $data     = $response['response']['data'][0];
    // print_r($response);

    // $curl = curl_init();

    // curl_setopt_array($curl, array(
    // CURLOPT_URL => "https://www.prepostseo.com/apis/checkSentence?key=8405791ef34d67710469e7fc10fc6e50&query=Inside that cage there was a green teddy bear",
    // CURLOPT_RETURNTRANSFER => true,
    // CURLOPT_ENCODING => "",
    // CURLOPT_MAXREDIRS => 10,
    // CURLOPT_TIMEOUT => 0,
    // CURLOPT_FOLLOWLOCATION => true,
    // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    // CURLOPT_CUSTOMREQUEST => "POST",
    // ));

    // $response = curl_exec($curl);

    // curl_close($curl);
    // echo $response;
?>