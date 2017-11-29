<?php

$user = "login";
?>



 <html>

<head>
<title>Health Scheduler</title>
<link href="http://localhost/public/css/style.css" type="text/css" rel="stylesheet">

</head>

<body> 

<?php
if($user == "guest")
{

?>
    <header class="app-header">
        <div class="media" style="overflow:visible">
            <div class="media-body logo">
                <strong>HEALTH</strong> <span>SCHEDULER</span>
            </div>
            <div class="media-body media-middle text-right" style="overflow:visible;">
            </div>
        </div>
    </header>
<?php 
}

if($user == "patient"){
?>

   <header class="app-header">
        <div class="media" style="overflow:visible">
            <div class="media-body logo">
                <strong>HEALTH</strong> <span>SCHEDULER</span>
            </div>
            <div class="media-body media-middle text-right" style="overflow:visible;">

                <ul class="list-unstyled list-inline m-0">
                    <li class="list-inline-item dropdown">
                            <button class="btn btn-secondary book-text" data-toggle="modal" data-target="#book-appointment">Book Appointment</button>
                            <a class="book-icon" data-toggle="modal" data-target="#book-appointment"><img src="../assets/images/book-icon.png" width="20" alt=""></a>
                    </li>
                    <li class="list-inline-item dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="../assets/images/notification-icon.png" width="20" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-right">
                                <li><a href="#">Regularly beginning at age 20 with risk factores</a></li>
                                <li><a href="#">Regularly beginning at age 20 with risk</a></li>
                                <li><a href="#">Regularly beginning at age 20 with risk factores</a></li>

                                <li class="text-right"><a href="my-notification.html" class="">View All</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-white" type="button" data-toggle="dropdown">John Doe
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="../selection.html">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>



            </div>
        </div>
    </header>

    <div class="sub-header">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="patient-profile.html">My Profile</a></li>
            <li role="presentation"><a href="my-visit.html">My Visit</a></li>
            <li role="presentation"><a href="my-payments.html">My Payments</a></li>
            <li role="presentation"><a href="my-notification.html">My Notfications</a></li>
            <li role="presentation"><a href="my-history.html">My Medical History</a></li>
        </ul>
    </div>
    <?php }
    
    if($user == "provider")
    {    
    ?>

<header class="app-header">
        <div class="media" style="overflow:visible">
            <div class="media-body logo">
                <strong>HEALTH</strong> <span>SCHEDULER</span>
            </div>
            <div class="media-body media-middle text-right" style="overflow:visible;">

                <ul class="list-unstyled list-inline m-0">
                   
                    <li class="list-inline-item dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="../assets/images/notification-icon.png" width="20" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-right">
                                <li><a href="#"><strong>John Doe </strong> Medical Records successfully shared with John Doe PCP. </a></li>
                                <li><a href="#"><strong>Thomas Cook,</strong> your credentials have successfully verified by United Provider Credential Verification Team.</a></li>
                                <li><a href="#"><strong>Thomas Cook,</strong> your credentials have successfully verified by Atena Provider Credential Verification Team.</a></li>

                                <li class="text-right"><a href="my-notification.html" class="">View All</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-white" type="button" data-toggle="dropdown">Thomas Cook
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="../selection.html">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>



            </div>
        </div>
    </header>

    <div class="sub-header">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="provider-profile.html">My Profile</a></li>
            <li role="presentation"><a href="view-appointment.html">View Appointment</a></li>
            <li role="presentation" ><a href="setup-office-hours.html">Setup Office Hours</a></li>
            <li role="presentation"><a href="my-notification.html">My Notifications</a></li>
            <li role="presentation"><a href="my-history.html">My Patient's Medical History</a></li>
            <li role="presentation"><a href="patient-consult.html">Patient Consult</a></li>
        </ul>
    </div>

<?php } ?>

<?php 
if($user = "login")
{
    
}
?>