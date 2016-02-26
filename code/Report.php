<?php

class Report
{
    protected $database = null;
    protected $view = 'overview';


    public function connect()
    {
        if (null == $this->database) {
            $this->database = new mysqli("localhost", "root", "65Yellow", "sugarcrm");
            if ($this->database->connect_errno) {
                throw new Exception($this->database->connect_error);
            }
        }
        return $this->database;
    }

    public function switchView()
    {
        if (isset($_GET['submitoverview'])) {
            $view = 'pipeline';

        } elseif (isset($_GET['submitpipeline'])) {
            $view = 'overview';
        } else {
            $view = 'overview';
        }

        // Return the Variable to our template
        return $view;
    }

    public function getStartingDate()
    {
        if (isset($_GET['setDate'])) {
            $startDate = $_GET['date'];
            // var_dump(starting_date);
            return $startDate;
        } else {
            // Get todays date
        }

    }

    // Get the current Month specified in the Date Selector
    public function getMonth()
    {
        if (null !== $this->getStartingDate()){
            $month = date("m",strtotime($this->getStartingDate()));
            return $month;
        }
        else {
            echo "Please Select a Starting Date";
        }        
    }

    public function getYear()
    {
        if (null !== $this->getStartingDate()){
            $year = date("y",strtotime($this->getStartingDate()));
            return $year;
        }
        else {
            echo "Please Select a Starting Date";
        }        
    }

    // Get Todays Current Month (for the pipeline)
    public function todaysMonth()
    {
        
    }

    public function pipelineQuery()
    {
        $plquery = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities");

        return $plquery;
    }

    public function overviewQuery()
    {
        $result = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities WHERE date_closed = '".$this->getStartingDate()."'");

        return $result;
    }

    // public function baseQuery()
    // {
    //     // if (isset($_GET['submitoverview'])) {
    //     //     $result = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities");

    //     // } elseif (isset($_GET['submitpipeline'])) {
            
    //     //     $result = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities WHERE date_closed = '".$this->getStartingDate()."'");
    //     // } else {
    //     //     $result = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities WHERE MONTH(date_closed) = '".$this->getMonth()."'");
    //     // }

    //     // return $result;
    // }


    public function baseQuery()
    {
        $result = $this->connect()->query("SELECT id, name, amount, probability, sales_stage, date_closed from opportunities");

        if (!$result) {
            $result = [];
        }
        return $result;
    }

}
