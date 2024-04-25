<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="asset/img/favicon.png" type="image/gif">
   
    <title>Golden thataka secured loan - Loan Company</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/reset.css">
    <link href="../../../ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
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
                    <h2>Loan Calculator</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Loan Calculator</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="loan-calculator-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 single-nav">
                    <h3>Home Loan
                        <span>@ 3.75%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3>Personal Loan
                        <span>@ 8.72%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3>Car Loan
                        <span>@ 5.68%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3>Business Loan
                        <span>@ 7.40%</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>Home Loan Amount</h4>
                        <div id="pricipal-slide"></div>
                        <div>
                            <span>$</span>
                            <h6 id="pricipal"></h6>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Loan Months</h4>
                        <div id="totalyear-slide"></div>
                        <div>
                            <h6 id="totalyear"></h6>
                            <span>Months</span>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Interest Rate</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h6 id="intrest"></h6>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Loan EMI</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Interest Payable</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Payment
<br>(Principal + Interest)</h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
              <a href="apply.php">         <button class="btn applybtn btn-default btn-sm">APPLY NOW</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer area -->
   <?php include('includes/footer.php')  ?>    <!-- end of footer area -->
    <!-- Optional JavaScript -->
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="../../../ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../../ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="../../../ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.nice-select.js"></script>
    <script src="asset/js/menumaker.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/calculator.js"></script>
    <script src="asset/js/slider.js"></script>
    <script src="asset/js/active.js"></script>
</body>

</html>