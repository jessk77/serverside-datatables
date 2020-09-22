<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>DataTables Server Side</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- DataTable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >

  <style type="text/css">
   body {
    padding-top: 3.5rem;
  }
</style>
<script>
  base_url="<?php echo base_url(); ?>"
</script>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="#">DataTables</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
  </nav>

  <main role="main">

    <div class="jumbotron">
      <div class="container">
        <h2 class="display-4">DataTables with Server Side</h2>
        <h4>And Codeigniter</h4>
        <p>There are many ways to get your data into DataTables, and if you are working with seriously large databases, you might want to consider using the server-side options that DataTables provides. With server-side processing enabled, all paging, searching, ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set. As such, each draw of the table will result in a new Ajax request being made to get the required data.</p>
        <p></p>
      </div>
    </div>

    <div class="container">
      <h2>Complete Example</h2>
      <p>Posts and authors example with database Join</p> <br>
      <div class="table-responsive">
        <table id="table_id" class="display table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Date</th>
              <th>Author</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
      
      <br>
      <hr>

    </div> <!-- /container -->

  </main>

  <footer class="container">
    <!-- <p>&copy; Atomikod <?php echo date("Y"); ?></p> -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- DataTable Javascript -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
  <!-- javascript for server side -->
  <script src="<?php echo base_url(); ?>js/datatable.js"></script>
</body>
</html>
