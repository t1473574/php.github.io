<br>
<div class="container mt-3">
<a href="?page=adduser" class="btn btn-primary">Tambah User</a>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>no urut</th>
      <th>username</th>
      <th>password</th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $sqlOutput = $conn->query("SELECT*FROM tbuser");
    while ($result = $sqlOutput->fetch_array()){
    ?>
    <tr>
      <td><?=$no++?></td>
      <td><?=$result['username']?></td>
      <td><?=$result['password']?></td>
      <td><a href="?page=edituser&id<?=$result['userid']?>" class="btn btn-success">Edit</a>
      <a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

  
