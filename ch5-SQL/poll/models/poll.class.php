<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:45 PM
 */

// 'poll.class' class definition
class poll
{
    /**
     * @var PDO
     * this injects PDO statements to the db
     */

    private $db;

    public function __construct($dbconnection)  // declaring constructor for poll class
    {
        $this->db = $dbconnection;
    }

    /**
     * @return mixed fetches playground database's info
     */
    public function getPollQuestion()
    {
        /*$pollData = new stdClass();
        $pollData->pollQuestion = "Just testing....";
        $pollData->yes = 0;
        $pollData->no = 0;*/

        //the actual SQL statement
        $sql = "SELECT pollQuestion FROM poll WHERE poll_id = 1";
        //Use the PDO connection to create a PDOStatement object
        $statement = $this->db->prepare($sql);
        // execute SQL statement
        $statement->execute();
        //retrieve the first row of the table
        $pollData = $statement->fetchObject();
        return $pollData;

    }

    /**
     * @param $input int indicates casted vote 'yes' or 'no'
     * @return mixed updates poll results
     */
    public function updatePoll($input)
    {
        $updatePollResultSQL = "";
        if ($input == 'yes')
            $updatePollResultSQL = "UPDATE poll SET yes = yes + 1 WHERE poll_id = 1";
        elseif  ($input == 'no')
            $updatePollResultSQL = "UPDATE poll SET no = no + 1 WHERE poll_id = 1";
        $updateStatement = $this->db->prepare($updatePollResultSQL);
        if($updateStatement->execute() == false)
        {
          return false;
        }
        else
            return true;

    }

    public function showPollData()
    {
        //the actual SQL statement
        $sql = "SELECT yes, no FROM poll WHERE poll_id = 1";
        //Use the PDO connection to create a PDOStatement object
        $statement = $this->db->prepare($sql);
        // execute SQL statement
        $statement->execute();
        //retrieve the first row of the table
        $pollData = $statement->fetchObject();
        return $pollData;
    }
}