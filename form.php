<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css
          integrity=sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk crossorigin=anonymous>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="container">
    <h2>Форма для модератора</h2>
    <form class="form-horizontal" action=send-for-smm.php method=POST>
        <input type=hidden name=site value=ramspromo.kz-модератор>
        <input type=hidden name=form_subject value="модератор">
        <input type=hidden name=utm_source
               value=<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>/>
        <input type=hidden name=utm_medium
               value=<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>/>
        <input type=hidden name=utm_campaign
               value=<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>/>
        <input type=hidden name=utm_content
               value=<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>/>
        <input type=hidden name=utm_term
               value=<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>/>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">ФИО:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="ФИО" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Телефон:</label>
            <div class="col-sm-10">
                <input class="form-control" id=phone pattern=^\+\d{1}\s\d{3}\s\d{7}$ type=text name=phone
                       class="free-call-content-3 mask-phone" autocomplete=off placeholder=Телефон>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="zk">ЖК:</label>
            <select class="col-sm-10" aria-label="жк:" name="url">
                <option disabled selected value>ЖК:</option>
                <option value="navoi3.kz">НАВОИ 3.0</option>
                <option value="laverde.kz">LA VERDE</option>
                <option value="sakurahome.kz">SAKURA</option>
                <option value="lamiya-rams.kz">LAMIYA</option>
                <option value="forum-residence.kz">FORUM RESIDENCE</option>
                <option value="domnaabaya.kz">ДОМ НА АБАЯ</option>
                <option value="nomad-rams.kz">NOMAD</option>
                <option value="vpark.kz">ВОСТОЧНЫЙ ПАРК</option>
                <option value="ramslux.kz">RAMS LUXURY</option>
                <option value="idf-rams.kz">ILE DE FRANCE</option>
                <option value="ortau.kz">Ортау</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="utm_term">Примечание:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="note" placeholder="Примечание" name="utm_term">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" value="Submit" name="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </form>
</div>



<script src=https://code.jquery.com/jquery-3.5.1.slim.min.js
        integrity=sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj
        crossorigin=anonymous></script>
<script src=https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
        integrity=sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo
        crossorigin=anonymous></script>
<script src=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js
        integrity=sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI
        crossorigin=anonymous></script>
<script src=js/vegas.min.js></script>
<script src="js/jquery.maskedinput.min.js?ver=0.1.10"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzbbFiJR2c0rV5yjzyQoQoHLQQQjFSdw8&callback=initMap"></script>
<script type=text/javascript>$(document).ready(function () {
        Inputmask({
            mask: "+7 V{1}99 9999999",
            definitions: {V: {validator: "[7]"}},
            clearIncomplete: true,
            autoUnmask: true,
            clearIncomplete: false,
            oncomplete: function () {
                if ($("#phone").val().length = 10) {
                    $("#phone").removeAttr("", false);
                    console.log($("#phone").val().length)
                }
            }
        }).mask(phone)
    });

</script>
</body>
</html>