<html>
    <head>
        <title>Iterator</title>
        <meta http-equiv="content-type"
              content="text/html;charset=utf-8"/>
    </head>
    <body>
        <?php	                                       			
ini_set("max_execution_time","600");
ini_set("memory_limit","512M");
$inputFileType = 'Excel2007';
        
$uploadfile =  basename($_FILES['userfile']['name']);;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "файл с объектами - ". $uploadfile ."<br>";
  
 set_include_path(get_include_path() .
                PATH_SEPARATOR . '../PHPExcel/Classes/');
        include_once 'PHPExcel/IOFactory.php';
   
        //require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
        $objReader   = PHPExcel_IOFactory::createReader($inputFileType);
       // $objPHPExcel = PHPExcel_IOFactory::load($uploadfile);
        $objReader->setReadDataOnly(true);
        $objPHPExcel = $objReader->load($uploadfile);
        
        $objPHPExcel->setActiveSheetIndex(0);
        $aSheet = $objPHPExcel->getActiveSheet();
        echo '<table cellpadding="0" cellspacing="0" border="1">';
//получим итератор строки и пройдемся по нему циклом
        foreach ($aSheet->getRowIterator() as $row) {
            echo "<tr>\r\n";
//получим итератор ячеек текущей строки
            $cellIterator = $row->getCellIterator();
//пройдемся циклом по ячейкам строки
            foreach ($cellIterator as $cell) {
//и выведем значения
                if ($cell->getCalculatedValue() == null) {
                    echo "<td>&nbsp;</td>";
                } else{
                echo "<td>" . $cell->getCalculatedValue() . "</td>";
                }
            }
            echo "<tr>\r\n";
        }
        echo '</table>';




} else {
    echo "Загрузка объектов\n";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<form enctype="multipart/form-data" action="interator.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>


     
    </body>
</html>
