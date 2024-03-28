
<?php
require_once "../config/connection.php";
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($connection, "DELETE FROM queries WHERE query_id=$id");
    $_SESSION['message'] = "Record deleted!"; 
    header('location: index.php');
}

mysqli_close($connection);

?>