<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Arkademy</h5>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add">Add</button>
    </div>

     </div>

    <div class="container">
      <div class="card-deck mb-3 text-center"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Cashier</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              
                <tr>
                  <td>1</td>
                  <td>Pevita Pearce</td>
                  <td>Latte</td>
                  <td>Drink</td>
                  <td>10000</td>
                  <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Raisa Andriana</td>
                  <td>Cake</td>
                  <td>Food</td>
                  <td>20000</td>
                  <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Luthfi Widya Ekakusuma</td>
                  <td>Dalgona Coffe</td>
                  <td>Food</td>
                  <td>45000</td>
                  <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                  </td>
                </tr>
            
                </tbody>
    
              </table>
            </div>
        </div>
        </div>
     
    </div>


  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Nama Kasir</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Raisa Andriani</option>
          <option>Pevita Pearce</option>
          <option>Luthfi Widya Ekakusuma</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Drink</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Drink</option>
          <option>Food</option>
        </select>
      </div>
        <div class="form-group">
          <label >Nama Makanan</label>
          <input type="text" class="form-control"  >  
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Harga</label>
          <input type="text" class="form-control" >
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Nama Kasir</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Raisa Andriani</option>
          <option>Pevita Pearce</option>
          <option>Luthfi Widya Ekakusuma</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Drink</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Drink</option>
          <option>Food</option>
        </select>
      </div>
        <div class="form-group">
          <label >Nama Makanan</label>
          <input type="text" class="form-control"  >  
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Harga</label>
          <input type="text" class="form-control" >
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah benar akan menghapus</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
  </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

</body></html>