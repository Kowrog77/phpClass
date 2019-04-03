<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="thankyou.php" method ="get">
    <select name="categories" >
        <?php
        include "datab.php";
        $sql = "select * from cateogries";
        $qry = mysqli_query($db,$sql);
        while ($row = mysqli_fetch_assoc($qry)){
            extract ($row);
            echo "<option value =$categoryID>$categoryName</option>";
        }
        
        ?>
    </select>
        <input type="submit" value = "Submit">

    </form>
</body>
</html>