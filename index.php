<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convercion de numeros binario </title>
</head>
<body>
    <h1>conversor a codigo binario </h1>

    <form name="form1" method="POST" action="calcular.php">

    <p>valor a combertir<input type="text" id="txtvalor"name="txtvalor">
        <select name="selnumeros">
              <option value="">seleccione...</option>
              <option value="bytes">Byte</option>
              <option value="kilobytes">Kilobyte</option>
              <option value="megabytes">Megabyte</option>
              <option value="gigabytes">Gigabyte</option>
              <option value="terabytes">Terabyte</option>

        </select>
    </p>
    <p>la conbercion a vinario es :</p>
    <p> <input type="radio"name="numeros"value="byte">Byte
        <input type="radio"name="numeros"value="kilobyte">Kilobyte
        <input type="radio"name="numeros"value="megabyte">Megabyte
        <input type="radio"name="numeros"value="gigabyte">Gigabyte
        <input type="radio"name="numeros"value="tirabyte">Tirabyte
   </p>
   <p>
       <input type="submit" name="btncalcular" value="calcular">
   </p>
    </form>
</body>
</html>