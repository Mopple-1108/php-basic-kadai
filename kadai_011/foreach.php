<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $personal_date = [
            ['label' => '名前', 'value' => '玉ねぎ'],
            ['label' => '値段', 'value' => '200'],
            ['label' => '産地', 'value' => '北海道']
        ];

        foreach ($personal_date as $item) {
            echo $item['label'] . ': ' . $item['value'] . '<br>';
        }
        ?>
    </p>
</body>

</html>