


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Mission Not Accomplish</h1>


<
<div class="card">
    <div class="card-body">
        <?php

        require_once $_SERVER['DOCUMENT_ROOT'] . '/../config.php';

        $routePath = getenv('DOCUMENT_ROOT');

        echo $routePath. "\n";

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

