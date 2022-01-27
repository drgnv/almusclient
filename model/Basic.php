<?php

include_once 'Host.php';
class Basic extends Host{

    public function logIn($username, $password, $rememberme='1'){
        if(strlen($username) == 10 AND is_numeric($username)){
            $sql = "SELECT * FROM users WHERE user_phone = '".mysqli_real_escape_string($this->connect(),$username)."' && users.user_status = 1";
        }
        
        $_SESSION['user_info'] = $this->sqliexecute($sql);
        $password_verify = password_verify($password, $_SESSION['user_info'][0]['user_password']);
        
      
        if(trim($_SESSION['user_info'][0]['user_phone']) == trim($username) && $password_verify == 1){
            
            return true;
            
        }else{
            return false;
        }

    }
    
    
     public function getDriversLinks(){
        $sql = "SELECT * FROM drivers WHERE 1=1";
        return $this->sqliexecute($sql);
    }
    
    public function getActiveDriversCount($city){
        $sql = "SELECT driver_id FROM drivers WHERE ava=1 AND driver_id != 161 AND driver_id != 115 AND city_id = ".$city;
        return count($this->sqliexecute($sql));
    }
    
    
    public function getUserByMail($mail){
        $sql = "SELECT * FROM users WHERE users.user_mail = '".$mail."'";
        return $this->sqliexecute($sql);
    }
    
    public function dosePhoneExist($phone){
        $sql = "SELECT * FROM users WHERE users.user_phone = '".$phone."'";
        $data= $this->sqliexecute($sql);
        if(is_array($data)){
            return true;
        }else{
            return false;
        }
    }
    
    public function setCode($phone, $code){
        $sql = "UPDATE `users` SET `lostpass` = '".$code."' WHERE `users`.`user_phone` = '".$phone."'";
        $this->sqliexecute($sql);
    }
    
    public function checkSmscode($code,$phone){
        $sql = "SELECT * FROM users WHERE user_phone = '".$phone."'";
        $data = $this->sqliexecute($sql);
        if($data[0]['lostpass'] === $code){
            return true;
        }else{
            return false;
        }
    }


    public function newPassword($phone, $pass){
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `user_password` = '".$password."' WHERE `users`.`user_phone` = '".$phone."'";
        $this->sqliexecute($sql);
    }

    public function checkPassword($user_id, $password){
        $sql = "SELECT * FROM users WHERE user_id = '".mysqli_real_escape_string($this->connect(),$user_id)."' && users.user_status = 1";
        $_SESSION['user_info2'] = $this->sqliexecute($sql);
        $password_verify = password_verify($password, $_SESSION['user_info2'][0]['user_password']);
        if($password_verify == 1){

            return true;

        }else{

            return false;

        }

    }

    public function changePassword($user_id, $password){
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `user_password` = '".mysqli_real_escape_string($this->connect(), $pass)."' WHERE `users`.`user_id` = ".mysqli_real_escape_string($this->connect(), $user_id);
       // echo $sql;
        $this->sqliexecute($sql);
    }

    public function getFavPlacesByUserId($user_id){
        $sql = "SELECT * FROM favorite_places WHERE user_id = '".mysqli_real_escape_string($this->connect(), $user_id)."'";
        return $this->sqliexecute($sql);
    }

    public function setNewOrder($data){
        $date = date('Y-m-d'); //G-i-s
        $time = date('G-i-s');
        $sql = "INSERT INTO `orders` (`img`,`lat`,`lon`,`city_id`,`user_id`, `start_destiantion`, `end_destination`, `driver_Id`, `status`, `date`, `time`, `order_id`, `ordre_note`,`bagaj`) 
        VALUES ('".$data['img']."','".$data['lat']."','".$data['lng']."',".$data['city'].",'".mysqli_real_escape_string($this->connect(), $data['user_id'])."', '".mysqli_real_escape_string($this->connect(), $data['street'])."', '".$data['end_destination']."', 0, '1', '".mysqli_real_escape_string($this->connect(), $date)."', '".mysqli_real_escape_string($this->connect(), $time)."', NULL, '', '".mysqli_real_escape_string($this->connect(), $bagaj)."')";
        $this->sqliexecute($sql);
        $sql = "SELECT max(order_id) FROM orders WHERE user_id = ".mysqli_real_escape_string($this->connect(), $data['user_id']);
        return $this->sqliexecute($sql);
    }

    public function getOrderById($id){
        $sql = "SELECT * FROM orders WHERE order_id = ".mysqli_real_escape_string($this->connect(), $id);
        return $this->sqliexecute($sql);
    }

    public function checkOrderStatus($id){
        $sql = "SELECT * FROM orders WHERE order_id = ".mysqli_real_escape_string($this->connect(), $id);
        $order = $this->sqliexecute($sql);
       // echo $order[0]['driver_Id'];
        if($order[0]['driver_id'] == '0'){
            $data['driver_info'] = false;
        }else{
            $data['driver_info'] = $this->getDriverById($order[0]['driver_Id']);
        }

        if($order[0]['status'] == 1){
            $data['status'] = 1;
        }
        if($order[0]['status'] == 2){
            $data['status'] = 2;
        }
        if($order[0]['status'] == 3){
            $data['status'] = 3;
        }
        if($order[0]['status'] == 4){
            $data['status'] = 4;
        }

        return $data;
    }


