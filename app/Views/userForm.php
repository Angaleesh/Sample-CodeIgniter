<html>

<head>
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>

<body>


    <div class="container col-6 mt-5">
    <form method="post" id="create" action=<?= site_url('/submit-form')?>>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Firstname :</label>
    <input type="text"  class="form-control" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lastname :</label>
    <input type="text"  class="form-control"  name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address :</label>
    <input type="text"  class="form-control"  name="address" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="<?=base_url()?>"><button type="button" class="btn btn-secondary">Back</button></a>
</form>
    </div>
</body>

</html>