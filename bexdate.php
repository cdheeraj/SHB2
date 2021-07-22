<?php
session_start();
$from=$_SESSION['ufrom'];
$to=$_SESSION['uto'];
// Include the database config file 
 include 'dbconnect.php';
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "book_REGISTRATION_REPORT.xls"; 
 
// Column names 
$fields = array('SR.N.','category', 'name', 'language', 'author', 'price', 'upload date'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Get records from the database 
echo $from;

$a="select category, Name, lang, author, price, upld_on  from book WHERE upld_on BETWEEN '$from' AND '$to'"; 
$query=$link->query($a); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    $i=0; 
    while($row = $query->fetch_assoc()){ $i++; 
        $rowData = array($i, $row['category'], $row['Name'], $row['lang'], $row['author'], $row['price'], $row['upld_on']); 
        array_walk($rowData, 'filterData'); 
        $excelData .= implode("\t", array_values($rowData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
     
} 
 
// Headers for download 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Content-Type: application/vnd.ms-excel"); 
 
// Render excel data 
echo $excelData; 
 
exit;/*
echo "<script>window.location='bdate.php?view=yes';</script>";*/
?>
