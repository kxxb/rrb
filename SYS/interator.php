<html>
    <head>
        <title>Iterator</title>
        <meta http-equiv="content-type"
              content="text/html;charset=utf-8"/>
    </head>
    <body>
        <?php	                                       			
        set_include_path(get_include_path() .
                PATH_SEPARATOR . 'PhpExcel/Classes/');
        include_once 'PHPExcel/IOFactory.php';
        //require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
        $objPHPExcel = PHPExcel_IOFactory::load("01simple.xls");
        $objPHPExcel->setActiveSheetIndex(0);
        $aSheet = $objPHPExcel->getActiveSheet();
        echo '<table cellpadding="0" cellspacing="0">';
            //получим итератор строки и пройдемся по нему циклом
        foreach ($aSheet->getRowIterator() as $row) {
            echo "<tr>\r\n";
            //получим итератор ячеек текущей строки
            $cellIterator = $row->getCellIterator();
            //пройдемся циклом по ячейкам строки
            foreach ($cellIterator as $cell) {
                //и выведем значения
                echo "<td>" . $cell->getCalculatedValue() . "</td>";
            }
            echo "<tr>\r\n";
        }
        echo '</table>';
        ?>
    </body>
</html>
