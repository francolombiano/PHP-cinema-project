<!-- header.inc.php  -->

<!doctype html>
<html lang="fr">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Premier site en PHP : site avec la BDD cinema">
     <meta name="author" content="Yacine Djediden">
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <!-- Font family -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
     <!-- Icons Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <!-- mon style -->
     <link rel="stylesheet" href="assets/css/style.css">
     
     <title><?=$title?></title>
     

</head>

<body>
     <header>
    
          <nav class="navbar navbar-expand-lg fixed-top " >
               <div class="container-fluid">
        
                    <h1><a class="navbar-brand" href="index.php">MOVIES</a></h1>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- w-100 d-flex justify-content-end -->
                         <ul class="navbar-nav w-100 d-flex justify-content-end">
                              <!-- Lien vers la page d'accueil -->
                              <li class="nav-item">
                                   <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                              </li>
      
                              <!-- Menu déroulant avec les catégories -->
                              <li class="nav-item dropdown ">

                                   <a class="nav-link dropdown-toggle btn btn-danger" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Choisir une catégorie</a>

                                                                     
                                   <ul class="dropdown-menu dropdown-menu-light w-100">
                                 

                                        <li>
                                             <a class="dropdown-item text-dark fs-4" href="#">
                                                       Catégorie one
                                             </a>
                                        </li>
                                        <li>
                                             <a class="dropdown-item text-dark fs-4" href="#">
                                                       Catégorie two
                                             </a>
                                        </li>
                                        <li>
                                             <a class="dropdown-item text-dark fs-4" href="#">
                                                       Catégorie three
                                             </a>
                                        </li>

                                  
                                   </ul>
                              </li>
                              

                             

                              <!-- Lien ver le formulaire d'inscription -->
                                   <li class="nav-item">
                                        <a class="nav-link" href="register.php">Inscription </a>
                                   </li>
                                   <!-- Lien vers la page de connexion -->
                                   <li class="nav-item">
                                        <a class="nav-link" href="authentification.php">Connexion </a>
                                   </li>  

                              <li class="nav-item">
                                   
                                   <a class="nav-link" href="boutique/panier.php"><i class="bi bi-cart3 text-danger "></i></a>
                              </li> 
                              
                              
                         </ul>
                         
                    </div>
               </div>    
          </nav>
               
     </header>
