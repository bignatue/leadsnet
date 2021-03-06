<?php 
  include'../include/header.php';
  include'../include/menu.php';
?>

<nav aria-label="breadcrumb breadcrumb-sm">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="lead/index.php">Home</a></li>
    <li class="breadcrumb-item active">My order</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-3">
    <?php include'../include/account-sidebar.php';?>
  </div>
  <div class="col-md-6">
    <h5>My order</h5>
    <table class="table table-hover table-striped table-sm">
      <caption>Total number of leads 8</caption>
      <thead>
        <tr> 
          <th>Lead ID</th>
          <th>Date Posted</th>
          <th>P. Code</th>
          <th>Lead Type</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <td>21345</td>
          <td>10/10/2018</td>
          <td>2243TR</td>
          <td>Standard Lead</td>
          <td>€ 39.99</td>
          <td>
          	<a href="" class="btn btn-link btn-sm py-0" data-toggle="modal" data-target="#leaddetails"><i class="fas fa-eye"></i></a>
          	<a href="" class="btn btn-link btn-sm p-0"><i class="fas fa-trash text-danger"></i></a>
          </td>
        </tr>
      </tbody>
    </table>



    <!-- Modal -->
    <div class="modal fade" id="leaddetails" tabindex="-1" role="dialog" aria-labelledby="leaddetailsLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="leaddetailsLabel">LEAD INFO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-sm">
              <tr>
                <th width="50%" class="border-0">Lead type:</th>
                <td class="border-0">Standard Lead</td>
              </tr>
              <tr>
                <th>Applicant wants to sell property:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>Reason for the sale:</th>
                <td>Unknown</td>
              </tr>
              <tr>
                <th>Scheduled sales term:</th>
                <td>2018</td>
              </tr>
              <tr>
                <th>Type of house:</th>
                <td>Between home</td>
              </tr>
              <tr>
                <th>Year:</th>
                <td>1978</td>
              </tr>
              <tr>
                <th>Visitor confirmation confirmed:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>For Contact:</th>
                <td>Ja</td>
              </tr>
              <tr>
                <th>Additional information:</th>
                <td>Hoewel wij onze uiterste best doen om ‘nepleads’ uit te sluiten, is dit niet altijd mogelijk.</td>
              </tr>
            </table>
            
          </div>
          <div class="modal-footer">
	          	<div class="col-md-5">
		          	<input type="text" class="form-control form-control-sm rounded-0" name="" placeholder="Enter token">
		          </div>
		         <div class="col-md-2">
		            <button type="button" class="btn btn-block btn-primary btn-sm rounded-0">Get this now</button>
		        </div>
		        <div class="col-md-5 text-right">
	            	<button type="button" class="btn btn-primary btn-sm rounded-0" data-dismiss=""><i class="fas fa-cart-plus"></i> Add to purchase token</button>
	            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

    <hr>
    <div class="text-right">
      <a class="btn btn-primary btn-sm" href="lead/payment-confirmation.php" role="button">Pay now ››</a>
    </div>
  </div>
  <div class="col-md-3 pt-2 hideonmobile">
    <?php include'../include/total-summary.php';?>
  </div>
</div>

<?php include'../include/footer.php';?>