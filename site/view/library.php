<?php
session_start();
$pageTitle = 'Booking Room';

include '../model/database.php';
include 'init.php';
include 'navbar.php';
  
?>

<?php 
  
  $query  = "SELECT * FROM books ";
  $query .= "ORDER BY bookid DESC";

  $db = new MYSQLDatabase();
  $result = $db->query($query);
?>

<div class="container">
  <h2>The Library</h2>
  <p>Download What you need</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Book category</th>
        <th>Download</th>
      </tr>
    </thead>
    
    <?php
     
      while($row = mysqli_fetch_array($result)){
  
    ?>

    <tbody>
      <tr>
        <td> <?php echo $row['bookname']; ?></td>
        <td><?php echo $row['authorname']; ?></td>
        <td><?php echo $row['booktype']; ?></td>
        <td><a href="<?php echo $row['bookpdf']; ?>"><?php echo $row['bookname'];?></a></td>
      </tr>
  
  <?php
    }
  ?> 
    </tbody>
  </table>
</div>