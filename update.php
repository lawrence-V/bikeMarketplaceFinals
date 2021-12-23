<link rel="stylesheet" href="./css/update.css">
<?php
require_once 'functions.php';
include('header.php');
$row = update_get();
?>

<a href="./index.php">home</a>
 <h2>Update Data</h2>
<div class="update-container">
   
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $row['id'] ?>" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="update_title" id="labelForm">Title</label>
                <input type="text" name="update_title" class="form-control" id="update_title" placeholder="Title" value="<?php echo $row['title']; ?>" required>
                <small >Make sure your title is unique</small>
            </div>

            <div class="form-group">
                <label for="update_price" id="labelForm">Title</label>
                <input type="text" name="update_price" class="form-control" id="update_price" placeholder="Price" value="<?php echo $row['price']; ?>" required>
                <small >Make sure your title is unique</small>
            </div>

            <div class="form-group">
            <label id="labelForm">Select Image File:</label>
            <input type="file" name="update_image" value="<?php echo $row['filename']; ?>" > 
            </div> 

            <div class="form-group">
                <label for="update_content">Content</label>
                <textarea name="update_content" id="update_content" class="form-control" cols="30" rows="10" value="ad" required><?php echo $row['content']; ?></textarea>
            </div>
            <button type="submit" name="upload" value="UPLOAD" class="buttonDiv">Submit</button>
        </form>
</div>


<?php include('footer.php') ?>