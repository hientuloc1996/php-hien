<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "aptech_php_22_4";
    $sql = "SELECT * FROM aptech_php_22_4.users";
    $connect = new mysqli($serverName, $userName, $password, $databaseName);
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://namcoi.com/du-an/aptech-php-laravel-crud-user/public/./favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User CRUD Laravel Demo</title>
    <link rel="stylesheet" href="https://namcoi.com/du-an/aptech-php-laravel-crud-user/public/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://namcoi.com/du-an/aptech-php-laravel-crud-user/public/css/styles.css">
<body>
    <div class="container">
        <div class="row d-flex justify-content-center d-flex align-items-center">
            <div class="col-4">
                <button class="bg-primary text-white">HOME</button>
            </div>
            <div class="col-8">
                <h1>USER CRUD LARAVEL</h1>
            </div>           
        </div> 
        <hr class="border border-primary">
        <div class="row">
            <h5 class="bg-success text-white rounded-pill">index page</h5>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php
                    $result = mysqli_query($connect, $sql);
                    for($i=0;$i<mysqli_num_rows($result);$i++){
                      $hien = mysqli_fetch_assoc($result)?>
                       
                        <td><?php echo $hien["id"]?></th>
                        <td><?php echo $hien["email"]?></td>
                        <td><?php echo $hien["password"]?></td>
                        <td class="d-flex justify-content-center">
                            <form action="show">
                                <button class="bg-success">show</button>
                            </form>
                            <form action="edit">
                                <button class="bg-warning">Edit</button>
                            </form>
                            <form action="delete">
                                <button class="bg-danger">Delete</button>
                            </form>
                            
                        </td>
                       
                    </tr><?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-6"> 
                <h5>USER CRUD LARAVEL</h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button class="bg-primary text-white">create new user</button>
            </div>
        </div>
    </div>
   
</body>
</html>