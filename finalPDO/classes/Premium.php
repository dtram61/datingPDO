<?php

class Premium extends Membership{
        private array $_interestsIndoor;
        private array  $_interestsOutdoor;



        // We might need this
//    public function __construct(string $fname = "", string $lname = "" , string $age=  "" , string $gender = "" , string $phone = "",
//                                string $email = "", string $biography = "", string $state = "" , string $seeking = "", string $interestsIndoor =  "",
//                                string $interestsOutdoor = "")
//    {
//        $this->_fname = $fname;
//        $this->_lname = $lname;
//        $this->_age = $age;
//        $this->_gender = $gender;
//        $this->_phone = $phone;
//        $this->_email = $email;
//        $this->_biography = $biography;
//        $this->_state = $state;
//        $this->_seeking = $seeking;
//        $this->_interestsIndoor = $interestsIndoor;
//        $this->_interestsOutdoor = $interestsOutdoor;
//
//
//    }


    /**
     * @return array
     */
    public function getInterestsIndoor(): array
    {
        return $this->_interestsIndoor;
    }

    /**
     * @param array $interestsIndoor
     */
    public function setInterestsIndoor(array $interestsIndoor)
    {
        $this->_interestsIndoor = $interestsIndoor;
    }

    /**
     * @return array
     */
    public function getInterestsOutdoor(): array
    {
        return $this->_interestsOutdoor;
    }

    /**
     * @param array $interestsOutdoor
     */
    public function setInterestsOutdoor(array $interestsOutdoor)
    {
        $this->_interestsOutdoor = $interestsOutdoor;
    }

//
//        public function __construct()
//        {
//
//            $this->_interestsIndoor = $interestsIndoor;
//            $this->_interestsOutdoor = $interestsOutdoor;
// maybe line 19-20 will work
//             or line 24-25 will work idk let's test it
//
//            $this->$interestsIndoor = array("tv", "movies", "cooking", "board games", "puzzles", "reading", "playing cards", "video games" );
//            $this->$interestsOutdoor = array("hiking", "biking", "collecting", "swimming", "camping", "walking", "climbing", "mountaineering");
//        }


}