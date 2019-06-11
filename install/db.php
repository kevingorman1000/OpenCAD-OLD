
<?php


$sampleConfig = "../oc-config.sample.php";
$configFile = "../oc-config.php";


$dbHost = $_GET['dbHost'];
$dbUser = $_GET['dbUser'];
$dbPassword = $_GET['dbPassword'];
$dbName = $_GET['dbName'];


// Name of the file
$filename = 'data.sql';
// MySQL host
$mysql_host = $dbHost;
// MySQL username
$mysql_username = $dbUser;
// MySQL password
$mysql_password = $dbPassword;
// Database name
$mysql_database = $dbName;

// Connect to MySQL server
$con = @new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);


// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line


// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_errno;
    echo "<br/>Error: " . $con->connect_error;
}


foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        $con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $con->error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    
    
$a = "define('DB_NAME', '";
$a .= $mysql_database;
$a .= "');\n";

$b = "define('DB_USER', '";
$b .= $mysql_username;
$b .= "');\n";

$c = "define('DB_PASSWORD', '";
$c .= $mysql_password;
$c .= "');\n";

$d = "define('DB_HOST', '";
$d .= $mysql_host;
$d .= "');\n";

if(file_exists($configFile)){
    // Edit DB Name Name

    file_put_contents($configFile, implode('',
        array_map(function($data) {
            global $a;
            return stristr($data, "define('DB_NAME', 'DatabaseName');") ? $a : $data;
        }, file($configFile)))
    );

    // Edit DB User

    file_put_contents($configFile, implode('',
        array_map(function($data2) {
            global $b;
            return stristr($data2, "define('DB_USER', 'DatabaseUser');") ? $b : $data2;
        }, file($configFile)))
    );

    // Edit DB Password

    file_put_contents($configFile, implode('',
        array_map(function($data3) {
            global $c;
            return stristr($data3, "define('DB_PASSWORD', 'DatabasePassword');") ? $c : $data3;
        }, file($configFile)))
    );

    // Edit DB Host

    file_put_contents($configFile, implode('',
        array_map(function($data4) {
            global $d;
            return stristr($data4, "define('DB_HOST', 'localhost');") ? $d : $data4;
        }, file($configFile)))
    );

}else{
    if(rename($sampleConfig, $configFile)){
        
    file_put_contents($configFile, implode('',
        array_map(function($data) {
            global $a;
            return stristr($data, "define('DB_NAME', 'DatabaseName');") ? $a : $data;
        }, file($configFile)))
    );

    // Edit DB User

    file_put_contents($configFile, implode('',
        array_map(function($data2) {
            global $b;
            return stristr($data2, "define('DB_USER', 'DatabaseUser');") ? $b : $data2;
        }, file($configFile)))
    );

    // Edit DB Password

    file_put_contents($configFile, implode('',
        array_map(function($data3) {
            global $c;
            return stristr($data3, "define('DB_PASSWORD', 'DatabasePassword');") ? $c : $data3;
        }, file($configFile)))
    );

    // Edit DB Host

    file_put_contents($configFile, implode('',
        array_map(function($data4) {
            global $d;
            return stristr($data4, "define('DB_HOST', 'localhost');") ? $d : $data4;
        }, file($configFile)))
    );
    }else{echo "error renaming. Already exists!";}
}
}
    }


unset($_SESSION["installer"]);
$_SESSION["installer"] == "config";

header("Location:".BASE_URL."/install/index.php");
$con->close();
?> 