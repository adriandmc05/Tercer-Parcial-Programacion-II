<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

 
 
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<div class="container">
				<a class="navbar-brand" href="#">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

	      

                </ul>

                <ul class="navbar-nav mr-3">

                	<li class="nav-item active">
	                    <a class="nav-link" href="{{ route('auth.index') }}">Ingresar <span class="sr-only">(current)</span></a>
	                </li>	
	                <li class="nav-item active">
	                    <a class="nav-link" href="{{ route('auth.create') }}">Registrate <span class="sr-only">(current)</span></a>
	                </li>	        
            </div>
		</div>
            

        </nav>	 
	
	<div class="container">
		<section>

			@yield('content')
		</section>
	</div>
		

 

</body>
</html>