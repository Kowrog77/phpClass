<?php
//set default value
$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action =  'start_app';
}

//process
switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        if($invoice_date_s == NULL || $due_date_s == NULL){
            $message='Enter both dates';
        }
        $is_valid=False;
            try{ $invoice_date_f = new DateTime($invoice_date_s); 
                $due_date_f = new DateTime($due_date_s);
                $is_valid = True;
            }
            catch(Exception $e){
                
            }
            if($is_valid == False){
                $message ="Date Type Not Valid";
            }else{
                $invoice_date_f = $invoice_date_f ->format('F j, Y');
                $due_date_f = $due_date_f->format('F j, Y');
            }
           
        
        
        // convert date strings to DateTime objects
        // and use a try/catch to make sure the dates are valid

        // make sure the due date is after the invoice date
        
        // format both dates
        ;
        
        // get the current date and time and format it
        $current_date_f = 'not implemented yet';
        $current_time_f = 'not implemented yet';
        
        // get the amount of time between the current date and the due date
        // and format the due date message
        $due_date_message = 'not implemented yet';

        break;
}
include 'date_tester.php';
?>