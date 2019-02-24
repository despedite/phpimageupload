<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Subir una Imagen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

<!-- Code for Bootstrap to work properly -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
	 		margin-top: 10%;
			margin-bottom: 100%;
	 		margin-right: 30%;
			margin-left: 30%;
		}
	</style>
    <link href="Signin%20Template%20%C2%B7%20Bootstrap_files/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
    	  <img class="mb-4" src="camera.png" alt="" width="72">
 			 <h1 class="h3 mb-3 font-weight-normal">Image Hosting</h1>
 		<div class="custom-file">
  			<input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
  			<label class="custom-file-label" for="customFile">Select a file</label>
  			<input class="btn btn-lg btn-primary btn-block" type="submit" value="Upload Image" name="submit">
		</div>
  	<p class="mt-5 mb-3 text-muted">© erikbianco.me<span title="Camera by Nesi Ratna Nilasari from the Noun Project">†</span></p>
	</form>

	<!-- JS para mostrar el nombre del archivo -->
	    <script>
            $('#fileToUpload').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
</body>
</html>
