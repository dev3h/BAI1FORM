<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giải phương trình bậc 2</title>
</head>

<body>
    <h1>Form giải phương trình bậc nhất</h1>
    <?php if (isset($_POST['a']) && $_POST['a'] == "" || isset($_POST['b']) && $_POST['b'] == "") { ?>
        <p style="color: red">phải nhập trường dủ thông tin</p>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="">
            <input type="text" placeholder="nhập a" name="a">
        </label>
        <br>
        <label for="">
            <input type="text" placeholder="nhập b" name="b">
        </label>
        <br>
        <button>giải phương trình</button>
    </form>
   <?php include './process.php'?>
</body>

</html>