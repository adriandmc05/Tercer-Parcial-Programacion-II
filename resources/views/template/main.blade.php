<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

 
 
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<div class="container">
				<a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

	                <li class="nav-item active">
	                    <a class="nav-link" href="#">barra <span class="sr-only">(current)</span></a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">barra</a>
	                </li>
                 
	                <li class="nav-item">
	                    <a class="nav-link " href="#">barra</a>
	                </li>

	               <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          barra
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="">barra</a>
				          <a class="dropdown-item" href="#">barra</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">barra</a>
				        </div>
 				    </li>

                </ul>

                <ul class="navbar-nav mr-3">
	                <li class="nav-item active">
	                    <a class="nav-link" href="#">Cerrar sesión <span class="sr-only">(current)</span></a>
	                </li>	        
            </div>
		</div>
            

        </nav>	 

		<section>
			@yield('content')
		</section>

 

</body>
</html>