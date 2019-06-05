<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <Title>multistep Form Jquery</Title>            
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <style type="text/css">
                #second, #third, #result{
                    display:none;
                }
            </style>
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 bg-light p-4 rounded mt-5">
                    <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello World!</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger rounded mb-2 p-2" role="progressbar" id="progressBar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            Step -1
                        </div>
                    </div>
                    <form action="" class="mt-2">
                        <div id="first">
                            <h4 class="text-center bg-primary p-1 rounded text-light">Personnal Information</h4>
                            <div class="form-group">
                                <Label for="name">Name</Label>
                                <input type="text" name="name" class="form-control" placeholder="Full Name">                                    
                            </div>
                            <div class="form-group">
                                <Label for="username">Username</Label>
                                <input type="text" name="username" class="form-control" placeholder="user Name">                                    
                            </div>
                            <div class="form-group">
                                <a href="" class="btn btn-danger" id="next-1">Next</a>
                            </div>
                        </div>
                        <div id="second">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Contact Information</h4>
                            <div class="form-group">
                                <Label for="email">E-mail</Label>
                                <input type="email" name="email" class="form-control" placeholder="E-mail">                                    
                            </div>
                            <div class="form-group">
                                <Label for="phone">Phone</Label>
                                <input type="tel" name="phone" class="form-control" placeholder="Phone">                                    
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-danger" id="prev-2">Previous</a>
                                <a href="#" class="btn btn-danger" id="next-2">Next</a>
                            </div>
                        </div>
                        <div id="third">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Choose Password</h4>
                            <div class="form-group">
                                <Label for="password">Password</Label>
                                <input type="password" name="pass" class="form-control" placeholder="Password">                                    
                            </div>
                            <div class="form-group">
                                <Label for="confirm phone">Confirm Password</Label>
                                <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">                                    
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-danger" id="prev-3">Previous</a>
                                <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
                            </div>
                        </div>                               
                    </form>                                       
                </div>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#next-1").click(function(){
                    $("#second").show();                   
                    $("#first").hide();
                    $("#progressBar").css("width", 60%).html('Step -2');
                });

                $("#next-2").click(function(){
                    $("#third").show();                   
                    $("#second").hide();
                    $("#progressBar").css("width", 100%).html('Step -3');
                });
                $("#prev-2").click(function(){
                    $("#second").hide();
                    $("#first").show();
                    $("#progressBar").css("width", 30%).html('Step -1');
                })
                $("#prev-3").click(function(){
                    $("#second").show();
                    $("#third").hide();
                    $("#progressBar").css("width", 60%);
                    $("#progressText").html('Step -2');
                })
            });   
        </script>
    </body>

</html>