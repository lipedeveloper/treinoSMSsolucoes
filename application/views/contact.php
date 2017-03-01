<div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Contato
                  <small>envie uma mensagem e saiba como onde achar</small>
              </h1>
              <ol class="breadcrumb">
                  <li><a href="home">Home</a>
                  </li>
                  <li class="active">Contato</li>
              </ol>
          </div>
      </div>
     
      <div class="row">

          <div class="col-md-8">
              <form action="http://localhost/teste/contact/send" method="post" accept-charset="utf-8">
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Nome:</label>
                                                    <input type="text" class="form-control" id="name" name="name" required data-validation-require-dmessage="Please enter your name." value="">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Telefone:</label>
                                                    <input type="tel" class="form-control" id="telephone" name="telephone" required data-validation-required-message="Please enter your phone number." value="">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address." value="">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Mensagem:</label>
                                                    <textarea rows="7" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar mensagem</button>
                  <button type="reset" class="btn btn-default">Limpar</button>
              </form>          </div>
          <!-- Contact Details Column -->
          <div class="col-md-4">
              <h3>Detalhes do nosso contato</h3>
              <p>
                  3481 Melrose Place<br>Beverly Hills, CA 90210<br>
              </p>
              <p><i class="fa fa-phone"></i>
                  <abbr title="Phone">P</abbr>: (123) 456-7890</p>
              <p><i class="fa fa-envelope-o"></i>
                  <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
              </p>
              <p><i class="fa fa-clock-o"></i>
                  <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
              <ul class="list-unstyled list-inline list-social-icons">
                  <li>
                      <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                  </li>
              </ul>
          </div>
      </div>
  </div>