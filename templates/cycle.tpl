<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    {literal}
        <style>
            .even{
                background: tomato;
            }
        </style>
    {/literal}
</head>
<body>
   <table width="600" border="1">
       <tr>
           <th>编号</th>
           <th>姓名</th>
           <th>年龄</th>
       </tr>
       {foreach $user as $k=>$v}
            <tr {if $k is even} class="even" {/if}>
                <td>{$v.id}</td>
                <td>{$v.username}</td>
                <td>{$v.age}</td>
            </tr>
       {/foreach}
   </table>
   <hr>
   <table width="600" border="1">
       <tr>
           <th>编号</th>
           <th>姓名</th>
           <th>年龄</th>
       </tr>
       {foreach $user as $k=>$v}
           <tr class="{cycle values='one,two,three'}">
               <td>{$v.id}</td>
               <td>{$v.username}</td>
               <td>{$v.age}</td>
           </tr>
       {/foreach}
   </table>
</body>
</html>