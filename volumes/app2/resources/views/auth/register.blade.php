<?php


?>
<form method = "POST" action="/register">
@csrf
    <div>
        <label style = "display:inline-block">Name</label>
        <input style = "display:inline-block" type = "text" name = "name"/>
    </div>
    <div>
        <label style = "display:inline-block">email</label>
        <input style = "display:inline-block" type = "text" name = "email"/>
    </div>
    <div>
        <label style = "display:inline-block">password</label>
        <input style = "display:inline-block" type = "text" name = "password"/>
    </div>
    <input type = "submit">
</form>