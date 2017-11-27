$(document).ready(function() {   
       $('#form-signin').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       //excluded: ':disabled',
        fields: {       
            inputUsername: {
                validators: {
                    stringLength: {
                        min: 6,
                        max: 15,
                        message:'Please enter a valid username'
                    },
                    notEmpty: {
                        message: 'Please enter your a username'
                    }
                }
            },
            inputPassword: {
                validators: {
                    regexp: {
                        regexp: /^[a-zA-Z0-9- ]*$/,
                        message: 'Please enter a valid password'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'Please enter a valid password'
                    }
                }
            }
         }
    }); 
        $('#paymentform').bootstrapValidator({
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        //excluded: ':disabled',
         fields: {       
            fname: {
                 validators: {
                     stringLength: {
                         min: 3,
                         max: 10,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             lname: {
                 validators: {
                     stringLength: {
                         min: 3,
                         max: 10,
                         message:'Please enter valid data'
                        },
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             country: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             currency: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             amount: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             email: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             state: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             city: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             postalcode: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             account: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             expirationyear: {
                 validators: {
                     stringLength: {
                         min: 4,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             },      
             expiration: {
                 validators: {
                     stringLength: {
                         min: 2,
                         max: 15,
                         message:'Please enter valid data'
                     },
                     notEmpty: {
                         message: 'Please fill this field'
                     }
                 }
             }
     });

    //send login details
    $("#btn-signin").click(function() {
        var username = $("#inputUsername").val();
        var password = $("#inputPassword").val();    

        if (username != "" && password != "" ) {
            //alert(username + " " + password);
            submit_data();
        }

        function submit_data(){
             $.ajax({
                 type: "POST",
                 url: "app/userlogin.php",
                 data: "username=" + username + "&password=" + password,
                 
                 success : function(text){

                    var status = text.replace(/\s+/g, '');                       

                    if (status == "success") {
                        try{
                            window.location.href = "index.php";
                        }catch(e){
                            alert(e.message);
                        }                        
                    } else if(status == "fail"){
                        alert("Invalid Credentials!");
                    }else{
                        alert("unknown error");
                    }
                        
                 },
                 error: function(text) {
                   alert("error");
                }
            });
        }     
    });
    
        //confirm mail
        $("#confirm-mail").click(function() {
            var service_name = $("#service_name").val();
            var amount = $("#amount").val();   
            var user_id = $("#user_id").val();  
    
            if (service_name != "" && amount != "" && user_id != ""  ) {
                //alert(username + " " + password);
                submit_data();
            }
    
            function submit_data(){
                 $.ajax({
                     type: "POST",
                     url: "confirm_mail.php",
                     data: "service_name=" + service_name + "&amount=" + amount + "&user_id=" + user_id,
                     
                     success : function(text){
                        //alert("success");
                     },
                     error: function(text) {
                       alert("error");
                    }
                });
            }     
        });

    //tables
    $('#delegate-table').DataTable();

    //send email   
    $("#send-email").click(function() {

        var user_id = $("#user_id").val();   

        if (user_id != "") {
            //alert(user_id);
            submit_data();
        }

        function submit_data(){
             $.ajax({
                 type: "POST",
                 url: "app/email/send_mail.php",
                 data: "user_id=" + user_id,
                 
                 success : function(text){

                    var status = text.replace(/\s+/g, '');                       

                    if (status == "success") {
                        try{
                            //window.location.href = "index.php";
                            alert("Email sent successfully");
                        }catch(e){
                            alert(e.message);
                        }                        
                    } else if(status == "fail"){
                        alert("Error in sending email!");
                    }else{
                        alert("unknown!");
                    }
                        
                 },
                 error: function() {
                   alert("error");
                }
             });
        }     
    });

});