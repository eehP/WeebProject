<!--<!DOCTYPE html>-->
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css" />

	<title>Trombinoscope</title>
</head>



<body>


		<header><br>
      <div class="Butretour">
           <a class="shadow p-2 btn btn-outline-primary" href="./accueilAuth.html" role="button">   accueil    </a>
       </div>
  <h1>Photo de classes</h1> <br><br></header>
  
 <div class="text-center " >
      
</div>
<section>


<div class="container">
  <div class="row">
    <div class="col-"id="Column1"><br><br><br><br><br><br>



    <div class="col-"id="Column2">  

<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../img/trombi_projet/2snd.jpg" class="d-block w-100" alt="pasimage1">
    <p>
  <h5 id="TxtPres">Classe de Seconde</h5></label>
   </p>
    </div>

    <div class="carousel-item">
      <img src="../../img/trombi_projet/premiere.jpg" class="d-block w-100" alt="pasimage2">
        <p>

   <h5 id="TxtPres">Classe de Premiere</h5>
     </p>
    </div>
      <div class="carousel-item">
    <div class="carousel-item active">
      <img src="../../img/trombi_projet/terminal.jpg" class="d-block w-100" alt="pasimage3">

   <p>
  <h5 id="TxtPres">Classe de terminale</h5></label>
   </p>

    </div>
  </div>


  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
  </div>

</section>

    </div>
    <div class="col-sm"id="column3">
  
    </div>
  </div>
  
  <form action="" method="POST">
      <div class="menu">
            <div class="form-group">
                <label for="class" class="col-sm-2 control-label" >classe:</label>
                <div class="col-sm-2">
                <select class="form-control" name="classe">
                    <option value="Seconde">Seconde</option>
                    <option value="Premiere">Premiere</option>
                    <option value="Terminale">Terminale</option>
                </select> 
                <div class="ButListeEleve">
                <input type="submit" value="voir les éleves" class="shadow p-2 btn btn-outline-primary" name ="submit">         
                </div>
                </div>
            </div>          
      </div>
  </form>


  <div class="Error">
  <?php

    if(isset($_POST['submit'])){
       if (!empty($_POST['classe'])){
            $conn = mysqli_connect("localhost","weeb","weeb","WeebProject");
            $classe=$_POST['classe'];
            $result=mysqli_query($conn,"select `Nom`,`Prenom`,`Classe` from `Table_utilisateur` where `Classe` like '$classe' ");
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
            $rowcount=mysqli_num_rows($result);
            if($rowcount>0){

                header('Location: ../Auth/ListeEleve.php?classe=' . $_POST['classe']);
            }
            else
                echo "<a style='color:red;'>il n'y a pas d'eleves dans la classe $classe</a>";
            }
          }
  
  ?>

  </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>





</html>