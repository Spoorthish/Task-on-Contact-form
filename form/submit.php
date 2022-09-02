<?php
#echo "this is php file";
echo "</br>" ;

#php form variables

$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Description=$_POST["Description"];
# database connection validating
$sql = new mysqli("localhost","i95dev","i95dev","test");

if($sql->connect_error=="true")
{
    echo "Database connection failed";
}
else {
   //echo " Database connection established"; echo "</br>" ;

    $tc = "create table practice(

    Name varchar(255) not null,
    Email varchar(255) not null,
    Description varchar(255) not null)"  ;

    if($sql -> query($tc))
    {
       echo "Table is created in Database ";
    }
    else {
       # echo " Table is not created in the Database ";
        echo "</br>" ;
        $tv = 'insert into practice (Name,Email,Description) values ("'.$Name.'" , "'.$Email.'" , "'.$Description.'")';
    if($sql->query($tv)){
        echo "Data submitted successfully";
    }
    else echo"Data not submitted";
    }
}
exit();
?>