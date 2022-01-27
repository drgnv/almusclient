<?php
error_reporting(E_ERROR);
session_start();
include_once './model/Basic.php';
$Basic = new Basic();
    if(isset($_POST['image'])){
        
        $data['street'] = "Бърза помощ МБАЛ - ЛОМ";
$lat2 = 0;
$lng2 = 0;
$data['lat'] = 0;
$data['lng'] = 0;
$data['city'] = 765;
$data['user_id'] = 31;
           $img = $_POST['image'];
    $folderPath = "./uploadimgbolnica/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
   $data['img'] = $fileName;
   
    $Basic->setNewOrder($data);
    }

 $orders = $Basic->getBolnicaOrders();
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture webcam image with php and jquery - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
        td{
            padding:10px;
        }
    </style>
</head>
<body>
  
<div class="container">
    <h3>Бърза помощ - МБАЛ Лом</h3>
    <form method="POST" action="./bolnica.php">
        <div class="row">
            <div class="col-md-6">
                <div style="display:none" id="my_camera"></div>
                <br/>
               
                <input type="hidden" name="image" class="image-tag">
                
            </div>
            <div style="display:none"  class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <input style="display:none" type="text" name="street" value="Бърза помощ МБАЛ - ЛОМ" >
                <button class="btn btn-success" onClick="take_snapshot()">Поръчай такси</button>
            </div>
        </div>
    </form><br>
    <table border="1">
    <?php
    foreach($orders as $order){
       echo "<tr>"; 
       echo "<td>"; 
       if($order['status'] == 1){
           echo "Очаква шофьор";
       }
       if($order['status'] == 2){
           echo "Взета! шофьор: ". $order['driver_names'];
       }
       if($order['status'] == 3){
           echo "Приключена";
       }
       echo "</td>";
       echo "<td>"; 
       echo str_replace('-',':', $order['time'])."ч.";
       echo "</td>"; 
       
       echo "<td>"; 
       if($order['status'] == 3){
           echo ":)";
       }else{
           echo "<img src=\"https://almus.semicolondi.com/uploadimgbolnica/".$order['img']."\" width=\"50px\" height=\"50px\">";
       
       }
       
       echo "</td>";
       
       echo "</tr>"; 
    }
    ?>
    </table>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>
</html>