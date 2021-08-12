<?php require('mycon.php'); ?>
<?php
if(isset($_POST['msg'])){
$qry = "INSERT INTO contactus (`ID` , `cusname`, `cusemail`, `cusphone`, `cusmsg`) VALUES (null,
  '".$_POST['cusname']."',
  '".$_POST['cusemail']."',
  '".$_POST['cusphone']."',
  '".$_POST['cusmsg']."');";
  if($mycon->query($qry)){
    echo "Data Inserted";
  }
  else {
    echo "<h1 style='color:pink;'>Error: " .$qry. "<br>" . $mycon->error . "</h1>";
  }
}
?>