<?php
include 'pages/header.php';
include 'pages/navbar.php';
?>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper card" >
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h3 style="color:  #FFFFFF">List of NOC's</h3>
					</div>
					<div class="col-sm-6">
						<!-- <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-download">&#xE147;</i> <span> Download </span></a>						 -->
						<span>Search</span><input type="text" name="search" class="form-control inner-textfield">
					</div>
				</div>
			</div>
			<table class="table  table-striped table-hover">
				<thead>
					<tr>
						<th>Memo No.</th>
						<th>Company Information</th>
						<th>Head Count</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="./details.php">22.01.0000.101.23.113.2021.1887</a></td>
						<td>M/S.S.A International,Ashkona Haji Camp Road<br>Ashkona,Dakshinkhan,Dhaka-1230</td>
						<td>35</td>
						<td>14/05/22</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>
					<tr>
					<td><a href="./details.php">22.01.0000.101.23.113.2021.460</a></td>
						<td>M/S Mother Blessed Export Import, Bogura Sadar<br>Bogura</td>
						<td>100</td>
						<td>19/01/2022</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>	
					<tr>
					<td><a href="./details.php">22.01.0000.101.23.113.2021.529</a></td>
						<td>M/S Abid Enterprise,Plot No.89,Sayed Grand Centre,Sector-7.Uttara<br>Dhaka</td>
						<td>100</td>
						<td>03/02/2021</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>	
					<tr>
					<td><a href="./details.php">22.01.0000.101.23.113.2021.1460</a></td>
						<td>M/S.Feather World,Ka-32/A,Nadda,Gulsan<br>Dhaka</td>
						<td>60</td>
						<td>27/03/2022</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>	
					<tr>
					<td><a href="./details.php">22.01.0000.101.23.113.2021.1508</a></td>
						<td>M/S I.S. Entertaiment Pvt.Ltd,<br>Dhaka</td>
						<td>02</td>
						<td>30/03/2022</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>	
					<tr>
					<td><a href="./details.php">22.01.0000.101.23.113.2021.529</a></td>
						<td>M/S Mridha International,Ashkona Haji Camp Road,Dakkhinkhan<br>Dhaka</td>
						<td>300</td>
						<td>02/03/2021</td>
						<!-- <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td> -->
					</tr>				
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Download</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Head Count</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Head Count</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include 'pages/footer.php';
?>