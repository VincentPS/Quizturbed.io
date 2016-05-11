<?php  
    function addScore($tabel, $username, $time)
    {
    	$conn = new mysqli('localhost', 'root', '', 'mini');
        $sql = "INSERT INTO " . $tabel . " (user, score) VALUES ('" . $username . "', '" . $time . "')";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            header("localtion: view/leaderboard/index.php");
        }
    }

    function readScore($param1, $param2)
    {
        $conn = new mysqli('localhost', 'root', '', 'mini');
        $sql = "SELECT user, score FROM leaderboard";
        $result = mysqli_query($conn, $sql);
        $scores = $result->fetch_all(MYSQLI_ASSOC);

        echo '<table> <thead> <tr>';
        echo '<th><button type="button">' . $param1 . '</button></th>';
        echo '<th><button type="button">' . $param2 . '</button></th>';
        echo '</tr> </thead> </tbody>';

        foreach ($scores as $score) {
        echo '<tr>';
        echo '<td><button type="button">' . $score['user'] . '</button></td>';
        echo '<td><button type="button">' . $score['score'] . '</button></td>';
        echo '</tr>';
        }
    }

?>
