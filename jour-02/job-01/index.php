<?php








function find_all_students(){
    try
    {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=lp_official', 'root', '');
       // var_dump($bdd);
    }
    catch (PDOException $e)
    {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
    $displayUsers = $bdd->prepare("SELECT * FROM student");
    $displayUsers->execute([
    ]);
    $result = $displayUsers->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    return $result;
}

$allStudents = find_all_students();
?>

<table>
  <thead>
    <tr>
      <th colspan="1">Id</th>
      <th colspan="1">grade_id</th>
      <th colspan="1">email</th>
      <th colspan="1">fullname</th>
      <th colspan="1">birthdate</th>
      <th colspan="1">gender</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i <= 24; $i++) { ?>
        <tr>
        <td><?=$allStudents[$i]["id"];?></td>
        <td><?=$allStudents[$i]["grade_id"];?></td>
        <td><?=$allStudents[$i]["email"];?></td>
        <td><?=$allStudents[$i]["fullname"];?></td>
        <td><?=$allStudents[$i]["birthdate"];?></td>
        <td><?=$allStudents[$i]["gender"];?></td>


      </tr>
    <?php }   ?>

  </tbody>
</table>

