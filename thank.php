<?php

// require __DIR__ . '/vendor/autoload.php';

// if(isset($_POST['phone'])) {

//   try {

// // Создание клиента
// $subdomain = 'ramswork1';            // Поддомен в амо срм
// $login     = 'ramsadmin@opengroup.kz';            // Логин в амо срм
// $apikey    = 'c222a4ebaa63b6447e1eab677b72c414dfbd7f82';            // api ключ


// $amo = new \AmoCRM\Client($subdomain, $login, $apikey);

// // Вывести полученые из амо данные
// // echo '<pre>';
// // print_r($amo->account->apiCurrent());
// // echo '</pre>';

// // создаем лида
// $lead = $amo->lead;
// $lead['name'] = $_POST['product_name'];
// $lead['responsible_user_id'] = 5835859; // ID ответсвенного 
// $lead['pipeline_id'] = 1686448; // ID воронки

// // $lead->addCustomField(305117, [ // ID  поля в которое будт приходить заявки
// //     [$_POST['city']], // сюда вписать значение из атрибута "name" пример: <input name="phone">
// // ]);

// $lead->addCustomField(310831, [
//   [$_POST['utm_source']],
// ]);

// $lead->addCustomField(310837, [
//   [$_POST['utm_medium']],
// ]);

// $lead->addCustomField(310839, [
//   [$_POST['utm_campaign']],
// ]);

// $lead->addCustomField(310841, [
//   [$_POST['utm_content']],
// ]);

// $lead->addCustomField(310843, [
//   [$_POST['utm_term']],
// ]);

// $lead->addCustomField(311489, [
//   [$_POST['site']],
// ]);

// $lead->addCustomField(311523, [
//   [$_POST['form_subject']],
// ]);

// $lead->addCustomField(336527, [
//   [$_POST['date']],
// ]);

// $lead->addCustomField(360855, [
//   [$_POST['fio']],
// ]);

// $id = $lead->apiAdd();

// // Получение экземпляра модели для работы с контактами
// $contact = $amo->contact;

// // Заполнение полей модели
// $contact['name'] = isset($_POST['name']) ? $_POST['name'] : 'Не указано';
// $contact['linked_leads_id'] = [(int)$id];

// $contact->addCustomField(10279, [
//   [$_POST['phone'], 'MOB'],
// ]);

// $contact->addCustomField(10281, [
//   [$_POST['email'], 'PRIV'],
// ]);

// // Добавление нового контакта и получение его ID
// $id = $contact->apiAdd();

// } catch (\AmoCRM\Exception $e) {
//  printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
// }

// }
if(isset($_POST['phone'])){
  $url = "https://ramspromo.kz/";
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $zk = $_POST['zk'];
  $note = $_POST['note'];

  $utm_source = $_POST['utm_source'];
  $utm_medium = $_POST['utm_medium'];
  $utm_campaign = $_POST['utm_campaign'];
  $utm_term = $_POST['utm_term'];
  $utm_content = $_POST['utm_content'];

  $form_data = [
      // "url" => $url,
      "name" => $name,
      "phone" => $phone,
      "email" => $email,
      "zk" => $zk,
      "note" => $note,

      "lead_fields" => [
          '311489' => $url,
          '310831' => $utm_source,
          '310837' => $utm_medium,
          '310839' => $utm_campaign,
          '310843' => $utm_term,
          '310841' => $utm_content
          ]
      
      ];

  // print_r($form_data['lead_fields'][0]);

  $str = http_build_query($form_data);
  $curl = curl_init();
  
  curl_setopt($curl, CURLOPT_URL, 'http://amoconnect.ru/amo-rams/api/slug/ramspromo-kz');
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
	<!-- METRIC -->
	  <!-- Global site tag (gtag.js) - Google Ads: 745379149 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-745379149"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-745379149');
</script>
<!-- Event snippet for продажа conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-745379149/GO5zCNKZxKsBEM2qtuMC'});
</script>
<!-- Global site tag (gtag.js) - Google Ads: 745379149 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-745379149"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-745379149');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 745379149 -->
<!-- Event snippet for продажа conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-745379149/GO5zCNKZxKsBEM2qtuMC'});
</script>
<!-- Event snippet for продажа conversion page -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138870793-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138870793-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- METRIC END -->
	<div class="thank-site">
		<div class="thank-site-1">спасибо!</div>
		<div class="thank-site-2">ваша заявка отправлена</div>
		<div class="thank-site-3"><svg width="61" height="45" viewBox="0 0 61 45" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M59.8981 6.21192L54.5459 1.06046C53.812 0.353575 52.9195 0 51.8704 0C50.8203 0 49.9278 0.353575 49.1939 1.06046L23.3768 25.947L11.8064 14.7726C11.0717 14.0654 10.1797 13.7122 9.13057 13.7122C8.08076 13.7122 7.18878 14.0654 6.45408 14.7726L1.10192 19.9241C0.367213 20.6312 0 21.49 0 22.5003C0 23.5098 0.367213 24.3694 1.10192 25.0763L20.7007 43.9394C21.435 44.6468 22.3272 45 23.3768 45C24.4259 45 25.3181 44.6459 26.0528 43.9394L59.8981 11.3638C60.6321 10.6566 61 9.79795 61 8.78764C61.0006 7.77786 60.6321 6.91907 59.8981 6.21192Z" fill="#35CE58"/>
		</svg>
	</div>
	<div class="thank-site-4">Пока наш менеджер связывается с Вами, Вы можете посмотреть другие наши проекты или скачать презентацию.</div>
	<div class="thank-site-5"><a href="file/rams.pdf" download><button>скачать презентацию</button></a></div>
	<div class="thank-site-6"><a href="index.php"><button>главная</button></a></div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>