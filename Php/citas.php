<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MEDPRIORITY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../Css/cita.css">
</head>

<body>
    <!---- <div class="contenedor_principal">-->
<section class="todo" id="">

<!--contenedor principal de el menu este dividido en 3 subcontenedore -->
    <div class="contenedor_menu">
        <div class="con_menu1"> <!--contendor 1 del contenedor principal de menu este contenedor esta divido en dos contenedores-->
            <div class="logoimagen"></div>  <!---contenedor de la imagen del  logo -->
            <div class="logoletrass"><p>MEDPRIORITY</p></div> <!---nombre del proyecto  -->
            <input type="checkbox" name="" id="check">
           <label for="check" class="mostrarmenu">&#8801</label> <!--hamburgesita -->
            
        </div><!--fin del contenedor 1 -->

        <div class="con_menu2"><!---contenedor 2 de cotenedor principal del menu -->
            <div class="con_internos1">
                <div class="opciones_menus"></div><!--contenedor basio para la ceparacion del logo y el menu -->
                <div class="opciones_menu"><a href="../MedPriority-main/index.php">Inicio</a></div>
                <div class="opciones_menu"><a href="#">Notificaciones</a></div>
                <div class="opciones_menu"><a href="#">Historia Clínica</a></div>
                <div class="opciones_menup"><a href="#">Agregar Citas</a></div><!---tiene una clase diferente para poder asignarle el color predeterminado -->
            </div>


            <div class="con_internos2"><!--contenedor numero 3 del contenedor principal del menu -->
                <div class="opciones_menud">  Cerrar sesión</div><!--contenedor de cerrar secion -->
                <div class="opciones_menudimagen"> </div> <!--contenedor de la imagen al lado de el cerrar secion --> 
            </div>

            <label for="check" class="escondermenu"> &#215</label> <!-- la equiz del menu-->
            
        </div>
    </div>




    <div class="contenedor_formulario"><!--contenedor principal de el formulario esta dividido en 3 contenedores tambien  -->

        <div class="cont_formulario1">
            <div class="contendor2">
                <div class="cont_formulario1_1">
                    <p>AGENDAR CITA </p>
                </div>
                <div class="cont_formulario1_2"> </div><!-- conttenedor de  la imagen usuario-->
            </div>
         <div class="linea"><hr></div>
           </div>

           <div class="responcilagendar"><!-- he puesto este para manejarlo en el responcil ya que se necesitaba de bajo de la linea y  fue la forma como intente  cumplir con el mockps-->
            <p>AGENDAR CITA </p>
        </div>
      <!--contenedor general  que tiene el formulario -->
        <div class="cont_formulario2">
            <div class="preguntasformulario2">
                <div class="pregunt_2">
                  <div class="r3"> <label for="tipo">Identificación: </label></div> 
                     <div class="r3">  <div class="tiposs"><?php echo $_SESSION['id'] ?></div> </div>
                </div>
                <div class="pregunt_2">
                  <div class="r3">  <label for="tipo">Tipo Identificación:</label></div>
                      <div class="r3"> <div class="tiposs"><?php echo htmlspecialchars($_SESSION['tipo_documento']) ?></div> </div>              
                </div>
            </div>
            <div class="preguntasformulario2">
                <div class="pregunt_2">
                  <div class="r3"> <label for="tipo">Nombre: </label></div> 
                     <div class="r3">   <div class="tiposs"><?php echo htmlspecialchars($_SESSION['nombre']) ?></div></div>
                </div>
                <div class="pregunt_2">
                  <div class="r3">  <label for="tipo">Edad:</label></div>
                      <div class="r3"> <div class="tiposs"><?php echo htmlspecialchars($_SESSION['edad']) ?></div> </div>              
                </div>
            </div>
            <div class="preguntasformulario3">
                <div class="pregunt_3">
                  <div class="r3">  <label class="tipo">Tipo de afiliación: </label></div>
                     <div class="r3"><div class="tiposs"><?php echo htmlspecialchars($_SESSION['telefono']) ?></div></div> 
                    
                </div>
                <div class="pregunt_3">
                 <div class="r3">  <label for="tipo">Trabajo:</label></div>
                      <div class="r3"><div class="tiposs"><?php  ?></div></div>
                    
                </div>
            </div>
            <div class="preguntasformulario4">
                <div class="pregunt_4">
                    <div  class="r3"><label class="tipo">Enfermedad:</label></div>
                  <div  class="r3">  <div class="tiposs"><?php  ?></div></div>
                </div>

                <div class="pregunt_4">
                    <div  class="r3"><label for="tipo">Nivel de gravedad: </label></div>
                   <div class="r3"> <div class="tiposs"><?php  ?></div></div>
                </div>
            </div>
           

        </div>


        <div class="raya"><hr></div><!-- raya divizora inferiror-->


        <!--contenedor  de fechas de la cita -->
        <div class="con_formulario3">
                <div class="separacion"></div>
            <div id="contenedor_citas" class="con_formulario_final1"><!--este contenedor tiene un id para poder clonarlo-->
                <div class="con_final">
                    <div  id="tipoci"  class="pregunt_5"><!-- el id es para poder no mostrarlo en los contenedores clonados -->
                        <label class="tipos">Tipo de cita:</label>
                        <select class="tipocita" name="tipocita"></select>
                    </div>
                </div>
              
                <div class="con_final">
                    <div class="pregunt_5">
                        <label >Fecha:</label> 
                        <input type="date" class="fechas" name="appointment-date">
                    </div>
                </div>
             
                
                <div class="con_final">
                    <div class="pregunt_5">
                        <label class="horas">Hora inicio:</label>
                        <input type="time" id="hora" name="hora">
                    </div>
                </div>
                <div class="con_final">
                    <div class="pregunt_5">
                        <label class="horas">Hora final:</label>
                        <input type="time" id="hora" name="hora">
                    </div>
                </div>
                <div class="con_final">
                    <div  id="añadir"   class="pregunt_5">
                        <label class="horas">Añadir cita:</label>
                        <button id="agendarCitaBtn" class="btnmas"></button>
                    </div>
                </div>
            </div>

            <!-- contenedor de el boton enviar mensaje y foto de la doctora -->          
            <div class="con_formulario_final2">
                <div class="con_final1">
                   
                    <div class="separacionbotton"></div> <!-- este div me sepaea el contenedor de fecha y hora de la cita con el boton enviar-->
                    <div class="final2"> <button type="submit" class="submit-btn">Enviar</button></div>
                    
                    <div class="mensaje"><h2>*La confirmación de su cita llegara en las proximas 24 horas, revisa que sus datos esten bien.</h2></div>
                </div>
                
                <div class="con_final2"> </div><!-- contenedor de imagen de la doctora -->
                <div class="mensaje2"><h2>*La confirmación de su cita llegara en las proximas 24 horas, revisa que sus datos esten bien.</h2></div>

            </div>

        </div>


    </div>
    </div>
</section>
<script src="./Js/menu.js"></script>

</body>

</html>