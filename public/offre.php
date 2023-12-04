<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <img src="assets/img/logo.png" alt="image" width="70" height="70"/>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Evenements</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Statistiques</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost:8040/laravel-master/public/index.php">forum</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Carriere
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Déposer une offre</a>
        <a class="dropdown-item" href="#">Offres disponibles</a>
        <a class="dropdown-item" href="https://www.cci.univ-tours.fr/temoignages">Temoignages</a>
        
      </div>
    </li>
  </ul>
  <!--ul class="nav navbar-nav pull-right">
      <li>
        <a>Login</a>
      </li>
    </ul-->

<ul class="navbar-nav ml-auto">
           <li class="nav-item">
               <a class="nav-link" href="http://localhost:8040/laravel-master/public/index.php/login">Login</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="http://localhost:8040/laravel-master/public/index.php/register">Register</a>
          </li>
</ul>

</nav>

<div class="container text-center">
<a class="title" text center><strong><em> <span style=" font-size: 40px; color:#046380;text-decoration: underline;" >Nous contacter</span> </em></strong></a><br><br><br>
</div>

<div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
         <div class="container contact">
  <div class="row">
   
    <div class="col-md-9">
      <div class="contact-form">
        <div class="form-group">
         

          <div class="form-group">
          <label class="control-label col-sm-2" for="lname">titre:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="intitulé de l'offre" name="lname">
          </div>
        </div>
        
         <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Lieu:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="lieu" name="lname">
          </div>
        </div>

       
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">description:</label>
          <div class="col-sm-10">
          <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <input class="btn btn-lg btn-primary btn-block col-2 button button--primary js-form-submit form-submit form-control" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Envoyer" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
