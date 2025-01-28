<?php 
include_once 'data.php';
$page_title = 'Article';
include_once 'header.php';
?>

<?php
// var_dump($_GET);
    $position = $_GET['position'];
    $sport = $articles[$position];
// var_dump($sport);
?>

<h1><?php echo $sport['name'];?><h1>
    <img src="<?php echo $sport['imagePath'];?>" alt=''>
    <ul>
        <li><?php echo $sport['date'];?></li>
        <li><?php echo $sport['createdBy'];?></li>
    </ul>
<p><?php echo $sport['article'];?></p>


<?php
 include_once 'footer.php';
?>