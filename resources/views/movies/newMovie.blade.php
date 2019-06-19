<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Agregar Pelicula</title>
    </head>
    <body>
      <div class="container ">
        <div class="form-group col md-12">

          <form id="agregarPelicula" name="agregarPelicula" method="POST">
              <div>
                  <label for="titulo">Titulo</label>
                  <input type="text" class="form-control" name="titulo" id="titulo"/>
              </div>
              <div>
                  <label for="rating">Rating</label>
                  <input type="text" class="form-control" name="rating" id="rating"/>
              </div>
              <div>
                  <label for="premios">Premios</label>
                  <input type="text" class="form-control" name="premios" id="premios"/>
              </div>
              <div>
                  <label for="duracion">Duracion</label>
                  <input type="text" class="form-control" name="duracion" id="duracion"/>
              </div>
              <div class="form-group ">
                  <label>Fecha de Estreno</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control" name="dia">
                            <option value="">Dia</option>
                            <?php for ($i=1; $i < 32; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  <div class="col ">
                    <select class="form-control" name="mes">
                        <option value="">Mes</option>
                        <?php for ($i=1; $i < 13; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="col">
                    <select class="form-control" name="anio">
                        <option value="">Anio</option>
                        <?php for ($i=1900; $i < 2017; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <input type="submit" value="Agregar Pelicula" name="submit"/>
          </form>
        </div>
      </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
