<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <ul>
        {*section只针对连续的索引数组*}
        {section name='index' loop=$hero}
            <li>{$hero[index]}</li>
        {/section}
    </ul>
    {*变量修饰符函数间用:分隔*}
    <p>{$peom|truncate:15:'*'|upper}</p>
    <p>现在时间:{$smarty.now|date_format:'%Y-%m-%d %T'}</p>
    <p>现在时间:{$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}</p>
    <p>{'hello'|str_repeat:$num}</p>
</body>
</html>