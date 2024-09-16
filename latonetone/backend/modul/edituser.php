<?php
$id=$GET_['userid'];
$sqlOut=$conn->query("SELECT*FROM tbuser WHERE userid="$id"");
$result=$sqlOut->fetch_array();
?>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname">
    </div>
    <div class="mb-3">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="btn">EDIT DATA</button>
  </form>