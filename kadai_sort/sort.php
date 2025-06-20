<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
<p>
    <?php
    function sort_2way(&$array, $order) {
        if ($order == 'asc') {
            sort($array, SORT_NATURAL | SORT_FLAG_CASE);
        } else {
            rsort($array, SORT_NATURAL | SORT_FLAG_CASE);
        }
    }

    $nums = array(15, 4, 18, 23, 10);
    $sort_order = isset($_GET['order']) ? $_GET['order'] : 'asc';

    if ($sort_order == 'asc') {
        echo "昇順にソートします。<br>";
    } else {
        echo "降順にソートします。<br>";
    }

    sort_2way($nums, $sort_order);

    foreach ($nums as $num) {
        echo $num . '<br>';
    }
    ?>
</p>
<p>
    <a href="?order=asc">昇順</a> | <a href="?order=desc">降順</a>
</p>
</body>
</html>
