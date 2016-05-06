<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    {literal}
        <style>
            h1{
                color:tomato;
            }
        </style>
    {/literal}
</head>
<body>
    {*
    注释内容不能嵌套
    *}
    <h1>{$title}</h1>
    <p>{$content|mytool:'这是自定义的变量调节器'}</p>
    <div>{$money}</div>
    <div>{$yes}</div>
    <ul>
        <li>{$hero[0]}</li>
        <li>{$hero[1]}</li>
        <li>{$hero[2]}</li>
        <li>{$hero[3]}</li>
        <li>{$hero[4]}</li>
    </ul>
    <ul>
        <li>{$weapon['dx']}</li>
        <li>{$weapon['xh']}</li>
        <li>{$weapon['nd']}</li>
        <li>{$weapon['bg']}</li>
    </ul>
    <hr>
    <ul>
        <li>{$weapon.dx}</li>
        <li>{$weapon.xh}</li>
        <li>{$weapon.nd}</li>
        <li>{$weapon.bg}</li>
    </ul>
    <p>{$smarty.now}</p>
    <p>{$smarty.server.SERVER_NAME}</p>
    <p>{$smarty.version}</p>
    <p>{$smarty.const.ROOT}</p>
    {config_load file='site.conf' section='chongyang'}
    {*smarty两种调用配置文件方式*}
    <footer style="color:{$smarty.config.color}">{#copyright#}</footer>
    <footer>{$smarty.config.police}</footer>
</body>
</html>