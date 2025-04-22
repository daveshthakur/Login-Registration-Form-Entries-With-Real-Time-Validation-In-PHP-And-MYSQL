<?php 
 
$servername = "localhost";
$username = "u809244820_astronomyreg";
$password = "Web9Yn+b3[]*x";
$dbname = "u809244820_astronomyreg";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
 
echo "connected";
 
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
 
// Include Spout library 
require_once 'here is your path of spout library/spout-3.3.0/src/Spout/
                                             Autoloader/autoload.php';
 
// check file name is not empty
if (!empty($_FILES['file']['name'])) {
      
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["file"]["name"]);
     
    // check file has extension xlsx, xls and also check 
    // file is not empty
   if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
           && $_FILES['file']['size'] > 0 ) {
         
        // Temporary file name
        $inputFileName = $_FILES['file']['tmp_name']; 
    
        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);
 
        // Open file
        $reader->open($inputFileName);
        $count = 1;
 
        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {
             
            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {
 
                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 
 
                    // Data of excel sheet
                    $data['Unique ID
'] = $row[0];
                    $data['School code
'] = $row[1];
                    $data['School name
'] = $row[2];
                     
                    //Here, You can insert data into database. 
                    print_r(data);
                     
                }
                $count++;
            }
        }
 
        // Close excel file
        $reader->close();
 
    } else {
 
        echo "Please Select Valid Excel File";
    }
 
} else {
 
    echo "Please Select Excel File";
     
}
?>