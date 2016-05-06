<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>你的分数是:{$score}</p>
    <p>你对应的等级是:
        {if $score == 100}
            A+
        {elseif $score < 100 && $score >=90}
            A
        {elseif $score < 90 && $score >=80}
            B
        {elseif $score < 80 && $score >=70}
            C
        {elseif $score < 70 && $score >=60}
            D
        {else}
            E
        {/if}
    </p>
</body>
</html>