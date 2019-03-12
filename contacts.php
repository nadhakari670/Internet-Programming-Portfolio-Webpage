<?php
$con=mysqli_connect("localhost","root","","portfolio");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM contacts");

?>
<html>
<head>
    <title>Contact List</title>
    <link rel="stylesheet" href="css/contacts.css"/>
</head>
<body>
    <div id="main">
    <h1>Contact Infromations</h1><br>
    <table class="data-table">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $count=1;    
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" .$count."."."</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
        $count = $count + 1;
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
        <input class ="home" type="button" value="GO TO HOME PAGE" onclick="window.location.href='Portfolio.html'" />
                </td>
            </tr>
        </tfoot>
    </table> 
    
    </div>

</body>
</html>