<?php
include 'pages/header.php';
include 'pages/navbar.php';

?>
<br>
<div class="container">
  <form class="card-body">
  <h3 class="table-title">New Application for NOC to import "Cage Birds"</h3>
  <br>
    <div class="form-group">
      <label for="usr">Company Information</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Company Address</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Representative's Name</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Representative's Contact Info</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Country of Origin</label>
      <input type="text" class="form-control" id="pwd">
    </div>
  </form>
  <table class="table table-striped table-hover card-body">
    <h3>Add Species</h3>
				<thead>
					<tr>
						<th>#</th>
						<th>Scientific Name</th>
            <th>General Name</th>
            <th>Cites Appendix Unlisted Status</th>
            <th>ICUN</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><i>Panthera tigris</i></td>
            <td>Royal Bengal Tiger</td>
            <td>CITES Appendix I (CITES)</td>
            <td>EN</td>
					</tr>
	</table>
		
  <form class="card-body">
  <div class="autocomplete form-group">
  <label for="">Scientific Name
      </label>
    <input id="myInput" type="text" name="myCountry"class="form-control col-lg-12">
  </div>
    <div class="form-group ">
      <label for="pwd">General Name
      </label>
      <input type="text" class="form-control col-lg-12" id="">
    </div>
    <div class="form-group">
      <label for="pwd">Quantity</label>
      <input type="text" class="form-control" id="pwd">
    </div>
    <div class="form-group">
  <label for="inputMessage">Note</label>
      <textarea name="career[message]" class="form-control" tabindex="4"
          placeholder="Write your comments" required></textarea>
    </div>
    <a class="btn btn-info"><i class="fa fa-plus">Add new</i></a>
</form>
</div>

    
  <?php
  
  include 'pages/footer.php';

  ?>