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
            //SESSION DATAS GETTING FROM FORM PAGE
            $name=$_SESSION['name'];
            $location=$_SESSION['address'];
            $email=$_SESSION['email'];
            $phonenumber=$_SESSION['mobile'];
            $image=$_SESSION['image'];


            //INTIALIZING THE DATABASE VARIABLES
            $servername="localhost";
            $username="root";
            $password="dearam8114";
            $myDB="dearam";

            //DATABASE CONNECTION AND DATA ADDING
            try{
                $conn=new PDO("mysql:host=$servername;dbname=$myDB",$username,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


//                $tablecreation="create table sample(id int,firstname varchar(20))";
//                $conn->exec($tablecreation);

                $elementinsertion="insert into Surveyform values('$image','$name','$location',$phonenumber,'$email')";
                $conn->exec($elementinsertion);

                echo "added";
                header("Location:Datasview.php");
            }catch(PDOException $e){
                echo "connection failed".$e->getMessage();
            }
    ?>

</body>
</html>
