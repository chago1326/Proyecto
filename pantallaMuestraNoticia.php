<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estiloRss.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	

</head>
<?php

require('functions.php');
$conn = getConnection();


$catego='4'; 
$usuario = '208130718';

$url = "";
if(isset($_POST['submit'])){
  if($_POST['feedurl'] != ''){
    $url = $_POST['feedurl'];
  }
}

$invalidurl = false;
if(@simplexml_load_file($url)){
 $feeds = simplexml_load_file($url);
}else{
 $invalidurl = true;
 echo "<h2>Invalid RSS feed URL.</h2>";
}


$i=0;
if(!empty($feeds)){

 $site = $feeds->channel->title;
 $sitelink = $feeds->channel->link;


 echo "<h2>".$site."</h2>";
 foreach ($feeds->channel->item as $item) {

  $title = $item->title;
  $link = $item->link;
  $description = $item->description;
  $postDate = $item->pubDate;
  $pubDate = date('D, d M Y',strtotime($postDate));

  $sql = "INSERT INTO `noticias`(`titulo`, `descripcion`, `link`, `fecha`, `id_noticia_nueva`, `usuario_id`, `categoria_id`) 
    VALUES ('$title','$description','$link','$pubDate',
    '11','$usuario','$catego')";
    $query=mysqli_query($conn,$sql);



  if($i>=1) break;
 ?>
  <div class="post">
    <div class="post-head">
      <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
      <span><?php echo $pubDate; ?></span>
    </div>
    <div class="post-content">
      <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Read more</a>
    </div>
  </div>

  <?php
   $i++;
  }
}else{
  if(!$invalidurl){
    echo "<h2>No item found</h2>";
  }
}
?>
</div






?>

