<?php
$sampleConfig = "../oc-config.sample.php";
$configFile = "../oc-config.php";
$commuName = $_GET['commName'];
$baseUrl = $_GET['baseUrl'];

$a = "define('COMMUNITY_NAME', '";
$a .= $commuName;
$a .= "');";
$b = "define('BASE_URL', '//";
$b .= $baseUrl;
$b .= "');";

if(file_exists($configFile)){
    // Edit Community Name
    $data = file($configFile); // reads an array of lines
    function replace_a_line($data) {
    if (stristr($data, "define('COMMUNITY_NAME', 'My Community');")) {
        global $a;
        return $a;
    }
        return $data;
    }
    $data = array_map('replace_a_line',$data);
    file_put_contents($configFile, implode('', $data));
    
    // Edit BASE URL
    $data1 = file($configFile); // reads an array of lines
    function replace_line($data1) {
    if (stristr($data1, "define('BASE_URL', '//example.com');")) {
        global $b;
        return $b;
    }
        return $data1;
    }
    $data1 = array_map('replace_line',$data1);
    file_put_contents($configFile, implode('', $data1));

    header("Location:".BASE_URL."../index.php");

}else{
    if(rename($sampleConfig, $configFile)){
        echo "sucessful";
    }else{echo "error renaming. Already exists!";}
}
header("Location:".BASE_URL."../index.php");

?>