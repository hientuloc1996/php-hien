<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
  Nhập số thứ nhất:<input type="text" name="sothunhat"><br> <br>
    Nhập số thứ 2: <input type="text" name="sothuhai"><br>
    <input type="submit" name="gui">
    </form>
<?php
// function kiemtrarong($a,$b){
//     if(!empty($a)&&!empty($b)){
//         return true;
//     }else{
//         return false;
//     }
// }
// function kiemtraso($c,$d){
//     if(is_numeric($c)&&is_numeric($d)){
//         return true;
//     }else{
//         return false;
//     }
// }
// function tong($e,$g){
//     return $e+$g;
// }
// if(isset($_POST["gui"])){ 
//         $x=$_POST['sothunhat'];
//         $y=$_POST['sothuhai'];
//         $t= tong($x,$y);
//         echo($t);
    // if(kiemtrarong($x,$y)&&kiemtraso($x,$y)){
       
    //     $t= tong($x,$y);
    // echo("<br><br>Tổng của hai số vừa nhập là".$t);
    // }
    // else{
    //     echo("Giá trị nhập vào phải là số và không được để trống!!");
    // }
//};


//SỬ DỤNG CÁC LỆNH ĐIỀU KIỆN !!
// $a = 0; 
// $b = 0;
// echo("giải phương trình bậc nhất!!:".$a."x+ $b =0") ;
// echo("<br>");
// if($a==0){
//     if($b==0){
//         echo("phương trình có vô số nghiệm!");
//     }else{
//         echo("phương trình vô nghiệm!");
//     }
// }else{
//     echo("phương trình có một nghiệm duy nhất");
//     $x=-$b/$a;
// }
// for($i=0; $i<=10; $i++){
//     echo("<br> đây là vòng lặp for!!");
// };
// $a=0;
// while($a<10){
//     $a++;
//     echo("<br> đây là vòng lặp while!!");
// };
// $b=0;
// do{
//     $b++;
//    echo("<br> đây là vòng lặp do while!!"); 
// }while($b<10);


//MẢNG VÀ FOREACH!!
// //mảng tuần tự:
// $a= array("An","Bảo","Tuấn","Nguyên");
// echo("<br>Họ tên thí sinh:").$a[2];
// $a[]="Mai";
// foreach($a as $name){
//     echo("<br> Họ tên thí sinh:".$name);
// }
////mảng không tuần tự:!!
$mang = array(
    ["id"=>1,
    "name"=>"hiển",
    "age"=>"24",
    "email"=>"hientuloc1996@gmail.com"],
    ["id"=>2,
    "name"=>"hiển2",
    "age"=>"242",
    "email"=>"hientuloc1996@gmail.com2"],
);
echo("<br>" .$mang[1]["id"]);
// $mang['Quê quán']="Đăk Lăk";
// foreach($mang as $tukhoa=>$giatri){
// echo("<br>" .$tukhoa .":" .$giatri);
// };

?>

</body>
</html>