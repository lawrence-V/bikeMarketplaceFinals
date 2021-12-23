<link rel="stylesheet" href="./css/insert.css">
<?php
require_once 'functions.php';
include('header.php');

?>



<h2>Insert Data</h2>

<div class="form-box">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            <small> Make Sure your title is unique</small>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
            <small> Put a price</small>
        </div>
        <div class="form-group">
            <label>Select Image File:</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Content" rows="4" cols="50"></textarea>
        </div>
            <button type="submit" name="upload" value="UPLOAD" class="buttonDiv" id="buttomSubmit">Submit</button>
       

    </form>
</div>