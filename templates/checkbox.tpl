<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <label for="">请选择你的男神(可以多选哦):</label>
    {html_checkboxes name="man" values=$number output=$man}
    <hr>
    <label for="">请选择你的男神(可以多选哦):</label>
    {html_checkboxes name="man" options=$man1 selected=$selected}
</body>
</html>