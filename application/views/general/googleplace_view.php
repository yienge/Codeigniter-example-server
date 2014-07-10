<html lang="en">

<head>
    <title>
        Google place API test
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/application/views/general/gplace_style.css" />
</head>

<body onload="initialize()">
        <form name="add" action="/index.php/main/gplace" method="post">
                <div class="form_row">
                    <label class="contact"><strong>地點關鍵字:</strong></label>
                    <input type="text" class="contact_input" name="name" value="" size="50"/>
                </div>
                <br />
                <div class="form_row">
                    <label class="contact"><strong>靠近哪裡:</strong></label>
                    <input type="text" class="contact_input" name="addr" value="" size="50"/>
                </div>
                <br />
                <div class="form_row">
                    <label class="contact"><strong>範圍:</strong></label>
                    <select name="radius">
                        <option value="200">200</option>
                        <option value="400">400</option>
                        <option value="600">600</option>
                        <option value="800">800</option>
                        <option value="1000" selected>1000</option>
                    </select>
                </div>
                <br />
                <div class="form_row">
                    <label class="contact"><strong>類型:</strong></label>
                    <select name="types">
                        <option value="food">餐廳</option>
                        <option value="book_store">書店</option>
                        <option value="hospital">醫院</option>
                        <option value="gas_station">加油站</option>
                        <option value="library">圖書館</option>
                        <option value="movie_theater">電影院</option>
                        <option value="cafe">咖啡廳</option>
                        <option value="atm">提款機</option>
                        <option value="bank">銀行</option>
                    </select>
                </div>
                <br />
                <div class="form_row">
                    <input type="submit" class="register" value="尋找地點" />
                </div>
        </form>

                <br />
        <div id="result">
<?php
    if (isset($search_array)) {
    echo '<table border="2px">';
        foreach ($search_array['results'] as $row){
        echo '<tr>';
        echo '<td><p id="name">'.$row['name'].'</p></td>';
        echo '<td>'.$row['vicinity'].'</td>';
        echo '<td><p id="lat">'.$row['geometry']['location']['lat'].'</p></td>';
        echo '<td><p id="lng">'.$row['geometry']['location']['lng'].'</p></td>';
        echo '<td><img src="'.$row['icon'].'" /></td>';
        echo '<td><a href="/index.php/main/gplace_details/'.$row['reference'].'">詳細資訊</a></td>';
        echo '</tr>';
        }
        echo '</tr>';
    echo '</table>';
    }
?>
        </div>
        <div id="map_canvas" style="width:100%; height:100%"></div>

    <script src="/js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="/js/gmap.js"></script>
    <script type="text/javascript" src="/js/table_style.js"></script>
</body>

</html>