    public function getDriverById($id){
        $sql = "SELECT * FROM drivers WHERE driver_Id = ".mysqli_real_escape_string($this->connect(), $id);
        return $this->sqliexecute($sql);
    }

    public function getUserById($id){
        $sql = "SELECT * FROM users LEFT JOIN city ON users.city_id = city.bgid WHERE user_id = ".mysqli_real_escape_string($this->connect(), $id);
        return $this->sqliexecute($sql);
    }

    public function setUserById($data){
        $sql = "UPDATE `users` SET `city_id` = ".$data['city'].", `user_names` = '".mysqli_real_escape_string($this->connect(), $data['names'])."', `user_mail` = '".mysqli_real_escape_string($this->connect(), $data['mail'])."', `user_phone` = '".mysqli_real_escape_string($this->connect(), $data['phone'])."', theme =  ".mysqli_real_escape_string($this->connect(), $data['theme'])." WHERE `users`.`user_id` = ".mysqli_real_escape_string($this->connect(), $data['user_id']);
        $this->sqliexecute($sql);
    }

    public function deleteFavPlace($id){
        $sql = "DELETE FROM favorite_places WHERE `favorite_places`.`fav_place_id` = ".mysqli_real_escape_string($this->connect(), $id);
        $this->sqliexecute($sql);
       // echo $sql;
    }

    public function setNewFavPlace($data){
        $sql = "INSERT INTO `favorite_places` (`street`, `street_number`, `post_code`, `user_id`, `fav_place_id`) 
VALUES ('".$data['street']."', '".mysqli_real_escape_string($this->connect(), $data['number'])."', '".mysqli_real_escape_string($this->connect(), $data['post_code'])."', '".mysqli_real_escape_string($this->connect(), $data['user_id'])."', NULL)";
        $this->sqliexecute($sql);
    }

    public function refuseOrder($order_id){
        $sql = "UPDATE orders SET orders.status = 4 WHERE order_id = ".mysqli_real_escape_string($this->connect(), $order_id);
        $this->sqliexecute($sql);
       // echo $sql;
    }

