<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



 require_once "sms24x7.php";

$email = "kxxb@yandex.ru";
$password = "sNpuNqR";
//$phone = "79264192912";
$phones = array("79264192912","79175333560");
$dlr_url = "http://example.com/test.php?state=%d&amp;phone=%p";
$dlr_mask = 35;
$message ="модуль с блэк джеками!Бэндер";
////
// Часть 1 - если задача - отправить одно сообщение, можно совместить
// аутентификацию с отправкой сообщения.
////
// Отправляется сообщение, указывается дополнительный параметр - имя
// отправителя (полный список дополнительных параметров метода push_msg
// можно найти в описании API, например, test=1 - режим отладки).
var_dump(
        smsapi_push_msg_nologin($email, $password, $phone, $message, array("sender_name" => "kxxb"))
);
////
// Часть 2 - если задача - отправить несколько сообщений, следует
// аутентифицироваться один раз и после пользоваться Cookie с сессией.
////

$verb = function($ret) {
            return is_null($ret) ? "связи с API" : $ret[0];
        };

// Представляемся системе, получаем id сессии
$ret = smsapi_login($email, $password);
if (is_null($ret) || $ret[0] != 0) {
    die("Невозможно представиться системе: ошибка " . $verb($ret) . "\n");
}
$cookie = $ret[1];

// Отправляем сообщения, используя Cookie для аутентификации.
// В качестве дополнительного параметра указывается шаблон URL для
// оповещения о статусе сообщения и маска - фильтр статусов.
// 35 = 0b100011, значит были запрошены статусы 1,2 и 32. При обновлении
// статуса сообщения в нашей системе, если новый статус - один из
// указанных, будет совершен HTTP запрос с URL, в котором %d заменён на
// статус, а %p - на телефон.
foreach ($phones as $P) {
    
    //$ret = smsapi_push_msg($cookie, $P, "Helo world! =) УЖ", array(
    $ret = smsapi_push_msg($cookie, $P, $message, array(
        "dlr_url" => $dlr_url,
        "dlr_mask" => $dlr_mask
            )
    );
    if (is_null($ret) || $ret[0] != 0) {
        die("Невозможно отправить сообщение: ошибка " . $verb($ret) . "\n");
    }
}

echo "OK\n";
?>
