 <?php
    if (isset($_POST['a']) && isset($_POST['b']) && $_POST['a'] != "" && $_POST['b'] != "") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a == 0) {
            if ($b == 0) {
                echo "phương trình vô số nghiệm";
            } else {
                echo "Phương trình vô nghiệm";
            }
        } else {
            echo "Phương trình có nghiệm x= " . (-$b / $a);
        }
    }
