<?php include ('employeeinsert.php') ?>
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

            <div class="navigationside-index">

                <ul id="navigationtabs">
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="index.html">
                            <button class="button-index">
                                Home
                            </button>
                        </a>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="companylist.html">
                            <button class="button-index">
                                Company List
                            </button>
                        </a>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="employeelist.html">
                            <button class="button-index">
                                Employee List
                            </button>
                        </a>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <a href="EmployeeRegistration.php">
                            <button class="button-index">
                                Register
                            </button>
                        </a>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                        <button class="currenttab-index">
                            Login
                        </button>
                    </li>
                    <li id="navtabspace"></li>
                    <li id="navtabs">
                    </li>
                </ul>

            </div>

        </div>

        <div class="middle-content">

            <div class="registerandpic-middle-content">
                <div class="picture-box">
                    <div class="picture3">
                    </div>
                </div>
                <div class="registrationform-box">

                    <div class="formbox-topdesign">
                        <div class="register-text">
                            <span id="OrangeText">L</span>ogin as Employee
                        </div>
                    </div>

                    <div class="loginform">

                        <form method="post" action="employeeinsert.php">
                            <label for="email">Email Address:</label>
                            <input type="text" id="email" name="email" placeholder="emailaddress@gmail.com" required>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" placeholder="*********" required>
                            <input type="submit" name="login_user" value="LOGIN">
                            <div class="employerRegtext">
                                Are you an Employer? 
                                <span id="employerRegLink">
                                    <a href="EmployerLogin.php" id="employerReg">
                                        Login as Employer
                                    </a>
                                </span>
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
