<?php
include 'head.php';
?>
<div id="main-content">
    <h2>All Votes So Far</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM election";
      $result = mysqli_query($link, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>Id</th>
        <th>Voter's Name</th>
        <th>State</th>
        <th>L.G.A</th>
        <th>Candidate's Party</th>
		<th>Candidate's Name</th>
		<th>Candidate's Position</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['VotersName']; ?></td>
                <td><?php echo $row['VotersState']; ?></td>
                <td><?php echo $row['VotersLGA']; ?></td>
                <td><?php echo $row['CandidateParty']; ?></td>
                <td><?php echo $row['CandidateName']; ?></td>
				<td><?php echo $row['CandidatePosition']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($link);
  ?>
</div>
</div>
</body>
</html>
