<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$fp = fopen('base2.csv','r') or die("can't open file");
print "<table>\n";
while($csv_line = fgetcsv($fp,0,";")) {
    print '<tr>';
    for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
        print '<td>'.$csv_line[$i].'</td>';
    }
    print "</tr>\n";
}
print '</table>\n';
fclose($fp) or die("can't close file");
?>
