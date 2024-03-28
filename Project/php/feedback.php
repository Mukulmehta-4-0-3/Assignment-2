<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/feedback.css">
    <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>

<body>
        <?php 
            require_once "./header.php";
        ?>
        <div class="container">
            <!-- Main Page -->
            <div>
                <div class="title">Feedback form</div>
                <br>
                    <?php
                        // Include config file
                        require_once "../config/connection.php";
                        $results = mysqli_query($connection, "SELECT * FROM queries"); ?>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th colspan="2">Action</th>
                                     </tr>
                                 </thead>

                              <?php while ($row = mysqli_fetch_array($results)) { ?>
                                  <tr>
                                          <td><?php echo $row['query_id']; ?></td>
                                          <td><?php echo $row['name']; ?></td>
                                          <td><?php echo $row['email']; ?></td>
                                          <td><?php echo $row['message']; ?></td>
                                          <td>
                                                <a href="contact.php?edit=<?php echo $row['query_id']; ?>" class="edit_btn" >Edit</a>
                                          </td>
                                          <td>
                                                <a href="delete.php?del=<?php echo $row['query_id']; ?>" class="del_btn">Delete</a>
                                          </td>
                                  </tr> 
                                <?php } ?>
                            </table>   
                        </div>
                     <?php
                       // Close connection
                       mysqli_close($connection);
                    ?>
            </div>
        </div>

</body>

</html>