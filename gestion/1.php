<html>
	<head>
		<title>Gestion</title>
		<script src="/jquery.min.js"></script>
		



		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="./assets/vendor/animate-css/vivify.min.css">

		<link rel="stylesheet" href="./assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="./assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
		<link rel="stylesheet" href="./assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
		<link rel="stylesheet" href="./assets/vendor/sweetalert/sweetalert.css"/>

		<!-- MAIN CSS -->
		<link rel="stylesheet" href="../html/assets/css/site.min.css">

		<style>
		    td.details-control {
		    background: url('./assets/images/details_open.png') no-repeat center center;
		    cursor: pointer;
		}
		    tr.shown td.details-control {
		        background: url('./assets/images/details_close.png') no-repeat center center;
		    }
		</style>


	</head>
	<body>
		<?php include('nav.php') ?>
		<div class="container box">
			<h2 style="color: yellow">Gestions des services</h2>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Ajouter</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Image</th>
							<th width="35%">Titre</th>
							<th width="35%">Detail</th>
							<th width="10%">Modifier</th>
							<th width="10%">Supprimer</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Ajouter des nouvelles images aux services</h4>
				</div>
				<div class="modal-body">
					<label>Titre de l'image</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<br />
					<label>Detail</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<br />
					<label>Choisir une image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Ajouter" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</form>
	</div>
</div>



<!-- Javascript -->
<script src="./html/assets/bundles/libscripts.bundle.js"></script>    
<script src="./html/assets/bundles/vendorscripts.bundle.js"></script>

<script src="./html/assets/bundles/datatablescripts.bundle.js"></script>
<script src="./assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="./assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="./assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="./assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="./assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="./assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->
<script src="./html/assets/bundles/mainscripts.bundle.js"></script>
<script src="./html/assets/js/pages/tables/jquery-datatable.js"></script>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Ajouter une image");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#first_name').val();
		var lastName = $('#last_name').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Format invalide");
				$('#user_image').val('');
				return false;
			}
		}	
		if(firstName != '' && lastName != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Tout les champ sont demander !!!");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('.modal-title').text("Modifier l'image");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Etes vous sur de vouloir supprimer cela ?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>