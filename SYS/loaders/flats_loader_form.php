<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//$uploaddir = "/csv";
//$uploadfile =  $uploaddir.basename($_FILES['userfile']['name']);;
require_once('flats_read_csv.php');
$uploadfile =  basename($_FILES['userfile']['name']);;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo $uploadfile;
    take_flats($uploadfile);
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Загружайте квартиры пачками!\n";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<form enctype="multipart/form-data" action="flats_loader_form.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>