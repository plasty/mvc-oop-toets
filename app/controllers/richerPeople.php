<?php
class richerPeople extends Controller
{

  public function __construct()
  {
    $this->richPeopleModel = $this->model('richPeople');
  }

  public function index()
  {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $richerPeople = $this->richPeopleModel->getRichPeople();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($richerPeople as $value) {
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->Name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->Networth, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->Age, 0, ',', '.') .  "</td>
                  <td>" . htmlentities($value->MyCompany, ENT_QUOTES, 'ISO-8859-1') . "</td>
                </tr>";
    }


    $data = [
      'title' => '<h1>richpeople</h1>',
      'richpeople' => $rows
    ];
    $this->view('richpeople/index', $data);
  }
}