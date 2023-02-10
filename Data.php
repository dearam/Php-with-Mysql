<html>
<head>
    <title>Data page</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body class="data-body">
    <?php
        session_start();
    ?>
    <?php
            $name=$_SESSION['name'];
            $location=$_SESSION['address'];
            $email=$_SESSION['email'];
            $phonenumber=$_SESSION['mobile'];
            $image=$_SESSION['image'];
    ?>
    <form class="data-form">
        <div class="data-profile">
            <span class="data-title">Name</span>
            <div class="datas-content">
                <div class="data-subcontent">
                    <img src="<?php echo $image?>"/>
                    <?php echo htmlspecialchars($name)?>
                </div>
            </div>
        </div>
        <div class="data-location">
            <span class="data-title">Location</span>
            <div class="datas">
                <?php echo htmlspecialchars($location)?>
            </div>
        </div>
        <div class="data-email">
            <span class="data-title">Email</span>
            <div class="datas">
                <?php echo htmlspecialchars($email)?>
            </div>
        </div>
        <div class="data-phone">
            <span class="data-title">PhoneNumber</span>
            <div class="datas">
                <?php echo htmlspecialchars($phonenumber)?>
            </div>
        </div>
    </form>
</body>
</html>
