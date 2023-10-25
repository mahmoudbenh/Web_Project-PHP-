<?php
include '../Controller/paiementc.php';
$paiementc = new paiementc();
$list = $paiementc->listpaiement();
require("../../PHPMailer/src/Exception.php");
require("../../PHPMailer/src/PHPMailer.php");
require("../../PHPMailer/src/SMTP.php");
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tsl";
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->isHTML(true);
$mail->Username = "mahmoud.benhammouda@esprit.tn";
$mail->Password = "211JMT8844";
$mail->From = "formula4@gmail.com";
$mail->FromName = "Support formula4";
$mail->addAddress("benhammoudamahmoud00@gmail.com", "Name");
$mail->Subject = "Welcome !";
$mail->Body = 'your car is reserved by formula4';
try
{
$mail->send();
}
catch(Exception $e)
{
echo ($mail->ErrorInfo);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>

<body>
    <form action='' method="POST">
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Clients</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
           
        </ul>
        
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Offers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Clients</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Reclamations</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>35000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>cin</th>
                            <th>marque</th>
                            <th>couleur</th>
                            <th>email</th>
                            <th>prix</th>
                            <th>info</th>
                            <th>modifier</th>
                            <th>supprimer</th>
                        </tr>
                        
                    </table>
                    
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Offer</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>