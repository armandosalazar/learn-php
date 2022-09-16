<?php
include_once "db.php";

class Survey extends DataBase
{
  private $totalVotes;
  private $optionSelected;

  public function setOptionSelected($optionSelected)
  {
    $this->optionSelected = $optionSelected;
  }

  public function getOptionSelected()
  {
    return $this->optionSelected;
  }

  public function vote()
  {
    $prepare = $this->connect()->prepare('UPDATE languages SET votes = votes + 1 WHERE `option` = :option');
    $prepare->execute(['option' => $this->optionSelected]);
  }

  public function getLanguagesAndVotes()
  {
    return $this->connect()->query('SELECT * FROM languages');
  }

  public function getTotalVotes()
  {
    $result = $this->connect()->query('SELECT SUM(votes) AS votes FROM languages');
    // $query->fetch()['votes']);
    $this->totalVotes = $result->fetch(PDO::FETCH_OBJ)->votes;
    return $this->totalVotes;
  }

  public function getPercentageVotes($votes)
  {

    return round(($votes / $this->totalVotes) * 100, 0);
  }
}