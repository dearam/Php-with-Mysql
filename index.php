<html>
    <title>Mainpage</title>
    <link rel="stylesheet" href="index.css">
    <script src="jquery-3.6.2.js"></script>
    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"]=='POST'){
                session_start();
                $_SESSION["name"]=$_POST['name'];
                $_SESSION["email"]=$_POST['email'];
                $_SESSION['mobile']=$_POST['phonenumber'];
                $_SESSION['address']=$_POST['address'];
                $target_dir='uploads/';
                $target_file=$target_dir .basename($_FILES['image']['name']);
                if(isset($_POST['submit'])){
                    $target_temp=$_FILES['image']['tmp_name'];
                    move_uploaded_file($target_temp,$target_file);
                }
                $_SESSION['image']=$target_file;
                header("Location: Data.php");
                exit;
            }
        ?>
        <div class="title"><h2>Contact us Today!</h2></div>
        <div class="form-content">
            <form class="mainform" action=<?php echo $_SERVER["PHP_SELF"]?> method="post" enctype="multipart/form-data">

                <div class="input-content">
                    <h3 class="input-title" id="firstname">First Name</h3>
                    <label  class="input-box">
                        <input id="input-firstname" class="i-box" name="name" type="text" placeholder="First Name"/>
                        <span id="emptyfirst" class="emptyfirst"></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="email">E-mail</h3>
                    <label class="input-box">
                        <input id="input-email" class="i-box" name="email" type="text" placeholder="E-mail"/>
                        <span id="emptyemail" class="emptymail"></span>
                    </label>
                </div >

                <div class="input-content">
                    <h3 class="input-title" id="number">Phone #</h3>
                    <label class="input-box">
                        <input class="i-box" id="input-number" name="phonenumber" type="number" placeholder="enter mobile number"/>
                        <span id="emptynumber" class="emptynumber"></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="dateofbirth">DOB</h3>
                    <label class="input-box">
                        <input id="input-dateofbirth" class="i-box" type="date"/>
                    </label>
                </div>


                <div class="input-content">
                    <h3 class="input-title" id="address">Location</h3>
                    <label class="input-box">
                        <input type="text" id="input-address" name="address" placeholder="Enter Location" class="i-box"></input>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="profile">Profile Image</h3>
                    <label>
                        <input id="input-profile" type="file" name="image" accept="image/jpg,image/jpeg,image/png">
                    </label>
                </div>

                <button type="submit" id="submit" name="submit" value="formsubmition">Send</button>

            </form>
        </div>
    </body>
    <script src="index.js"></script>
</html>