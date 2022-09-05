<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
@if(!session('user_name'))
    <form method='post' action="/set/name">
        @csrf
        Enter your name:<br/><br/>
        <input type="text" name="user_name"/>
        <br/><br/>
        <input type='submit' value='Send'><br/><br/>
    </form>
@else
    Hello, {{session('user_name')}} <br />
@endif

</body>
</html>
