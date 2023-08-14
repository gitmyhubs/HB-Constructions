
<?php 
          //*************************  USER Submit  *****************
   
    if (isset($_POST['submit']))
    {
      // fetching data from the input boxes.
      $name = $_POST['name']; 
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $company = $_POST['company'];
      $message = $_POST['message'];

      // connecting to the database
      include('connect.php'); 
      mysqli_query($conn, "insert into users(name,mobile,email,company,message) 
                  values ('$name','$mobile','$email','$company','$message')");

      if(mysqli_affected_rows($conn)==1)
      {
        echo "<center style='color:green; font-size:20px;'><b></b></center>";

      }
      else
      {
        echo "<center style='color:red; font-size:20px;'>Sorry!! Unable to submit data, Please Try Again.....</center>";
       
      }

      // sending mail through PHPMailer and SMTP
        $html="<table>
                  <tr><td>Name:<td><td>$name<td></tr>
                  <tr><td>mobile No:<td><td>$mobile<td></tr>
                  <tr><td>Email:<td><td>$email<td></tr>
                  <tr><td>company:<td><td>$company<td></tr>
                  <tr><td>Message:<td><td>$message<td></tr>
                 
                </table>";
        include('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="iwswatersolutions@gmail.com";
        $mail->Password="gqravksbdhdpyxpr";
        $mail->SetFrom("iwswatersolutions@gmail.com");
        $mail->addAddress("pktestphp@gmail.com"); //receiver email address
        $mail->IsHTML(true);
        $mail->Subject="Helloo Bhaiaah Form Details"; // Subject of Email      
        $mail->Body=$html; 
        $mail->SMTPOptions=array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>false)); 
        if($mail->send()){
          // echo "Mail send";
        }else{
          // echo "Error occur";
        }
       
       
        

    }
