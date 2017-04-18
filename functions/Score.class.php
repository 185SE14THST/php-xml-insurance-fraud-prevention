<?php

class Score
{

    public $testObject;
    private $xmlObject;
    private $globalScore;
    private $emailScore;
    private $zipScore;
    private $orderScore;

    function __construct($xml)
    {
        $this->testObject = $xml;
        $this->xmlObject = $xml;
    }

    private function refreshScores()
    {
        $this->emailScore = 0;
        $this->zipScore = 0;
        $this->orderScore = 0;
    }

    private function processorEmail($email)
    {
        $blacklist = "gmail";
        if (strpos($email, $blacklist) == true)
        {
            $this->emailScore++;
            return $email;
        } else {
            return $email;
        }
    }

    private function processorZip($zip)
    {
        if (strlen($zip) <> 5)
        {
            $this->zipScore++;
            return $zip;
        } else {
            return $zip;
        }
    }

    private function processorOrder($order)
    {
        if ($order > 489)
        {
            $this->orderScore = 2;
            return $order;
        } else {
            return $order;
        }
    }

    private function processorStatus($int)
    {
        $status = null;
        switch ($int) {
            case 0: $status = '<span style="color: green;">Automatic approval</span>'; break;
            case 1: $status = 'Pending review'; break;
            case 2: $status = '<span style="color: red;">Fraud Department</span>'; break;
            case 3: $status = 'Declined'; break;
            case 4: $status = '<span style="color: white; background: darkred;">Block</span>'; break;
        }
        return $status;
    }

    public function returnData()
    {
        $rowCount = 1;
        $orderCount = 0;
        $tr = "";
        //$orders = new SimpleXMLElement($this->xmlObject);
        foreach ($this->xmlObject as $order) {
                $tr .= '
                <tr>
                  <th scope="row">' . $rowCount++ . '</th>
                  <td>' . $this->processorEmail($order->email) . '</td>
                  <td>' . $this->processorZip($order->zip) . '</td>
                  <td>' . $this->processorOrder($order->order) . '</td>
                  <td>' . ( $this->emailScore + $this->zipScore + $this->orderScore ) . '</td>
                  <td>' . $this->processorStatus( ($this->emailScore + $this->zipScore + $this->orderScore ) ) . '</td>
                </tr>
            ';
            $this->refreshScores();
        }
        return $tr;
        // return $this->testObject;
    }

}
