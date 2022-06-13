<?php

class DataLayer
{

    private $_dbh;

    /**
     * DataLayer Constructor
     */

    function __construct()
    {

        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    function saveDate($profile)
    {
        var_dump($profile);

        //1. Define the query
        $sql = "INSERT INTO dating (fname, lname, age, gender, phone, email, state, seeking, bio)
                VALUES (:fname, :lname, :age,:gender, :phone, :email, :state,  :seeking, :bio)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $fname = $profile->getFname(); //changed member to profile
        $lname = $profile->getLname();
        $age = $profile->getAge();
        $gender = $profile->getGender();
        $phone = $profile->getPhone();
        $email = $profile->getEmail();
        $state = $profile->getState();
        $seeking = $profile->getSeeking();
        $bio = $profile->getBiography();
       // $interestsIndoor = $profile->getInterestsIndoor();
      //  $interestsOutdoor = $profile->getInterestsOutdoor();
        //$premium = $profile->getPremium(); i think this is in membership class?


        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_STR);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
       $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
      // $statement->bindParam(':interestsIndoor',  $interestsIndoor, PDO::PARAM_STR);
      //  $statement->bindParam(':interestsOutdoor',  $interestsOutdoor, PDO::PARAM_STR);
       // $statement->bindParam(':premium', $premium, PDO::PARAM_STR);

        //4. Execute the prepared statement
        $statement->execute();

//        //5. Process the result
//        $id = $this->_dbh->lastInsertId();
//        //echo "Row inserted: $id";
//        return $id;
    }

    function viewMembers()
    {
        //1. Define the query
        $sql = "SELECT * FROM dating";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);



        //4. Execute the prepared statement
        $statement->execute();

        //5. Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        //var_dump($result);
    }



   static function getGender()
    {
        return array("male", "female", "non-binary");
    }

   static function getState()
    {
        return array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
            "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan",
            "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York",
            "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "Tennessee"
        , "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
    }


   static function getSeeking()
    {
        return array("male", "female", "nonbinary");
    }


  static  function getIndoorInterest()
  {
        return array("tv", "movies", "cooking", "board games", "puzzles", "reading", "playing cards", "video games");
  }

  static  function getOutdoorInterest()
  {
        return array("hiking", "biking", "collecting", "swimming", "camping", "walking", "climbing", "mountaineering");
  }

    // Get the premium for the dating form
    static function getMember()
    {
        return array("Premium Member", "Regular Member");
    }

}




