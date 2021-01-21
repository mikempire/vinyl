<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "vinylbd");
$connect->set_charset("utf8");
$output = '';

if(isset($_POST["query"])) {
    $search = explode(" ", $_POST["query"]);
    $count = count($search);
    $array = array();
    $i = 0;
    foreach ($search as $key) {
        $i++;
        if ($i < $count)
            $array[] = "CONCAT (author, title) LIKE '%" .$key. "%' OR ";
        else $array[] = "CONCAT (author, title) LIKE '%" .$key. "%'";
    }
    $sql = "SELECT * FROM goods WHERE " . implode("", $array);

    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $output .= "
            <a href='http://vinylnew.test/product/" . $row['id'] . "' target='_blank'>" . $row['author'] . " - " . $row['title'] . "</a><br>
            ";
    } echo $output;
    if ($output == false) {
        echo 'ничего не найдено';
    }
}

