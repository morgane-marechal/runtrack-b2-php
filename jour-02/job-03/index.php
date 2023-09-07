<?php
?>


<form action="" method="post" class="form-example">

  <div class="form-example">
    <label for="name">Entrer l'email : </label>
    <input type="email" name="email" id="email" required />
  </div>
  <div class="form-example">
    <label for="name">Entrer le nom complet: </label>
    <input type="text" name="fullname" id="email" required />
  </div>
  <div class="form-example">
    <label for="name">Genre: </label>
      <select name="gender" id="genre">
        <option value="male">Homme</option>
        <option value="female">Femme</option>
        <option value="neutral">Ne se prononce pas</option>
      </select>
  </div>
  <div class="form-example">
    <label for="name">Date de naissance: </label>
    <input type="date" name="birthdate" id="birthdate" required />
  </div>
  <div class="form-example">
    <label for="name">Grade: </label>
    <input type="number" name="grade" id="grade" required />
  </div>

  <div class="form-example">
    <input type="submit" value="Soumettre" />
  </div>
</form>


<?php

$email = htmlspecialchars($_POST["email"]);
$fullname = htmlspecialchars($_POST["fullname"]);
$gender = htmlspecialchars($_POST["gender"]);
$birthdate = $_POST["birthdate"];
$grade_id = $_POST["grade"];



echo $email;
echo $fullname;
echo $gender;
echo $birthdate;
echo $grade_id;



function insert_student($grade_id, $email, $fullname, $birthdate, $gender){
    try
    {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=lp_official', 'root', '');
       // var_dump($bdd);
    }
    catch (PDOException $e)
    {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
    $result = $bdd->prepare("INSERT INTO student (grade_id, email, fullname, birthdate, gender)
    VALUES (:grade_id, :email, :fullname, :birthdate, :gender)");
    $result->execute([
      'grade_id'=> $grade_id,
      'email' => $email,
      'fullname' => $fullname,
      'birthdate' => $birthdate,
      'gender' => $gender
    ]);
    if ($result) {
      echo "enregistrement OK";
        return true;
    } else {
      echo "Echec !";
        return false;
    }
}

insert_student($grade_id, $email, $fullname, $birthdate, $gender);

?>




