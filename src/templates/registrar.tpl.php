
<!DOCTYPE html>
<html>
<head>
    <title>Registrar</title>
    <style type="text/css">
        *{margin: 0px; padding: 0px;}
        body{margin: 0px;}
        .container{width: 100%;height: 100%;}
        .formulario{margin-left: 440px; position: absolute;background-color: lavender;top:100px;opacity: 0.9;font-family: sans-serif;}
        .imagen1{width: 100%;height: 100%;}
        form{height: 200px;text-align: right;margin-right: 50px;margin-top: 50px;}
        label{margin: 20px;}

        h1{margin: 50px;}

    </style>
</head>
<body>
<div class="container">
    <img class="imagen1" src="src/public/img/header-bg4.jpg">

    <div class="formulario">
        <h1><?=$title; ?></h1>

        <form action="/registrar/registrar" method="post">
            <label for="nom">Nombre</label>
            <input type="text" name="user" placeholder="Introduce tu nombre"><br><br>
            <label for="pasw">Contraseña</label><input type="password" name="pwd" placeholder="Contraseña nueva"><br><br>
            <input type="submit" name="submit" value="Registrar"><br>




        </form>
    </div>
</div>
</body>
</html>