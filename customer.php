<?php 
    include 'inc/functions/connection.php';
    include 'inc/functions/functions.php';
    include 'inc/templates/header.php';
?>

<div class="container">
<h2>Customer List</h2>
<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CUSTOMERID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">ADDRESS</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $clients =  getClients();
    if($clients ->num_rows > 0) {
        foreach($clients as $client) : ?>
        <tr>
        <th scope="row"><?php echo $client['customerID']; ?></th>
        <td><?php echo $client['firstname']; ?></td>
        <td><?php echo $client['lastname']; ?></td>
        <td><?php echo $client['email']; ?></td>
        <td><?php echo $client['cellphone']; ?></td>
        <td><?php echo $client['address']; ?>, <?php echo $client['city']; ?>, <?php echo $client['state']; ?> <?php echo $client['zipcode']; ?></td>
        </tr>
        <?php endforeach;
    }
    ?>
  </tbody>
</table>
</div>
        
<?php include 'inc/templates/footer.php'; ?>