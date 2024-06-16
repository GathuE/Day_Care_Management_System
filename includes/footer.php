        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Custom Javascript -->

        
        <script>


            window.onload = function() {
                document.getElementById("submit_login").disabled = true;
                document.getElementById("submit_recovery").disabled = true;
            
            }

            //Alert Timer 

            setTimeout (function(){
                    //closing the alert
                    $('.alert').alert('close');
                }, 4000);


            //Login Validator

            function validate_login_input(){
                var email_login = document.getElementById("email_login").value;
                var password_login = document.getElementById("password_login").value;

                let text_email;
                let text_password;

                //email
                if(email_login == ''){
                    document.getElementById("email_login").focus();
                    text_email = "Please Provide your Username!!";
                    document.getElementById("email_error").style.display = "block";
                    document.getElementById("email_error").innerHTML = text_email;
                    document.getElementById("submit_login").disabled = true;
                } else{
                    document.getElementById("email_error").style.display = "none";
                    document.getElementById("submit_login").disabled = false;
                    
                }
                //password
                if(password_login == ''){
                    text_password = "Please Provide your Password!!";
                    document.getElementById("password_error").style.display = "block";
                    document.getElementById("password_error").innerHTML = text_password;
                    document.getElementById("submit_login").disabled = true;
                } else{
                    document.getElementById("password_error").style.display = "none";
                    document.getElementById("submit_login").disabled = false;
                    
                }

            }

            // Recover Password Validator
            function validate_recover_input(){

                var role = document.getElementById("role").value;
                var security_question = document.getElementById("security_question").value;
                var security_answer = document.getElementById("security_answer").value;

                let text_role;
                let text_security_question;
                let text_security_answer;


                //role
                if (role == ''){
                    document.getElementById("role").focus();
                    text_role = "A valid System User Has a Role!!";
                    document.getElementById("role_error").style.display = "block";
                    document.getElementById("role_error").innerHTML = text_role;
                    document.getElementById("submit_recovery").disabled = true;
                }
                else{
                    document.getElementById("role_error").style.display = "none";
                    document.getElementById("submit_recovery").disabled = false;

                }

                //security_question
                if (security_question == ''){
                    text_security_question = "You Must Select One Question!!";
                    document.getElementById("security_question_error").style.display = "block";
                    document.getElementById("security_question_error").innerHTML = text_security_question;
                    document.getElementById("submit_recovery").disabled = true;
                }
                else{
                    document.getElementById("security_question_error").style.display = "none";
                    document.getElementById("submit_recovery").disabled = false;

                }
                //security_answer
                if (security_answer == ''){
                    text_security_answer = "You Must Provide an Answer!!";
                    document.getElementById("security_answer_error").style.display = "block";
                    document.getElementById("security_answer_error").innerHTML = text_security_answer;
                    document.getElementById("submit_recovery").disabled = true;
                }
                else{
                    document.getElementById("security_answer_error").style.display = "none";
                    document.getElementById("submit_recovery").disabled = false;

                }


            }

            //New Passwords Matching 

            function validate_confirmpassword_input(){
                                   
                var password_one = document.getElementById("reset_password").value;
                var password_two = document.getElementById("confirm_password").value;

                let password_error_text;

                if(password_two !== password_one){
                    password_error_text = "The Passwords Don't Seem to Match!!";
                    document.getElementById("reset_password_error").style.display = "block";
                    document.getElementById("reset_password_error").innerHTML = password_error_text;
                    document.getElementById("submit_resetpassword").disabled = true;
                }
                else{
                    document.getElementById("reset_password_error").style.display = "none";
                    document.getElementById("submit_resetpassword").disabled = false;
                }
            }
            //New Passwords matching
        </script>
        

        <!--  Custom Javascript -->

    </body>
</html>