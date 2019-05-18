<!--DOCTYPE html-->
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css" />

	<title>Listes Eleves</title>
</head>



<body>

		<header><br>
      <div class="Butretour">
           <a class="shadow p-2 btn btn-outline-primary" href="./accueilAuth.html" role="button">accueil</a>
       </div>
  <h1>Liste des élèves</h1> <br><br></header>

  
 
  
    <?php 

    $classe = $_GET["classe"];
    $conn = mysqli_connect("localhost","root","","WeebBase");
    $requete=mysqli_query($conn,"select `nom`,`prenom`,`classe` from `table_utilisateur` where `Classe` like '$classe' ");
    ?>






    <div class="col-sm"id="column3">

    <?php  
    $classe = $_GET["classe"];

    
    
    $reponse=mysqli_query($conn,"select `nom`,`prenom`,`classe` from `table_utilisateur` where `Classe` like '$classe' ");
    //$donnees = mysqli_fetch_array($reponse);
    $rowcount=mysqli_num_rows($reponse);
    $donnees = mysqli_fetch_all($reponse,MYSQLI_ASSOC);
 
    ?>
    
    <table class="tableau">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
            </tr>
    
            <tr>
                <td>
                    <?php 
            
                            for($i=0;$i<$rowcount;$i++){
                                echo $donnees[$i]['nom']."<br>";
                                
                               }   
                    ?>

                </td>

                <td>
                    <?php  
            
                            for($i=0;$i<$rowcount;$i++){
                                echo $donnees[$i]['prenom']."<br>";
    
                               }
                          
                    ?>
                </td>



                <td>
                    <?php  
            
                            for($i=0;$i<$rowcount;$i++){
                                echo $donnees[$i]['classe']."<br>";
    
                               }
                          
                    ?>
                </td>
            
   
        </table>
        
    </div>


    </body>
</html>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>