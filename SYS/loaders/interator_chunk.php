<html>
    <head>
        <title>Iterator</title>
        <meta http-equiv="content-type"
              content="text/html;charset=utf-8"/>
    </head>
    <body>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * http://stackoverflow.com/questions/5560053/phpexcel-allowed-memory-size-of-134217728-bytes-exhausted?rq=1
 * 
 * http://phpexcel.codeplex.com/discussions/242712?ProjectName=phpexcel
 * 
 */

$uploadfile =  basename($_FILES['userfile']['name']);;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "файл с объектами - ". $uploadfile ."<br>";

set_include_path(get_include_path() .
                PATH_SEPARATOR . '../PHPExcel/Classes/');
        include_once 'PHPExcel/IOFactory.php';

$inputFileType = 'Excel2007'; 
$inputFileName = $uploadfile;
ini_set("max_execution_time","600");
$i=0;
/**  Define a Read Filter class implementing PHPExcel_Reader_IReadFilter  */ 
class chunkReadFilter implements PHPExcel_Reader_IReadFilter 
{ 
    private $_startRow = 0; 
    private $_endRow = 0; 
    /**  Set the list of rows that we want to read  */ 
    public function setRows($startRow, $chunkSize) { 
        $this->_startRow    = $startRow; 
        $this->_endRow      = $startRow + $chunkSize; 
    } 
    public function readCell($column, $row, $worksheetName = '') { 
        //  Only read the heading row, and the rows that are configured in $this->_startRow and $this->_endRow 
        if (/*($row == 1) ||*/ ($row >= $this->_startRow && $row < $this->_endRow)) { 
            return true; 
        } 
        return false; 
    } 
} 
/**  Create a new Reader of the type defined in $inputFileType  **/
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
/**  Define how many rows we want to read for each "chunk"  **/ 
$chunkSize = 50; 
/**  Create a new Instance of our Read Filter  **/ 
$chunkFilter = new chunkReadFilter(); 
/**  Tell the Reader that we want to use the Read Filter that we've Instantiated  **/ 
$objReader->setReadFilter($chunkFilter); 
/**  Loop to read our worksheet in "chunk size" blocks  **/ 
/**  $startRow is set to 2 initially because we always read the headings in row #1  **/
for ($startRow = 1; $startRow <=150; $startRow = $startRow + $chunkSize) { 
    $i++;
    /**  Tell the Read Filter, the limits on which rows we want to read this iteration  **/ 
    $chunkFilter->setRows($startRow,$chunkSize); 
    /**  Load only the rows that match our filter from $inputFileName to a PHPExcel Object  **/ 
    $objPHPExcel = $objReader->load($inputFileName); 
    
    //    Do some processing here 
    echo '<br>chunk - '. $i;
    
        $objPHPExcel->setActiveSheetIndex(0);
        $aSheet = $objPHPExcel->getActiveSheet();
        echo '<table cellpadding="0" cellspacing="0" border="1">';
//получим итератор строки и пройдемся по нему циклом
        foreach ($aSheet->getRowIterator() as $row) {
            if ($row->getCellIterator()!=null) {

                echo "<tr>\r\n";
                //получим итератор ячеек текущей строки
                $cellIterator = $row->getCellIterator();
                    //пройдемся циклом по ячейкам строки
                foreach ($cellIterator as $cell) {
                    //и выведем значения

                    if ($cell->getCalculatedValue() != null) {

                     echo "<td>" . $cell->getCalculatedValue() . "</td>";
                    }
                }
                echo "<tr>\r\n";
               }
        } //$aSheet->getRowIterator()
        echo '</table>';
    
    
    
    //    Free up some of the memory 

    $objPHPExcel->disconnectWorksheets(); 
    unset($objPHPExcel);  
   
}



} else {
    echo "Загрузка объектов interator_chunk \n";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<form enctype="multipart/form-data" action="interator_chunk.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>


     
    </body>
</html>
