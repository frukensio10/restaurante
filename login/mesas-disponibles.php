<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../login/static/css/mesas.css">
  
    <title>Restaurante</title>
   <script language="javascript" type="text/javascript">
window.onload = function() {
var td= document.getElementsByTagName('td');
for (var i= 0; i < td.length; i++) {
td[i].onclick = function() {
this.className = this.className == "red" ? "green" : "red";
   }
}

};
  </SCRIPT>
<style type="text/css">
.red { background: #FE0C01;}
.green {background:#69FE01 ;}


td{
  text-align: center;
  border-width: medium;
  border-collapse: collapse;
  font-weight: bold;
  background-color: white;
}
h1{
  text-align: center;
  color: #1A5276;
}

 .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }

</style>
  </head>
  <body>
    <span><h1>MESAS DEL RESTAURANTE</h1> </span>
    <table cellspacing="50" border="1" width="60%">
      <tr>

        <td>Mesa 1</td>

        <td>Mesa 2</td>

        <td>Mesa 3</td>

      </tr>

      <tr>

        <td>Mesa 4</td>

        <td>Mesa 5</td>

        <td>Mesa 6</td>

      </tr>
      <tr>

        <td>Mesa 7</td>

        <td>Mesa 8</td>

        <td>Mesa 9</td>

      </tr>
      <tr>

        <td>Mesa 10</td>

        <td>Mesa 11</td>

        <td>Mesa 12</td>

      </tr>
  </table>
  </body>
  <br>
  <table style="width: 30%">
  <a class="boton_personalizado" href="plantilla-camarero.php">Volver al menú</a>
  </table>
</html>