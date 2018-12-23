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
    public function getPollData()
    {
        $pollData = new stdClass();
        $pollData->pollQuestion = "Just testing....";
        $pollData->yes = 0;
        $pollData->no = 0;
        return $pollData;
    }
}