    public function register($data){
        $pass = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`city_id`,`user_names`, `user_password`, `user_id`, `user_status`, `user_mail`, `user_phone`) 
                        VALUES (".$data['city'].", '".$data['names']."', '".mysqli_real_escape_string($this->connect(), $pass)."', NULL, '1', '".mysqli_real_escape_string($this->connect(), $data['mail'])."', '".mysqli_real_escape_string($this->connect(), $data['phone'])."');";
        $this->sqliexecute($sql);
    }

    public function checkIfMailExist($mail){
        $sql = "SELECT * FROM users WHERE user_mail = '".mysqli_real_escape_string($this->connect(), $mail)."'";
        $result = $this->sqliexecute($sql);
        if(is_string($result[0]['user_mail'])){
            return 1;
        }else{
            return 0;
        }
    }

    public function getOrdersByUserId($id){
        $sql = "SELECT * FROM orders WHERE user_id = ".mysqli_real_escape_string($this->connect(), $id)." ORDER BY order_id DESC";
        return $this->sqliexecute($sql);
    }

    public function updateDriverRating($new_rating, $driver_rating_count, $driver_id, $order_id){
        $sql = "UPDATE drivers SET driver_rating = ".mysqli_real_escape_string($this->connect(), $new_rating).", driver_rating_count = ".mysqli_real_escape_string($this->connect(), $driver_rating_count)." WHERE driver_id = ".mysqli_real_escape_string($this->connect(), $driver_id);
       $this->sqliexecute($sql);

       //UPDATE `orders` SET `status` = '3' WHERE `orders`.`order_id` = 100;
       $sql = "UPDATE `orders` SET `status` = '3' WHERE `orders`.`order_id` = ".mysqli_real_escape_string($this->connect(), $order_id);
        $this->sqliexecute($sql);
     // echo $sql;
    }

    public function addEndPoint($data){
        $sql = "UPDATE orders SET end_destination = '".mysqli_real_escape_string($this->connect(), $data['street'])."-".mysqli_real_escape_string($this->connect(), $data['num'])."-".mysqli_real_escape_string($this->connect(), $data['post_code'])."' WHERE order_id = ".mysqli_real_escape_string($this->connect(), $data['order_id']);
       // echo $sql;
        $this->sqliexecute($sql);
    }
    
    public function getActiveOrdersByUserId($user_id){
        $sql = "SELECT * FROM orders WHERE `user_id` = ".mysqli_real_escape_string($this->connect(), $user_id)." AND status != 3 AND status != 4";
        return $this->sqliexecute($sql);
    }
    
    
    public function userExist($mail){
        $sql = "SELECT * FROM users WHERE user_mail = '".$mail."'";
        $user = $this->sqliexecute($sql);
        if(is_array($user)){
            return $user;
        }else{
            return false;
        }
    }
    
 
    
    
    public function gelLastGuestOrder($street){
        $sql="SELECT * FROM orders  WHERE `orders`.`start_destiantion` == \"".$street."\"";
        return $this->sqliexecute($sql);
    }
    
    public function getPhone($id){
        $sql = "SELECT user_phone FROM users WHERE user_id = ".$id;
        return $this->sqliexecute($sql);
    }
    
    public function checkIfPhoneExist($phone){
        $sql = "SELECT * FROM users WHERE user_phone = '".$phone."'";
        $x = $this->sqliexecute($sql);
        if(is_array($x)){
            return true;
        }else{
            return false;
        }
    }
       public function getDunerKingLomOrders(){
        $date = date('Y-m-d');
        $sql = "SELECT * FROM orders WHERE user_id = 24 AND date = '".$date."'";
        return $this->sqliexecute($sql);
       //return $sql;
    }
    
     public function getOrdersByFbId($fbid){
        $sql = "SELECT * FROM orders WHERE facebookid = '".$fbid."' ORDER BY order_id DESC LIMIT 5";
        return  $this->sqliexecute($sql);
        
    }
    
    public function getInactiveUserPhone(){
        $sql = "SELECT user_phone FROM users WHERE activate = 0 LIMIT 1";
        return  $this->sqliexecute($sql);
    }
    
    
    
    
    
    public function sendMessage($msg) {
    $content      = array(
        "en" => $msg
    );
    $hashes_array = array();
    array_push($hashes_array, array(
        "id" => "like-button",
        "text" => "Like",
        "icon" => "http://duber.semicolondi.com/images/logo.png",
        "url" => "https://almus.semicolondi.com"
    ));
    array_push($hashes_array, array(
        "id" => "like-button-2",
        "text" => "Like2",
        "icon" => "http://duber.semicolondi.com/images/logo.png",
        "url" => "https://almus.semicolondi.com"
    ));
    $fields = array(
        'app_id' => "a882f286-7c49-4ae8-8198-8999438d31c8",
        'included_segments' => array(
            'Subscribed Users'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'web_buttons' => $hashes_array
    );
    
    $fields = json_encode($fields);
   // print("\nJSON sent:\n");
   // print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic OGZhYTBlNjktNmQzOC00ZTE2LTkyZTktMzVmYjM1NWZkNDQx'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

public function setActCode($phone, $code){
    $sql = "UPDATE `users` SET `act_code` = '".$code."' WHERE `users`.`user_phone` = '".$phone."'";
    $this->sqliexecute($sql);
}

public function setActStatus($phone, $status){
    $sql = "UPDATE `users` SET `act_status` = '".$status."' WHERE `users`.`user_phone` = '".$phone."'";
    $this->sqliexecute($sql);
}

public function checkActiveOrdersForUser($user_id){
    $sql = "SELECT * FROM orders WHERE user_id = ".$user_id." AND status < 3";
    $orders = $this->sqliexecute($sql);
    if(is_array($orders)){
        return $orders;
        
    }else{
        return false;
    }
}

public function setLatLon($lat,$lon,$user_id){
    $sql = "UPDATE `users` SET lat = '".$lat."', lon = '".$lon."' WHERE `users`.`user_id` =".$user_id."";
    $this->sqliexecute($sql);
}
public function haversineGreatCircleDistance(
  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $lonDelta = $lonTo - $lonFrom;
  $a = pow(cos($latTo) * sin($lonDelta), 2) +
    pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
  $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

  $angle = atan2(sqrt($a), $b);
  return $angle * $earthRadius;
}

public function getAllCity(){
    $sql = "SELECT * FROM city";
    return $this->sqliexecute($sql);
}
    public  function getBrowser() { 
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $platform = 'Unknown';
  $version= "";

  //First get the platform?
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
  }elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
  }

  // Next get the name of the useragent yes seperately and for good reason
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }elseif(preg_match('/Firefox/i',$u_agent)){
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  }elseif(preg_match('/OPR/i',$u_agent)){
    $bname = 'Opera';
    $ub = "Opera";
  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Google Chrome';
    $ub = "Chrome";
  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Apple Safari';
    $ub = "Safari";
  }elseif(preg_match('/Netscape/i',$u_agent)){
    $bname = 'Netscape';
    $ub = "Netscape";
  }elseif(preg_match('/Edge/i',$u_agent)){
    $bname = 'Edge';
    $ub = "Edge";
  }elseif(preg_match('/Trident/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }

  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) .
')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }
  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
        $version= $matches['version'][0];
    }else {
        $version= $matches['version'][1];
    }
  }else {
    $version= $matches['version'][0];
  }

  // check if we have a number
  if ($version==null || $version=="") {$version="?";}

  return array(
    'userAgent' => $u_agent,
    'name'      => $bname,
    'version'   => $version,
    'platform'  => $platform,
    'pattern'    => $pattern
  );
} 


public function getBolnicaOrders(){
    $sql = "SELECT * FROM orders LEFT JOIN drivers ON orders.driver_id = drivers.driver_id WHERE user_id = 31 ORDER BY order_id DESC LIMIT 20";
    return $this->sqliexecute($sql);
}

}
