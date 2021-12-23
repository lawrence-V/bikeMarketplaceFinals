<link rel="stylesheet" href="./css/style.css">
<?php require 'connection.php';



function get_all_data()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM posts");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
          
            <article class="bike_card">
            <img src="' . ($row['filename']) . '" alt="" class="bike_img" />
                <i class="bike_icon"></i>
                <h3 class="bike_price">  ₱: ' . htmlspecialchars_decode($row['price']) . '</h3>
                <h3 class="bike_price">Title: ' . htmlspecialchars_decode($row['title']) . '</h3>
                <p class="card-text">
                   Read: ' . htmlspecialchars_decode(substr($row['content'], 0, 1000)) . '...
                </p>
                <div id="buttonContainer">
                <div id="allButton" class="flex">
                    <button type="button" id="buttonedit" ><a href="update.php?id=' . $row['id'] . '">edit Me!</a></button>
                </div> 
                <div id="allButton" >
                <button type="button" id="buttonDel" ><a href="delete.php?id=' . $row['id'] . '">delete Me!</a></button>
                </div>
                <div id="allButton" class="flex">
                <button type="button"  id="buttonView"><a href="single.php?id=' . $row['id'] . '">View Me!</a></button>
                </div>
             
                </div>
               
                
                
            </article>
     
        

         ';
        }
    } else {
        "<h3> databese is not working</h3>";
    }
}

// update.php - update 
function update_get()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        global $conn;
        $id = $_GET['id'];
        $get_id = mysqli_query($conn, "SELECT * FROM posts WHERE id ='$id'");
        if (mysqli_num_rows($get_id) === 1) {
            $row = mysqli_fetch_assoc($get_id);
            return ($row);
            
        }
    }
}

function get_ids() {
    global $conn;
    $id = $_GET['id'];
    $get_id = mysqli_query($conn, "SELECT * FROM posts WHERE id ='$id'");
    return $get_id;
}

function connect()
{
    $servername = 'localhost:1433';
    $username = 'root';
    $password = '12345';
    $db_name = 'cms';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name);

    // Ckeck connection

    if (!$conn) {
        die("Could not connect to" . mysqli_connect_error());
    }
}




// login 


// INsert data ---- create 
if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['price']) && isset($_POST['upload'])) {

    // check title and content empty or not
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['price'])) {

        // Escape special characters.
        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['title']));
        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['content']));
        $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['price']));

        // path in store image
        $file = $_FILES['image']['name'];



        // $dst = "./images/".$file;


        // Check if title already exists
        $check_content = mysqli_query($conn, "SELECT 'title' FROM posts WHERE content = '$title'");
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
        if (mysqli_num_rows($check_content) > 0) {
            echo "<h3>This title already exists - please try a different title name</h3>";
        } else {


            // Insert data into database
            $insert_query = mysqli_query($conn, "INSERT INTO posts (title,content,filename,price) VALUES('$title','$content','$file','$price')");



            //Now check if data has been inserted
            if ($insert_query) {

                echo "<script>alert('Data inserted');window.location.href = 'index.php';</script>";
                exit;
            } else {
                echo "<h3>Data was not inserted!</h3>";
            }
        }
    } else {
        echo "<h4>Please fill all fields</h4>";
    }
}

// udpate
if (isset($_POST['update_title']) && isset($_POST['update_content']) && isset($_POST['update_price']) && isset($_POST['upload'])) {

    if (!empty($_POST['update_title']) && !empty($_POST['update_content']) && !empty($_POST['update_price']) && !empty($_POST['upload'])) {

        // update in database

        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_title']));
        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_content']));
        $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_price']));

        $file = $_FILES['update_image']['name'];



        $id = $_GET['id'];

        $update_query = mysqli_query($conn, "UPDATE posts SET title='$title',content='$content',filename='$file',price='$price' WHERE id='$id'");

        // check if okey
        if ($update_query) {
            echo "<script>alert('Post Updated');window.location.href = 'index.php';</script>";
            exit;
        } else {
            echo  "<h3>Sorry, something went wrong</h3>";
        }
    } else {
        echo " <h4>Please fill all the fields</h4>";
    }
}

// delete function
function delete()
{
    global $conn;
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $userid = $_GET['id'];
        $delete_user = mysqli_query($conn, "DELETE FROM posts WHERE id = '$userid'");

        if ($delete_user) {
            echo "<script>alert('Data Deleted');window.location.href = 'index.php';</script>";
            exit;
        } else {
            echo "someting failed";
        }
    }
}










?>