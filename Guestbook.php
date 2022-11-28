<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

<div class = "container-fluid">
    <div class = "row">
        <div class = "col-12 text-center">
            <form action = "send.php"  method = "post">
                <label for = "name">Enter your Name</label>
                <p><input type="text" id ="name" placeholder="Name" required name="name" value=""></p>
                <div>
                    <label for = "message"> Leave a message</label>
                </div>
                <textarea id = "message" name = "message" rows = "20" cols = "50"> </textarea>
                <div>
                    <label for ="link"> enter a link</label>
                </div>
                <p><input type="text" id = "link" placeholder="Link" required name="Link" value=""></p>
                <p><button class="w3-button w3-black" type="submit" style = " margin-top: 25px; margin-bottom: 25px; font-weight: bold; font-size: 20px;">Submit</button></p>

            </form>

            <?php
            require '/home/zhenhuai/db.php';
            $sql = "SELECT * FROM messages ";
            $result = @mysqli_query($cnxn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $message = $row['message'];
                $name = $row['name'];
                echo "Name : $name Message : $message <br>";
            }


            ?>




        </div>


    </div>


</div>





</body>
</html>