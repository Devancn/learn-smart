<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="header">头部</div>
    {block name ='main'}
        <div class="main">
            <div class="menu">
                菜单部分
            </div>
            {block name='content'}
                <div class="content">
                    主体
                </div>
            {/block}
        </div>
    {/block}
    <div class="footer">底部版权部分</div>
</body>
</html>