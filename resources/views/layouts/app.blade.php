<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Liverwire Crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="text/javascript"></script>
	 @livewireStyles
</head>
<body>

	{{$slot}}

	 
	
	@livewireScripts
	<script>
	 	window.livewire.on('StudentAdded',() =>{
	 		$('#addStudentModal').modal('hide');
	 	});

	 	window.livewire.on('StudentUpdated',() =>{
	 		$('#updateStudentModal').modal('hide');
	 	});
	 </script>
	 
</body>
</html>