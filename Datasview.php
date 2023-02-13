<html>
<head>
    <link rel="stylesheet" href="Datsview.css">
    <script src="https://kit.fontawesome.com/f723fdd786.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.2.js"></script>
</head>
<body class="data-body">
<?php


    //INTIALIZING THE DATABASE VARIABLES
    $servername="localhost";
    $username="root";
    $password="dearam8114";
    $myDB="dearam";
    try{

        $conn=new PDO("mysql:host=$servername;dbname=$myDB",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        $displaytable="select firstname from sample";
        $stmt=$conn->prepare("select * from Surveyform");
        $stmt->execute();
        $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr=$stmt->fetchAll();

//        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//            echo $v;
//        }

    }catch(PDOException $e){
        echo "connection failed".$e->getMessage();
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        print_r($_POST);
    }
?>


    <h1>Welcome to Datasview</h1>
    <form class="data-form">
        <div class="datas-title">
            <span class="title"><p>Name</p></span>
            <span class="title">Location</span>
            <span class="title">Email</span>
            <span class="title">PhoneNumber</span>
            <div class='Edit-option'></div>
        </div>
        <div class="datas">
            <?php
                    for($i=0;$i<count($arr);$i++){
                        $img_path=$arr[$i]['img'];
                        echo "<div class='content' >";
                        echo "<div class='profile-content'><div class='i-content'><img src='$img_path'>".$arr[$i]['name']."</div></div>";
                        echo "<div class='sub-content'>".$arr[$i]['location']."</div>";
                        echo "<div class='sub-content' id='email'>".$arr[$i]['email']."</div>";
                        echo "<div class='sub-content'>".$arr[$i]['number']."</div>";
                        echo "<div class='Edit-option'><button type='submit' class='ebtn' name='edit_button'><i class='fa-regular fa-pen-to-square'></i></button><button type='submit' class='ebtn' id='dltbtn'><i class='fa-regular fa-trash-can'></i></button></div>";
                        echo "</div>";
                    }
            ?>
        </div>
    </form>
</body>
<script src="editoption.js"></script>
</html>
