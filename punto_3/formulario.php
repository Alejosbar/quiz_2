<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="login.php" method="POST">
      <div class="row" style="padding-top: 100px">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <div class="col">
          <input name="fecha_nacimiento" data-date-format="dd/mm/yyyy" id="datepicker">
        </div>
        <script type="text/javascript">
          $(function() {
            $('#datetimepicker1').datetimepicker();
          });
        </script>
      </div>
      <div class="form-group">
        <label for="nombres">Nombres</label>
        <input name="nombres" type="text" class="form-control" id="nombres">
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input name="apellidos" type="text" class="form-control" id="apellidos">
      </div>
      <div class="form-group">
        <label for="asunto">Asunto</label>
        <input name="asunto" type="text" class="form-control" id="asunto">
      </div>
      <div class="form-group">
        <label for="numero_documento">Número de documento</label>
        <input name="numero_documento" type="text" class="form-control" id="numero_documento">
      </div>
      <div class="form-group">
        <label for="exampleMensaje">Mensaje de texto</label>
        <textarea class="form-control" id="exampleMensaje" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="documento">Documento</label>
        <select name="tipo_documento" type="text" id="tipo_documento" class="form-control">
          <option selected>Seleccione tipo de documento</option>
          <option> CC</option>
          <option>TI</option>
          <option>CE</option>
          <option>PS</option>
          <option>Otro</option>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#datepicker').datepicker({
      weekStart: 1,
      daysOfWeekHighlighted: "6,0",
      autoclose: true,
      todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
  </script>
</body>

</html>