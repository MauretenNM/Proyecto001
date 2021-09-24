<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mauro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">   
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- Menú navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <a class="navbar-brand" href="#">Mauro Portfolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav> 
        <!-- Encabezado y avatar-->
        <header class= "container-fluid"> 
            <div class="row" style="height:680px; background-color:#5CBD9D">
                <div class="col-12 align-self-center text-center">
                    <img src="images/avatar.png" width="200px" alt="">
                    <h1>Dr. Mauro</h1>
                    <hr>
                    <p>Maestro Ferretero - Filósofo</p>
                </div>
            </div>
        </header>

        <section class= "container">
            <div class= "row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>PORTFOLIO</h2>
                    <hr class="style2">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/casita.png" alt="casita">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/torta.png" alt="casita">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/circo.png" alt="casita">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/casita.png" alt="casita">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/casita.png" alt="casita">
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="images/casita.png" alt="casita">
                </div>
            </div>
        </section>
        <section class="container-fluid">
          <div class="row justify-content-center py-5" style="background-color:#5CBD9D">
                <div class="col-12 text-center mt-5 mb-4">
                    <h2>ABOUT</h2>
                    <hr>
                </div>
                <div class="col-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, officia accusantium corrupti unde quidem id consectetur, dolore, dignissimos labore maxime doloremque amet minus temporibus reiciendis consequuntur provident explicabo velit ea.</p>
                </div>
                <div class="col-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, officia accusantium corrupti unde quidem id consectetur, dolore, dignissimos labore maxime doloremque amet minus temporibus reiciendis consequuntur provident explicabo velit ea.</p>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-outline-secondary">Free Download</button>
                </div>           
            </div>
        </section>
        <section class= "container">
            <div class= "row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>CONTACT ME</h2>
                    <hr class="style2">
                </div>
                <div class="col-8">
                    <form>
                        <div class="form-group">
                            <input type="Text" name="Name" class="form-control" id="Name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" class="form-control" id="Email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="Text" name="Phone" class="form-control" id="Phone"placeholder="Teléfono">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name= "msg" id="msg" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>


                
            </div>
        </section>
|   </body>
</html>




