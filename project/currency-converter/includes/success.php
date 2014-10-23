<at><?php if (isset($updated_time)) {echo date('j F Y H:i', strtotime($updated_time->updated));} else {echo date('j F Y H:i', $time);}
 ?></at>
<rate><?php echo sprintf("%.".$return_decimals."f", ($row_to->rate / $row_from->rate)) ?></rate>
<from>
  <code><?php echo $row_from->code ?></code>
  <curr><?php echo $row_from->curr_name ?></curr>
  <loc>
    <?php echo $row_from->countries ?> 
  </loc>
  <amnt><?php echo sprintf("%.2f", $amnt_from) ?></amnt>
</from>
<to>
  <code><?php echo $row_to->code ?></code>
  <curr><?php echo $row_to->curr_name ?></curr>
  <loc><?php echo $row_to->countries ?></loc>
  <amnt><?php echo sprintf("%.".$return_decimals."f", $converted) ?></amnt>
</to>