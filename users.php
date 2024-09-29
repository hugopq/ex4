<?php
    include('conn.php');
    
    $conn = mysqli_connect($dbHost, $dbuser, $dbpass, $dbschema);

    if(!$conn)
    {
        die("sem ligação à base de dados.");
    }

    $sql = "CALL get_all_users();";

    $result = mysqli_query($conn, $sql);

?>
    <table>
        <tr>
            <th>ID</th>
            <th>Utilizador</th>
            <th>Nome</th>
            <th>Morada</th>
            <th>Email</th>
        </tr>
    <?php               
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Username']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Address']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "</tr>";
            }
        }
        
    ?>
    </table>