<?php

if(isset($_POST['phone'])){
    $url = $_POST['url'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];



    $utm_source = "SMM";
    $utm_medium = "Direct";
    $utm_campaign = $_POST['utm_campaign'];
    $utm_term = $_POST['utm_term'];
    $utm_content = $_POST['utm_content'];

    $form_data = [
        // "url" => $url,
        "name" => $name,
        "phone" => $phone,
        "email" => $email,

        "lead_fields" => [
            '311489' => $url,
            '310831' => $utm_source,
            '310837' => $utm_medium,
            '310839' => $utm_campaign,
            '310843' => $utm_term,
            '310841' => $utm_content
        ]

    ];



    $str = http_build_query($form_data);
    $curl = curl_init();
//    echo "<pre>";
//    print_r($form_data);
    curl_setopt($curl, CURLOPT_URL, 'http://amoconnect.ru/amo-rams/api/slug/instagram-smm');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $str);
    $result = curl_exec($curl);
    curl_close($curl);

}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="fonts/Montserrat/stylesheet.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!-- NAME DOCUMENT -->
    <title>RAMS Казахстан - Строительная компания | RAMS Qazaqstan</title>
</head>
<body>

<div class="thank-site">
    <div class="thank-site-1">спасибо!</div>
    <div class="thank-site-2">ваша заявка отправлена</div>
    <div class="thank-site-6"><a href="form.php"><button>назад</button></a></div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>