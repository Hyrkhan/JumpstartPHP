<?php include ('employerinsert.php') ?>
<!DOCTYPE html>
<html>
<title>Jumpstart Ph</title>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="myscripts.js"></script>
</head>

<body>
    <div class="whole-container">

        <div class="top-content">

            <div class="logoside">
                <div class="logo">
                </div>
            </div>

            <div class="navigationside">

                <ul id="navigationtabs">
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="/Employer_Website/employerHomepage.html" id="page_link">
                            <button class="button">
                                Home
                            </button>
                        </a>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <button class="button">
                            Job Applications
                        </button>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <button class="button">
                            Companies
                        </button>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <button class="currenttab">
                            Register
                        </button>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="login2.html">
                            <button class="button">
                                Login
                            </button>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <div class="middle-content">

            <div class="registerandpic-middle-content">

                <div class="registrationform2-box">

                    <div class="formbox2-topdesign">
                        <div class="register-text">
                            <span id="OrangeText">R</span>egister as an Employer
                        </div>
                    </div>

                    <div class="registrationform2">

                        <form method="post" action="employerinsert.php" onsubmit="return validateForm(event)">
                            <div class="formleft">
                                <label for="email">Email Address:</label>
                                <span id="formremindertext">Verification will be required to post a job listing</span>
                                <input type="text" id="email" name="email" placeholder="emailaddress@gmail.com" required>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" placeholder="*********" required>
                                <label for="confirmpassword">Confirm Password:</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="*********" required>
                            </div>

                            <div class="formright">
                                <label for="business">Business Name:</label>
                                <span id="formremindertext">For security purposes, please enter business name</span>
                                <input type="text" id="business" name="business" placeholder="Alorica" required><br>
                                <label for="phonenumber">Phone Number:</label>
                                <input type="text" id="phonenumber" name="phonenumber" placeholder="0922-332-1515" required>
                                <div class="checkbox-policy">
                                    <input type="checkbox" id="policy" name="policy" required>
                                    <span id="formremindertext2">something something accept privacy policy</span><br>
                                </div>
                                <input type="submit" name="reg_user" value="REGISTER">
                                <div class="employerRegtext">
                                    Are you an Employee? 
                                    <span id="employerRegLink">
                                        <a href="EmployeeRegistration.html" id="employerReg">
                                            click here
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </form> 

                    </div>

                </div>

                <div id="overlay"></div>

                <div id="validationModal" class="modal">
                    <div id="modalDesign">
                        <div id="modalDesignPicture">
                            <div class="errorTexttitle"> 
                                <span id="RedText">E</span>rror<span id="RedText">!</span>
                            </div>
                            <span id="closeModal" onclick="closeModal()">&times;</span>
                        </div>
                    </div>
                    <div id="modalContent">
                    </div>
                </div>

                <div id="validationModal2" class="modal">
                    <div id="modalDesign">
                        <div id="modalDesignPicture2">
                            <div class="SuccessTexttitle"> 
                                <span id="GreenText">R</span>egistration&nbsp<span id="GreenText">S</span>uccessful<span id="GreenText">!</span>
                            </div>
                            <span id="closeModal2" onclick="closeModal2()">&times;</span>
                        </div>
                    </div>
                    <div id="modalContent2">
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
