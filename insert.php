
<?php
session_start();
require_once 'db.php';


 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $p=md5($password);
    $conpass=$_POST['conpass'];
    $conp=md5($conpass);
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $hobbies = $_POST['hobbies'];
    $filename= $_FILES['file']['name'];
    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $new_name= rand(1000,10000).'.'.$_FILES['file']['name'];
    $new_namex=$new_name.'.'.$extension;
    if(file_exists('images/'.$filename)){
         $path="images/".$new_namex;
    }else{
    $path="images/".$filename;
    }
    move_uploaded_file($_FILES['file']['tmp_name'], $path);

    // $hobby=implode(",",$hobbies);
    $hobby='';

    foreach ($_POST["hobbies"] as $row) {
        $hobby .= $row . ', ';
    }
    $hobby= substr($hobby, 0, -2);

    $qry = "INSERT INTO ex123(firstname,lastname,address,email,password,conpass,gender,city,hobbies,file) values('$firstname','$lastname','$address','$email','$p','$conp','$gender','$city','$hobby','$filename')";

    $exe=mysqli_query($conn,$qry);

    // if(!$exe)
    // {
    //     echo "error in add record";
    // }
    if($exe) 
    {
         $_SESSION['status']="Thanks for regestration";
        header('location: reg1.php');
    }else
    {
        echo "something wrong";
    }
?>


<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


$alert = '';
 // $path='';

if(isset($_POST['checkbox'])){
    // $path =  $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $path);

    // $mail->AddAttachment($path);
    
    $skills = '';
    foreach ($_POST["hobbies"] as $row) {
        $skills .= $row . ', ';
    }
    $skills = substr($skills, 0, -2);
 
$message = ' <tr>
        <td width="30%">firstname</td>
        <td width="70%">' . $_POST["firstname"] . '</td>
      </tr>
      <tr>
        <td width="30%">lastname</td>
        <td width="70%">' . $_POST["lastname"] . '</td>
      </tr>
      <tr>
        <td width="30%">email</td>
        <td width="70%">' . $_POST["email"] . '</td>
      </tr>
     
      <tr>
        <td width="30%">address</td>
        <td width="70%">' . $_POST["address"] . '</td>
      </tr>
      <tr>
        <td width="30%">gender</td>
        <td width="70%">' . $_POST["gender"] . '</td>
      </tr>
      <tr>
        <td width="30%">city</td>
        <td width="70%">' . $_POST["city"] . '</td>
      </tr>
      <tr>
        <td width="30%">hobbies</td>
        <td width="70%">' . $skills . '</td>
      </tr>
  ';

   
    $mail = new PHPMailer;
    $mail->IsSMTP();                                
    $mail->Host = 'smtp.gmail.com';        
    $mail->Port = '465';                                
    $mail->SMTPAuth = true;                            
    $mail->Username = 'snehampatel1904@gmail.com';                    
    $mail->Password = '@toqy4521HI@@';                    
    $mail->SMTPSecure = 'ssl';                            
    $mail->From = 'snehampatel1904@gmail.com';                    
    $mail->FromName = 'snehampatel1904@gmail.com';                
    $mail->AddAddress('snehampatel1904@gmail.com', 'snehampatel1904@gmail.com');     
    $mail->WordWrap = 50;                            
    $mail->IsHTML(true);                            
     $mail->AddAttachment($path);                    
    $mail->Subject = 'user Details';                
    $mail->Body = $message;                            
    if ($mail->Send())                                
    {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
          
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
    
}
if(isset($_POST['checkbox'])){
$message = 'Thanks for regestration. ';
    $mail = new PHPMailer;
    $mail->IsSMTP();                           
    $mail->Host = 'smtp.gmail.com';        
    $mail->Port = '465';                                
    $mail->SMTPAuth = true;                            
    $mail->Username = 'snehampatel1904@gmail.com';                    
    $mail->Password = '@toqy4521HI@@';                    
    $mail->SMTPSecure = 'ssl';                            
    $mail->From = 'snehabhut19@gmail.com';                    
    $mail->FromName = 'snehabhut19@gmail.com';                
    $mail->AddAddress($_POST["email"], 'snehabhut19@gmail.com');      
    $mail->WordWrap = 50;                            
    $mail->IsHTML(true);                                                
    $mail->Subject = 'user Details';                
    $mail->Body = $message;                           
    if ($mail->Send())                                
    {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
      
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
    
}

?>
