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

        echo '<table class="leaderboard">
               <thead>
                <tr>
                 <th class="leaderboard-left"><button type="button" class="leaderboard-top">' . $param1 . '</button></th>
                 <th class="leaderboard-right"><button type="button" class="leaderboard-top">' . $param2 . '</button></th>
                </tr>
               </thead>
              </tbody>';

        foreach ($scores as $score) {
        echo '<tr>
               <td class="leaderboard-left">
                <button type="button" class="leaderboard-bottom">' . $score['user'] . '</button>
               </td>
               <td class="leaderboard-right">
                <button type="button" class="leaderboard-bottom score">' . $score['score'] . '</button>
               </td>
              </tr>';
        }
    }

?>
