




<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>


<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="insertcode.php" method="POST">

                <div class="modal-body">
                    <div class="form-group">

                        <label> First Name </label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label> Last Name </label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                    </div>

                    <div class="form-group">
                        <label> Age </label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age">
                    </div>

                    <div class="form-group">
                        <label> Gender </label>
                        <input type="text" name="gender" class="form-control" placeholder="Enter Gender">
                    </div>

                    <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label> State </label>
                        <input type="text" name="state" class="form-control" placeholder="Enter State">
                    </div>

                    <div class="form-group">
                        <label> Seeking </label>
                        <input type="text" name="seeking" class="form-control" placeholder="Enter Seeking">
                    </div>

                    <div class="form-group">
                        <label> Bio </label>
                        <input type="text" name="bio" class="form-control" placeholder="Enter Bio">
                    </div>

                    <div class="form-group">
                        <label> Interests Indoor </label>
                        <input type="text" name="InterestsIndoor" class="form-control" placeholder="Enter Interests Indoor">
                    </div>

                    <div class="form-group">
                        <label> Interests Outdoor	 </label>
                        <input type="text" name="InterestsOutdoor" class="form-control" placeholder="Enter Interests Outdoor">
                    </div>

                    <div class="form-group">
                        <label> Premium </label>
                        <input type="text" name="premium" class="form-control" placeholder="Enter Premium">
                    </div>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                </div>
            </form>


        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2>This student is located outside the view folder </h2>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentaddmodal">
                    Add Data
                </button>

            </div>
        </div>

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

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>

</body>









