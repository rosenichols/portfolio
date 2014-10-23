<?php $body_id = "homepage"; ?>
<?php include_once('includes/header.inc.php'); ?>

<div id="bannertext">
  <h1>What we do</h1>
  <p>The UK Lost Toys Association seeks to reunite children with their missing toys.</p>
  <p>Lost a toy? <a href="addmissing.php">List it here</a></p>
  <p><a href="showall.php">Browse all missing toys</a></p>
</div> <!-- end bannertext -->

<div id="latestlost">
  <h1>Latest lost toys</h1>

  <?php
  $query = mysql_query("SELECT * FROM `lt_item` ORDER BY date_lost DESC LIMIT 6");

  while ($add = mysql_fetch_assoc($query))
    $item[] = $add;

  foreach ($item as $item) {

    echo '<div class="itemlost">';

    echo '<p><strong>Type:</strong> ' . $item['item_type'] . '</p>';

    echo '<p><strong>Lost on</strong> ' . $item['date_lost'] . ' <strong>in</strong> ' . $item['location_lost'] . '</p>';

    echo '<p><strong>Description:</strong> ' . $item['description'];

    echo '</div>';
  } mysql_close();
  ?>


</div>

</div> <!-- end content -->

</div> <!-- end contentbg -->

</div> <!-- end banner -->

</body>

</html>
