<footer>
    <section class="container">
      <section class="row">
        <section class="col-md-3 footer-item">
          <h4>Libreria</h4>
          <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
          <ul class="social-icons">
            <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </section>
        <section class="col-md-3 footer-item">
          <h4>Links</h4>
          <ul class="menu-list">
            <li><a href="#">Vivamus ut tellus mi</a></li>
            <li><a href="#">Nulla nec cursus elit</a></li>
            <li><a href="#">Vulputate sed nec</a></li>
            <li><a href="#">Cursus augue hasellus</a></li>
            <li><a href="#">Lacinia ac sapien</a></li>
          </ul>
        </section>
        <section class="col-md-3 footer-item">
          <h4>Subpaginas</h4>
          <ul class="menu-list">
            <li><a href="#">Catalogo</a></li>
            <li><a href="#">Pedido</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </section>
        <section class="col-md-3 footer-item last-item">
          <h4>Contacto</h4>
          <section class="contact-form">
            <form id="contact footer-contact" action="" method="post">
              <section class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre" required="">
                  </fieldset>
                </section>
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo" required="">
                  </fieldset>
                </section>
                <section class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensaje" required=""></textarea>
                  </fieldset>
                </section>
                <section class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Enviar mensaje</button>
                  </fieldset>
                </section>
              </section>
            </form>
          </section>
        </section>
      </section>
    </section>
  </footer>
  
  <section class="sub-footer">
    <section class="container">
      <section class="row">
        <section class="col-md-12">
          <p>
              Copyright © 2023 LibreriaAngomas
              
          </p>
        </section>
      </section>
    </section>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

</body>
</html>