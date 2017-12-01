<?php

require_once APP_PATH. 'database/UserDAL.php';
require_once APP_PATH.'controllers/Controller.php';

class PatientController extends Controller{
    
    public function patientProfileViewAction()
    {
        include VIEW_PATH.'patient/patientProfileView.php';
    }
    
    public function myHistoryAction()
    {
        include VIEW_PATH.'patient/myHistory.php';
    }
    
    public function myNotificationAction()
    {
        include VIEW_PATH.'patient/myNotification.php';
    }
    
    public function myPaymentsAction()
    {
        include VIEW_PATH.'patient/myPayments.php';
    }
    
    public function myVisitAction()
    {
        include VIEW_PATH.'patient/myVisit.php';
    }
    
}