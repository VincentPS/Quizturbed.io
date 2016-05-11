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

        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>' . $param1 . '</th>';
        echo '<th>' . $param2 . '</th>';
        echo '</tr>';
        echo '</thead>';
        echo '</tbody>';

        foreach ($scores as $score) {
        echo '<tr>';
        echo '<td>' . $score['user'] . '</td>';
        echo '<td>' . $score['score'] . '</td>';
        echo '</tr>';
        }
    }

?>
