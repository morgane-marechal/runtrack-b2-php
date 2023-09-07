<?php
?>


<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Rentrer l'email d'un étudiant: </label>
    <input type="email" name="email" id="email" required />
  </div>

  <div class="form-example">
    <input type="submit" value="Retrouver l'étudiant" />
  </div>
</form>


<?php

$email = htmlspecialchars($_GET["email"]);

echo $email;



function find_one_student($email){
    try
    {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=lp_official', 'root', '');
       // var_dump($bdd);
    }
    catch (PDOException $e)
    {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
    $displayUsers = $bdd->prepare("SELECT * FROM student WHERE email= :email");
    $displayUsers->execute([
      'email' => $email
    ]);
    $result = $displayUsers->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    return $result;
}

$theStudent = find_one_student($email);

echo "Id : ".$theStudent[0]["id"]."<br>";
echo "Grade : ".$theStudent[0]["grade_id"]."<br>";
echo "Email : ".$theStudent[0]["email"]."<br>";
echo "Nom : ".$theStudent[0]["fullname"]."<br>";
echo "Date de naissance : ".$theStudent[0]["birthdate"]."<br>";
echo "Genre : ".$theStudent[0]["gender"]."<br>";
?>




