<?php

echo '
<table>
  <tr>
     <td>1x1</td>
     <td>1x2</td>
     <td>1x3</td>
  </tr>
  <tr>
     <td>2x1</td>
     <td>2x2</td>
     <td>2x3</td>
  </tr>
  <tr>
     <td>3x1</td>
     <td>3x2</td>
     <td>3x3</td>
  </tr>
</table>
';
?>
<?php
echo '
<table>';

 for($i=0; $i<3; $i++)
      { ?>
      <tr>
         <td><?php echo $i; ?>x1</td>
         <td><?php echo $i; ?>x2</td>
         <td><?php echo $i; ?>x3</td>
      </tr>
<?php } ?>
echo '
</table>
';


'

?>
