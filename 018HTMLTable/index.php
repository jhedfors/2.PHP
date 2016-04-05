<html>

<body>

  <table>


    <thead>
      <tr>
        <td>
          User #
        </td>
        <td>
          First Name
        </td>
        <td>
          Last Name
        </td>
        <td>
          Full Name
        </td>
        <td>
          Full Name in upper case
        </td>
        <td>
          Length of full name (without spaces)
        </td>
      </tr>
    </thead>
    <tbody>
    <?php

    $users = array(
       array('first_name' => 'Michael', 'last_name' => 'Choi'),
       array('first_name' => 'John', 'last_name' => 'Supsupin'),
       array('first_name' => 'Mark', 'last_name' => 'Guillen'),
       array('first_name' => 'KB', 'last_name' => 'Tonel')
    );
    // $rowNumber =1;
    foreach ($users as $key => $row) {
      echo "<tr class = 'row'>";
      echo "<td class = 'usernumber'>";
      echo $key+1;
        echo '</td>';
      foreach ($row as $key => $value) {
        // echo $value;

        echo "<td>$row[first_name] ";
        // var_dump($row);

        echo "</td>";
        echo "<td>$row[last_name] ";
        // var_dump($row);

        echo "</td>";
        echo "<td>$row[first_name] $row[last_name]";
        // var_dump($row);

        echo "</td>";
        // $uppercase = strtoupper($row[first_name]);
        // echo "<td>$uppercase";
        // // var_dump($row);

        echo "</td>";
      }

      echo "</tr>";
      // $rowNumber++;
      // var_dump($users);
    }

    ?>




      <tr>
        <td>

        </td>
      </tr>


    </tbody>
  </table>

</body>


<?php





?>

</html>
