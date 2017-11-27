<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>MPESA REST API</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>

  <body>

    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <div class="col-md-12">

                <div class="panel panel-default">
                
                        <div class="row col-md-12">
                            <div class="col-md-12">  
                            </div>
                        </div> 

                    <div class="panel-body">             
                        <div class="col-md-12 text-center">
                            <h3 class="col-md-12" style="font-weight:bold;text-decoration:underline"> MPESA PAYMENT </h3>
                        </div> 
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="col-md-8 col-md-offset-2" style="margin-top:50px">                               
                                    
                                    <form id="paymentform" method="POST" action="online.php">    
                                        <div class="col-md-6 col-md-offset-3" style="padding-left:0px">
                                            <div class="form-group">
                                                <label for="phone">Mpesa phone number:</label>
                                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="0712345678" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-top: 20px"> 
                                            <i>Please Enter your mpesa phone number</i>
                                        </div>  
                                        <div class="col-md-6 col-md-offset-3" style="margin-top: 30px"> 
                                            <button type="submit" class="btn btn-block btn-primary">Make Payment</button>
                                        </div>  
                                    </form>  
                                        
                                </div>    
                            </div>        
                        </div>   
                    </div>
                    </div>

                </div>   
            </div>
        </div> 
        <!--end of content -->  

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/libs/jquery-3.2.1.min.js"></script>
    <script src="assets/js/libs/bootstrap.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="assets/js/custom.js" type="text/javascript"></script> -->
  </body>
</html>       