<div>
              <h1>¡ME INTERESA ESTE TOUR!</h1>
              <form action="" id="form_interior360" accept-charset="utf-8" method="post">
                  <input type="hidden" name="url" id="hdnurlIntm" value="<?php echo $currentUrl; ?>"/>
                  <input type="hidden" name="titulo" id="hdntituloIntm" value="<?php echo $titulo; ?>"/>
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombreIntm" class="form-control form-interior" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="Nombre">
                  </div>

                  <div class="columna">
                      <input type="text" name="tel" id="txttelIntm" class="form-control form-interior" maxlength="10" placeholder="Teléfono">
                  </div>
  
                  <div class="columna">
                      <input type="email" name="email" id="txtemailIntm" class="form-control form-interior" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="Correo Electrónico">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentariosIntm" class="form-control comentarios-interior" placeholder="Comentarios"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigoIntm" class="form-control form-captcha-interior" placeholder="Escribe el código de la imagen" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_interior.php" class="captcha border-captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnInterior" name="btnInterior" value="ENVIAR" class="center-block boton-enviar-interior">
                  </div>
                  <div class="columna">
                      <span id="error_interiorm"></span>
                  </div>
              </form>
            </div>