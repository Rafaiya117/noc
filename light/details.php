<?php
include 'pages/header.php';
include 'pages/navbar.php';
?>
<body>
<div class="container-xl ">
	<div class="card table-responsive">
		<div class="table-wrapper" >
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h3 style="color: #ffffff">Memo No: 22.01.0000.101.23.113.2021.1887</h3>
					</div>
					<!-- <div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-download">&#xE157;</i> <span> Download </span></a>						
						<span>Search</span><input type="text" name="search" class="form-control inner-textfield">
					</div> -->
				</div>
			</div>
			<div>
				<h5><strong>Company Information:<p>M/S.S.A International,Ashkona Haji Camp Road<br>Ashkona,Dakshinkhan,Dhaka-1230</p></strong></h5>
		          
				  <table class="table table-striped table-hover card-body">
				
					<tr>
                         <td><h5><strong>Representative :<p>SAMOCHIEF International<br>contact:01856907689</p></strong></h5></td>
						<td><h5><strong>Date Issued :<p><br>14/04/22</p></strong></h5></td>
						<td><h5><strong>Validity Date :<p><br>EXP/20/25</p></strong></h5></td>
					</tr>
				</table>
          </div>
            <h5>Accepted</h5>
			<table class="table table-striped table-hover card-body">
				<thead>
					<tr>
                         <th>Serial No.</th>
						<th>English Name</th>
						<th>Scientific Name</th>
						<th>Cites Appendix Unlisted Status</th>
						<th>IUCN</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mandarin Duck</td>
						<td><i>Aix galericulata</i></td>
						<td> CITES Appendix I (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>35</td>
					</tr>	
					<tr><td></td><td colspan="5"><strong>Note: </strong>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td></tr>
					<tr>
						<td>2</td>
						<td>Black Swan</td>
						<td><i>Cygnus atratus</i></td>
						<td> CITES Appendix II (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>02</td>
					</tr>	
					<tr><td></td><td colspan="5"><strong>Note: </strong></td></tr>
					<tr>
						<td>3</td>
						<td>Mute Swan</td>
						<td><i>Cygnus olor</i></td>
						<td> CITES Appendix II (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>30</td>
					</tr>	
					<tr><td></td><td colspan="5"><strong>Note: </strong>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td></tr>
			</table>

            <h5>Rejected</h5>
			<table class="table table-striped table-hover">
				<thead>
				<tr>
                         <th>Serial No.</th>
						<th>English Name</th>
						<th>Scientific Name</th>
						<th>Cites Appendix Unlisted Status</th>
						<th>IUCN</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>
				<tr>
						<td>1</td>
						<td>Mandarin Duck</td>
						<td><i>Aix galericulata</i></td>
						<td> CITES Appendix I (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>35</td>
					</tr>	
					<tr><td></td><td colspan="5"><strong>Note: </strong>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td></tr>
					<tr>
						<td>2</td>
						<td>Black Swan</td>
						<td><i>Cygnus atratus</i></td>
						<td> CITES Appendix II (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>02</td>
					</tr>	
					<tr><td></td><td colspan="5"><strong>Note: </strong></td></tr>
					<tr>
						<td>3</td>
						<td>Mute Swan</td>
						<td><i>Cygnus olor</i></td>
						<td> CITES Appendix II (CITES)<p>'C'</td>
						<td>LC</td>
                        <td>30</td>
					</tr>	
					
					<tr><td></td><td colspan="5"><strong>Note:</strong> Resttricted</td></tr>		
			</table>
            <a class="btn btn-info" href="./print.php" ><i class="fa fa-download">NOC Download</i></a>
		<a href="./report.php" class="btn btn-danger"><i class="fa fa-download">NOC Report Download</i></a>  
		</div>
	</div>        
</div>


<?php
include 'pages/footer.php';
?>