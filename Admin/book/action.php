<?php
    session_start();
    require '../../connect_DB.php';
if(isset($_POST['them'])) {
    $id=$_POST['BookID'];
    $name=$_POST['BookName'];
    $price=$_POST['Price'];
    $discountpercent=$_POST['DiscountPercent'];
    $quantity=$_POST['Quantity'];
    $totalsell=0;
    $target_dir = "../../images/books/";
    $target_file   = $target_dir . basename($_FILES["Avatar"]["name"]);
    $avatar = $_FILES["Avatar"]['name'];
    $url=$_POST['Url'];
    $publisher=$_POST['Publisher'];
    $publicbydate=$_POST['PublicByDate'];
    $bookcover=$_POST['BookCover'];
    $pages=$_POST['Pages'];
    $bookdescription=$_POST['BookDescription'];
    $authorID=$_POST['AuthorID'];
    $producerID=$_POST['ProducerID'];
    $createbydate=date("Y/m/d");

    move_uploaded_file($_FILES['Avatar']['tmp_name'], $target_file);
    $a = "INSERT INTO `book` (`BookID`, `BookName`, `Price`, `DiscountPercent`, `Quantity`, `TotalSell`, `Avatar`, `CreateByDate`, `Url`, `Publisher`, `PublicByDate`, `BookCover`, `Pages`, `BookDescription`, `AuthorID`, `ProducerID`) VALUES ('$id', '$name', '$price', '$discountpercent', '$quantity', '$totalsell', '$avatar', '$createbydate', '$url', '$publisher', '$publicbydate', '$bookcover', '$pages', '$bookdescription', '$authorID', '$producerID')";
    $result=mysqli_query($conn, $a);
    header('Location: ./index.php');
    $_SESSION['response']="Successfully Inserted to the database!";
}
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    echo $id;
    $a = "DELETE FROM `book` WHERE `book`.`BookID` = '$id'";
    $result=mysqli_query($conn, $a);
    header('Location: ./index.php');
    $_SESSION['response']="Successfully Deleted to the database!";
}
?>


<!-- INSERT INTO `book` (`BookID`, `BookName`, `Price`, `DiscountPercent`, `Quantity`, `TotalSell`, `Avatar`, `CreateByDate`, `Url`, `Publisher`, `PublicByDate`, `BookCover`, `Pages`, `BookDescription`, `AuthorID`, `ProducerID`) VALUES ('BK-31', 'demo', '123', '10', '100', '0', 'demo.png', '2022-11-08', '', 'demo', '2022-11-17', 'demo', '200', 'demo', 'AU-001', 'PD-001'); -->