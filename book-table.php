
    <!-- Page Content -->
    <section class="page-heading header-text">
      <section class="container">
        <section class="row">
          <section class="col-md-12">
            <h1>Pedidos</h1>
            
          </section>
        </section>
      </section>
    </section>

    <section class="callback-form contact-us" style="margin: 0">
      <section class="container">
        <section class="row">
          <section class="col-md-8">
            <section class="contact-form">
              <form id="contact" action="regpedidos.php" method="get">
                <section class="row">
                  <section class="col-sm-6">
                    <fieldset>
                      <input type="text" name="Fecha" class="form-control" placeholder="fecha" required="">
                    </fieldset>
                  </section>
                  <section class="col-sm-6">
                    <fieldset>
                      <input type="text" name="Hora" class="form-control" placeholder="hora" required="">
                    </fieldset>
                  </section>
                  <section class="col-sm-6">
                    <fieldset>
                      
                      <select class="form-control" name="Size">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">5</option>
                        
                      </select>
                    </fieldset>
                  </section>
                  <section class="col-sm-6">
                    <fieldset>
                      <input type="text" name="Nombre" class="form-control" placeholder="Libro" required="">
                    </fieldset>
                  </section>
                  <section class="col-lg-12">
                    <fieldset>
                      <textarea name="Notas" rows="6" class="form-control" id="Notas" placeholder="Notas" required=""></textarea>
                    </fieldset>
                  </section>
                  <section class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Pedir</button>
                    </fieldset>
                  </section>
                </section>
              </form>
            </section>
          </section>

          <section class="col-md-4">
            <label>Email</label>
            <p><a href="#"><i class="fa fa-envelope"></i> LibreriaAngomas@company.com</a></p>

            <br>

            <label>Phone</label>
            <p><a href="#"><i class="fa fa-phone"></i>  +1 333 4040 5566</a></p>

            <br>

            <label>Address</label>
            <p><i class="fa fa-map-marker"></i>  Av independencia km 8 1/2</p>
          </section>
        </section>
      </section>
    </section>
