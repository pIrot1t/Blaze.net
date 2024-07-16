<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Home Page</title>
</head>
<body>
    <?
    session_start();
    include "bd.php";
    $id = $_COOKIE["IdUser"];
    $query = "SELECT * FROM Accounts WHERE Id = '$id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result)
    ?>
    <div class="menu">

        <?
        if($id != ""){
            ?>
            <img src="<? echo $row["Icon"]; ?>" class="icon">
            <div class="name"><? echo $row["Name"]; ?></div>

            <button class="mb" onclick="accountBut()">аккаунт</button>
            <?
        }
        
        else{
            ?>
            <img src="" alt="" class="icon">
            <div class="name">Guest</div>

            <button class="mb" onclick="autBut()">войти в аккаунт</button>
            <?
        }
        ?>

        <button class="mb" onclick="chatsBut()">чаты</button>

        <button class="mb" onclick="subscribesBut()">подписки</button>

    </div>
    <div class="home">

    </div>
    <script src="links.js"></script>
</body>
</html>