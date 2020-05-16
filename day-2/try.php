<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  td,
  th {
    border: 1px solid black;
  }
  </style>
</head>
<body>
    <?php
        $user = [
            [
                "id"=>1,
                "name"=>"Nguyễn Đình Hiển",
                "email"=>"hiientuloc1996@gmail.com",
                "address"=>"Đak Lak",
            ],
            [
                "id"=>"2",
                "name"=>"Nguyễn Thiên Chí",
                "email"=>"chituloc1996@gmail.com",
                "address"=>"Đak Lak",
            ],
            [
                "id"=>"3",
                "name"=>"Lê Trường Hải",
                "email"=>"haituloc1996@gmail.com",
                "address"=>"Quảng Nam",
            ],
        ]
    ?>

    <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </thead>
            <tbody>
            <?php
                    for($i=0;$i<count($user);$i++){
                ?>    
                        <tr>
                            <td><?php echo($user[$i]['id']); ?></td>
                            <td><?php echo($user[$i]['name']); ?></td>
                            <td><?php echo($user[$i]['email']); ?></td>
                            <td><?php echo($user[$i]['address']); ?></td>
                        </tr>    
                <?php    }?>
            
            </tbody>
    </table>

    <?php
        foreach($user as $a=>$b){
            foreach($b as $c=>$d){
                echo "<br>".$c .":".$d;
            }
        }
    ?>
</body>
</html>