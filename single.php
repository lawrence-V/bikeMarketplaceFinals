<link rel="stylesheet" href="./css/single.css">
<?php
require_once 'functions.php';
include('header.php');


$row = update_get();

?>


div.out
<div class="container">

    <div class="my-form">
      <img height="300" width="600"  src="<?php echo  ($row['filename']) ?>" alt="">
      <div class="title">
           <h2 class="pt-5">Title: <?php echo $row['title'] ?></h2>
      </div>
      <div class="title">
           <h2 class="pt-5">Price: <?php echo $row['price'] ?></h2>
      </div>
       <div class="content">
            <p> <b>about: <?php
            echo  htmlspecialchars_decode($row['content'])
            ?>
            </b>
        </p>
       </div>
       
    </div>
</div>