<h1>My name is : <?php echo $name . ' I\'m ' . $age?> !</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
    </tr>
    <?php
    foreach($users as $user ){
        echo '<tr>';
        echo "<td>$user[id]</td>";
        echo "<td>$user[name]</td>";
        echo "<td>$user[age]</td>";
        echo '</tr>';
    }
    ?>
</table>