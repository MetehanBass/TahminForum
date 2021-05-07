<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">
    Giriş
  </button>
  <button type="button" style="margin-left:1%;" class="btn btn-secondary" data-toggle="modal" data-target="#signupModal">
    Kayıt
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Giriş Yap</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="login.php" onsubmit = "return validation()" method="POST">
            <div class="form-group">
              <label>E-Posta</label>
              <input type="text" name="email" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label>Parola</label>
              <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rememberme">
              <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Giriş</button>
            <a href="#">Şifremi Unuttum</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kayıt Ol</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span id="message" ></span>
          <form action="register.php" id="form"method="POST">
          <div class="alert alert-danger display-error" style="display: none">
           </div>

            <div class="form-group">
              <div class="col-md-8 mb-4">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" name="username" class="form-control" id="username" data-parsley-checkusername data-parsley-checkusername-message='Kullanıcı Adı Zaten Kayıtlı.' placeholder="Kullanıcı Adı" value="">
              </div>
              <div class="col-md-8 mb-4">
                <label for="password">Parola</label>
                <input type="password" name="password" data-rule-password="true" class="form-control" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679&#9679;&#9679;&#9679;" value="">
              </div>
              <div class="col-md-8 mb-4">
                <label for="confirmPassword">Parola Tekrar</label>
                <input type="password" class="form-control" name="confirmPassword" data-rule-password="true" data-parsley-equalto="#password" data-parsley-error-message='' id="confirmPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679&#9679;&#9679;&#9679;" value="">
              </div>
              <div class="col-md-8 mb-4">
                <label for="email">E-Posta</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                  </div>
                  <input type="text" name="email" class="form-control" id="email" placeholder="E-Posta" data-parsley-type="email" data-parsley-type-message='' data-parsley-trigger="focusout" data-parsley-checkemail data-parsley-checkemail-message='E-Posta Adresi Zaten Kayıtlı.'>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 mb-3">
                <label for="city">Şehir</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Şehir">
              </div>
              <div class="col-md-6 mb-3">
                <label for="favTeam">Favori Takım</label>
                <input type="text" name="favTeam" class="form-control" id="favTeam" placeholder="Favori Takım">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check col-md-6 mb-3">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3">
                <label class="form-check-label" for="invalidCheck3">
                  <a href="#">Şartları Kabul Ediyorum.</a>
                </label>
              </div>
            </div>
            <hr>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            <button type="submit" name="submit" class="btn btn-primary">Kayıt Ol</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="recentevents.php?page=1">Son Olaylar</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ligler
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="forum.php?id=9&page=1">Spor Toto Süperlig</a>
          <a class="dropdown-item" href="forum.php?id=4&page=1">Premier Lig</a>
          <a class="dropdown-item" href="forum.php?id=5&page=1">Serie A</a>
          <a class="dropdown-item" href="forum.php?id=7&page=1">Bundesliga</a>
          <a class="dropdown-item" href="forum.php?id=6&page=1">La Liga</a>
          <a class="dropdown-item" href="forum.php?id=8&page=1">Ligue 1</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="forum.php?id=3&page=1">NBA</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<script>

  $(document).ready(function () {
    $('#form').validate({
      rules: {
        username: {
          required: true,
          maxlength:40
        },
         email: {
           required: true,
           email: true
         },
        password: {
          required: true,
          minlength: 6
        },
        confirmPassword: {
          required: true,
          equalTo: "#password"
        },
        city: {
          required: true,
          maxlength:15
        },
        favTeam: {
          required: true,
          maxlength:25
        }
      },

      messages: {
        username:{
          required: 'Kullanıcı Adı Gerekli',
          maxlength: 'Kullanıcı Adı Maksimum 40 karakterli olabilir.',
        },
         email: {
           required: 'E-Posta Gerekli.',
           email: 'Geçerli E-Posta Adresi Girin.',

         },
        password: {
          required: 'Parola Girin.',
          minlength: 'Parola En Az 6 Karakterli Olmalı.',
        },
        confirmPassword: {
          required: 'Parolayı Tekrar Girin.',
          equalTo: 'Parolalar Eşleşmiyor.',
        },
        city:{
          required: 'Şehir Gerekli',
          maxlength: 'Şehir Maksimum 15 karakterli olabilir.',
        },
        favTeam:{
          required: 'Favori Takım Gerekli',
          maxlength: 'Favori Takım Maksimum 25 karakterli olabilir.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });

  $(document).ready(function(){
    window.ParsleyValidator.addValidator('checkemail', {
      validateString:function(value){
        return $.ajax({
          url:'checkunique_email.php',
          method:'POST',
          data:{email:value},
          dataType:"json",
          success:function(data){
          return true;
          }
        });
      }
    });

    $('#form').parsley();

  });

  $(document).ready(function(){
    window.ParsleyValidator.addValidator('checkusername', {
      validateString:function(value){
        return $.ajax({
          url:'checkunique_username.php',
          method:'POST',
          data:{email:value},
          dataType:"json",
          success:function(data){
          return true;
          }
        });
      }
    });

    $('#form').parsley();

  });
</script>
