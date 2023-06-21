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
    <div class="container mt-5">
        <div class="d-flex justify-content-end ">
            <a href="<?= site_url('/userForm')?>" class="btn btn-Success">Add user</a>
        </div>
        <div class="d-flex justify-content-start mb-3">
            <p><b>Username: <?=session()->get('username')?></b></p>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-primary text-center  ">
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <?php
                            if (session()->get('u_type')==1){
                            ?>
                <th>Action</th>
                <?php 
                        }?>
            </thead>
            <tbody class="text-center   ">
                <?php
                if (!empty($users)) {
                    foreach ($users as $user) {
                        ?>
                        <tr>
                            <td>
                                <?= $user['first_name'] ?>
                            </td>
                            <td>
                                <?= $user['last_name'] ?>
                            </td>
                            <td>
                                <?= $user['address'] ?>
                            </td>
                            <?php
                            if (session()->get('u_type')==1){
                            ?>
                            <td><a href="<?= base_url('edit/'.$user['id'])?>" class="btn btn-primary">Edit</a>
                                <a href="<?= base_url('delete/'.$user['id'])?>" class="btn btn-danger">Delete</a>
                            </td>
                            <?php 
                        }?>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
       
  <?php if ($pager) :?>
              <?php $pagi_path='/dashboard'; ?>
              <?php $pager->setPath($pagi_path); ?>
              <?= $pager->links() ?>
                
    
    <?php endif ?> 
  </ul>
</nav>

      
        <div class="d-flex justify-content-end ">
            <a href="<?= site_url('/logout')?>" class="btn btn-primary">Logout</a>
        </div>
    </div>
</body>

</html>