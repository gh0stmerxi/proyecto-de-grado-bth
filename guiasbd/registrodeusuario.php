<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> registro de usuario</title>
</head>
<body>

    <div class="containe">
        <div class="row mt-5">
            <div class="col">
                
            </div>
            <div class="col">
                <div class="card mt-5" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title text-center">registro de paciente</h5>
                      <h6 class="card-subtitle mb-2 text-muted text-center">Asistente de Ayuda Psicologica Emocional y Preventiva</h6>
                      <div class="form-floating mb-3" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">correo electronico</label> 
                      </div>
                      <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatinginput" placeholder="text">
                        <label for="floatinginput">nombre</label>
                      </div>
                      <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatinginput" placeholder="text">
                        <label for="floatinginput">apellido</label>
                      </div>
                      <div class="form-floating" style="margin-top: 10px;">
                        <input type="number" class="form-control" id="floatinginput" placeholder="number">
                        <label for="floatinginput">telefono</label>
                      </div>
                      <div class="form-floating" style="margin-top: 10px;">
                        <input type="number" class="form-control" id="floatinginput" placeholder="number">
                        <label for="floatinginput">edad</label>
                      </div>

                      
                      
                      <div class="d-grid gap-2" style=" margin-top: 40px;">
                        <button class="btn btn-primary" type="button">Ingresar</button>
                        <button class="btn btn-outline-danger" type="button">Cancelar</button>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col">
            
            </div>
        </div>
    </div>


    <?php
     /* conexion al servidor */
     $cn = mysqli_connect('localhost','root','','asistente psicologico');
    

     /* consultando la tabla pacientes */
     $cliente='Chae Hyungwon'
    
     ?>
     </body>
</html>