<?php
$arr = [2 => "пакетика травы",
    75 => "ампул мескалина",
    5 => "пакетиков диэтиламид d-лизергиновой кислоты или ЛСД",
    'солонка' => "наполовину заполненная кокаином",
    'и' => "целое море разноцветных амфитаминов",
    'барбитуратов' => "и транквилизаторов",
    'Чертов эфир,' => "после него развозит так",
    'что вы похожи на пьяницу' => "из старой ирландской новеллы:",
    'полная утрата двигательно-опорных навыков,' => "галюцинация потеря равновесия, немеет язык",
    'начинаются бояки,' => "отказывает позвоночник"];
$num = count($arr);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($arr as $key => $count)
{
    echo "[ $key ] $count<br />";
}; ?>
</body>
</html>
