<?php
include('includes/config.php');
$sql = "SELECT users.name, working_shifts.open_at, working_shifts.close_at,
TIMEDIFF(working_shifts.close_at, working_shifts.open_at) as timediff FROM working_shifts, users WHERE working_shifts.user_id = ".$_POST['id']." and users.id = ".$_POST['id']. " and
working_shifts.open_at is not null and working_shifts.close_at is not null
";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{
  ?>
  <tr class="list__item-data">
    <td></td>
    <td></td>
    <td><?php echo htmlentities($result->open_at);?></td>
    <td><?php echo htmlentities($result->close_at);?></td>
    <td><?php echo htmlentities($result->timediff);?></td>
  </tr>
  <?php
}} ?>