



<?php

error_reporting(E_ALL);
ini_set("display_errors", TRUE);
// Turn on error reporting



//echo $_SERVER['DOCUMENT_ROOT'].'<br>';

//require_once '/home/dtramgre/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../config.php';

$routePath = getenv('DOCUMENT_ROOT');

echo $routePath. "\n";


// Add new student to the database
// Step 1 Define the query
$sql = "INSERT INTO dating (fname, lname, age, gender, phone, email, state, seeking, bio, InterestsIndoor, InterestsOutdoor, premium  )
    VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :InterestsIndoor, :InterestsOutdoor, :premium)";

// 2. Prepare the statement, this helps precompile step 1.
    $statement = $dbh->prepare($sql);

// 3. Bind the parameters

$fname = $_POST['fname'];
$statement->bindParam(':fname', $fname, PDO::PARAM_STR); // this prevents sql injections

$lname = $_POST['lname'];
$statement->bindParam(':lname', $lname, PDO::PARAM_STR); // this prevents sql injections

$age = $_POST['age'];
$statement->bindParam(':age', $age, PDO::PARAM_STR); // this prevents sql injections

$gender = $_POST['gender'];
$statement->bindParam(':gender', $gender, PDO::PARAM_STR); // this prevents sql injections

$fname = $_POST['fname'];
$statement->bindParam(':fname', $fname, PDO::PARAM_STR); // this prevents sql injections

$phone = $_POST['phone'];
$statement->bindParam(':phone', $phone, PDO::PARAM_STR); // this prevents sql injections

$email = $_POST['email'];
$statement->bindParam(':email', $email, PDO::PARAM_STR); // this prevents sql injections

$state = $_POST['state'];
$statement->bindParam(':state', $state, PDO::PARAM_STR); // this prevents sql injections

$seeking = $_POST['seeking'];
$statement->bindParam(':seeking', $seeking, PDO::PARAM_STR); // this prevents sql injections

$bio = $_POST['bio'];
$statement->bindParam(':bio', $bio, PDO::PARAM_STR); // this prevents sql injections

$InterestsIndoor = $_POST['InterestsIndoor'];
$statement->bindParam(':InterestsIndoor', $InterestsIndoor, PDO::PARAM_STR); // this prevents sql injections

$InterestsOutdoor = $_POST['InterestsOutdoor'];
$statement->bindParam(':InterestsOutdoor', $InterestsOutdoor, PDO::PARAM_STR); // this prevents sql injections


$premium = $_POST['premium'];
$statement->bindParam(':premium', $premium, PDO::PARAM_STR); // this prevents sql injections


$statement->execute();

echo '<script> alert("Data Saved")</script>';


?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Mission Accomplish</h1>


<div class="card">
    <div class="card-body">
        <?php

        $sql = "SELECT * FROM dating";

        //prepare the statement
        $statement = $dbh->prepare($sql);

        // execute the statement
        $statement->execute();

        //Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">State</th>
                <th scope="col">Seeking</th>
                <th scope="col">Bio</th>
                <th scope="col">Interests Indoor</th>
                <th scope="col">Interests Outdoor</th>
                <th scope="col">Premium</th>
            </tr>
            </thead>

            <?php
            foreach ($result as $row)
            {

                ?>
                <tbody>
                <tr>
                    <td> <?php echo $row['member_id'];?></td>
                    <td> <?php echo $row['fname'];?></td>
                    <td> <?php echo $row['lname'];?></td>
                    <td> <?php echo $row['age'];?></td>
                    <td> <?php echo $row['gender'];?></td>
                    <td> <?php echo $row['phone'];?></td>
                    <td> <?php echo $row['email'];?></td>
                    <td> <?php echo $row['state'];?></td>
                    <td> <?php echo $row['seeking'];?></td>
                    <td> <?php echo $row['bio'];?></td>
                    <td> <?php echo $row['InterestsIndoor'];?></td>
                    <td> <?php echo $row['InterestsOutdoor'];?></td>
                    <td> <?php echo $row['premium'];?></td>
                </tr>

                </tbody>

                <?php
            }
            ?>
        </table>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>

