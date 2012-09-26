 <?php
    require_once '../phpExcelReader/Excel/reader.php';
    $excel = new Spreadsheet_Excel_Reader();
    $excel->setOutputEncoding('CP1251');
    $excel->read('rrr.xls');
    $x=1;
    $sep = ",";
    ob_start();
    while($x<=$excel->sheets[0]['numRows']) {
     $y=1;
     $row="";
     while($y<=$excel->sheets[0]['numCols']) {
         $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
         $row.=($row=="")?"\"".$cell."\"":"".$sep."\"".$cell."\"";
         $y++;
     } 
     echo $row."\n"; 
     $x++;
    }
    $fp = fopen("inp3_data.csv",'w');
    fwrite($fp,ob_get_contents());
    fclose($fp);
    ob_end_clean();
?>  