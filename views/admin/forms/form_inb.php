<fieldset>
      <body style="background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

          <legend style="font-size: 30px; color: #045A8A">Bandeja de Entrada...</legend>
            <form name="register" method="post" action="http://localhost/WebMail/app/Http/Controllers/Controller.php">
        
<table style="margin-top:20px;" class="table table-hover">
  <tbody></a></td>
    <tr>
      <th><input type="submit" name="btn-read" value="<?php echo $dest_msg;?>" class="btn-read"> 
      <td><input type="submit" name="btn-read" value="<?php echo $asunto_msg;?>" class="btn-read">     
    </td>
    <td></td>
      <td><input type="submit" name="btn-read" value="<?php echo $fecha_actual=date("d/m/Y"); ?>" class="btn-read"></td>
    </tr>
    <tr>
       <th scope="row">programacion@gmail.com</th>
      <td>Tienes nuevas notificaciones</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
     </tr>
         <th scope="row">Facebook</th>
      <td>Tienes nuevas mensajes</td>
        <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
      <th scope="row">kter90@gmail.com</th>
      <td>Documento para diligenciar</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">sena@gmail.com</th>
      <td>Actualiza tu contraseña</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
      <th scope="row">Facebook</th>
      <td>Te esperamos</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">Google</th>
      <td>Alerta de seguridad </td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
     </tr>
         <th scope="row">Facebook</th>
      <td>Tienes nuevas notificaciones</td>
        <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
      <th scope="row">LinkedIn</th>
      <td>Tienes nuevas actualizaciones</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">Mama</th>
      <td>Necesito un favor</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
 </tr>
</table>
              <p>
                <!-- Envio de datos ocultos -->
                <input type="hidden" name="genre" value="<?php echo $genre; ?>">
                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                <input type="hidden" name="correo" value="<?php echo $correo; ?>">
                <input type="hidden" name="dest_msg" value="<?php echo $dest_msg; ?>">
                <input type="hidden" name="asunto_msg" value="<?php echo $asunto_msg; ?>">
                <input type="hidden" name="msg" value="<?php echo $msg; ?>">
              </p>
            </form>
          </fieldset>
          <br><br>