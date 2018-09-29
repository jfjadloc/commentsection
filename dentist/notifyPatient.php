<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    $email = $_GET["email"];
    $subject = $_GET["code"];

    // echo $email." ".$subject;

    $connect=mysqli_connect("Localhost","root","","commentsection");

    $sql="SELECT * FROM doctors WHERE id = '$subject'";
    $query = $connect->query($sql);
    $row = $query->fetch_assoc();

    $name = $row["doctorName"];

    $bodyContent = "

        <div style='width:600px; padding: 10px 10px 20px 10px; border: 1px solid #BFBFBF; background-color: #ededed; box-shadow: 10px 10px 5px #aaaaaa;'>
        <h2 style='color:black;font-family: Century Gothic;text-align:center;'>Your appointment with ".$name." has now been approved.</h2>
        <hr>
        </div>";

    $mail = new PHPMailer(true);                // Passing `true` enables exceptions

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'sanchez.care.clinic@gmail.com';              // SMTP username
        $mail->Password = 'sanchezdentalclinic2018';
        $mail->SMTPAuth = 'true';                      // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to 465/587

        //Recipients
        $mail->setFrom('sanchez.care.clinic@gmail.com', 'Sanchez Dental Care Clinic');
        $mail->addReplyTo('sanchez.care.clinic@gmail.com', 'Sanchez Dental Care Clinic');
        $mail->addAddress($email);   // Add a recipient

        $mail->Subject = "Doctor's Appointment Notification";
        $mail->Body    = $bodyContent;

        //Content
        $mail->isHTML(true);                            // Set email format to HTML

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

    mysqli_close($connect);
    die();
    header("Location:appointment-history.php");
?>
