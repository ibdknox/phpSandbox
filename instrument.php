<html>
<head>
    <title>instrument page</title>
    <style type="text/css">
        body { background: LightBlue; font-family:Times: color:yellow}
        body.table {color:blue}
    </style>
</head>
<body class="table">
    <?php
    $IClass = $_POST["Class"];

    $connect = mysql_connect ('localhost','root', 'root') or die ('Could
            not connect:' . mysql_error());

    mysql_select_db("test", $connect) or die('Could not select test db');

    echo "helloworld";

    $query = "SELECT Instrument_ID, Instrument FROM Instrument where Class_ID
    = 'IClass'";
    $result = mysql_query("select * from Instrument");

/*while($row = mysql_fetch_array($result))
  {
  echo $row['Instrument_ID'] . " " . $row['Instrument'];
  echo "<br />";
  }
*/

    echo "<table border=1>";
        echo "<tr>";
            echo "<th>InstrumentID</th> <th>Instrument</th>";
        echo "</tr>";
        while ($row = mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['Instrument_ID'] ." </td>";
            echo "<td>" . $row['Instrument'] . "</td>";
            echo "</tr>";
        }
    echo "</table>";

    mysql_close($connect);
    
    ?>
</body>
</html>

