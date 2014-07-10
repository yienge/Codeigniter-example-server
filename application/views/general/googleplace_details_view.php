<html>

<head>
    <title>
        Google place details
    </title>
</head>

    <body>

<?php
    echo '<table border="2px">';
    foreach ($details_array['result'] as $key => $value){
        echo '<tr>';
        echo '<td>'.$key.'</td><td>'.$value.'</td>';
        echo '</tr>';
    }   
    echo '</table>';
?>

    </body>
</html>
