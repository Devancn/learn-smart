<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <label for="">请选择你喜欢的:</label>
    {html_radios name="beauty" values=$number output=$beauty}
    <hr>
    <label for="">请选择你喜欢的:</label>
    {html_radios name="beauty" options=$beauty1 selected='002'}
</body>
</html>