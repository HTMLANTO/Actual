<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXPORTACIÓN</title>
    
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="../cobranza/css/style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../cobranza/plugins/SweetAlert/dist/sweetalert2.min.css">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <a  href="https://onlinealarmkur.com/date/es/" target="_blank" type="button" class="btn btn-outline-info" >Calculadora de Dìas</a>
          
        </form>
      </div>
    </nav>
    
  </header>

    

  </head>
  <body class="fondo d-flex justify-content-center align-items-center vh-100">

    
    <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 35rem"
    >
    <form  action="index.php" method="post">
    <div class="text-center fs-1 fw-bold">COBRANZA</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-secondary">
        <i class="fa fa-money"></i>
        </div>
        <input
          class="form-control bg-light"
          type="number" id="factura" name="factura" required pattern="[0-9]+"
         minlength="1" maxlength="100" size="100"
          placeholder="Ingresa valor de la factura"
           title="Solo se permite números.Tamaño máximo: 10"
        />
        
       

      </div>
      <div class="input-group mt-2">
        <div class="input-group-text bg-secondary">
          <i class="fa fa-file"></i>
        </div>
        <input
          class="form-control bg-light"
          type="number" id="rete" name="rete" required pattern="[0-9]+"
         minlength="1" maxlength="100" size="100"
          placeholder="Ingresa valor de la Retención"
           title="Solo se permite números.Tamaño máximo: 10"
        />

        <div class="input-group mt-2">
          <div class="input-group-text bg-secondary">
            <i class="fa fa-list-alt"></i>
          </div>
          <input
            class="form-control bg-light"
            type="number" id="cobro" name="cobro" required pattern="[0-9]+"
           minlength="1" maxlength="100" size="100"
            placeholder="Ingresa recibo de cobro"
             title="Solo se permite números.Tamaño máximo: 10"
          />
          
        



           


          <?php 
          if(isset($_POST["factura"])){
          $factur = $_POST['factura'];
          $rete = $_POST['rete'];
          $recibo = $_POST['cobro'];
          
          
          $resultado= $factur - $rete + $recibo;
          
          
          
          
          
          
          
          
          echo "<script >
          alert('Resultado de Pago del cliente:$resultado');
          window.location.href='http://localhost/cobranza/#';
          </script>";
          }
          
          
          ?>
       


          
      
  <input  class="btn btn-outline-info text-dark w-100 mt-4 fw-semibold shadow-sm" type="submit" name="submit" value="Calcular"/>
</form> 
<script src="php/operacion.php"></script>
<script src="../cobranza/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
      
    </div>
  </body>
</html>

