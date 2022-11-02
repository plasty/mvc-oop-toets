<?php
class richPeople extends Controller {

  public function __construct() {
    $this->richPeopleModel = $this->model('richPeople');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $richPeople = $this->richPeopleModel->getrichPeople();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($richPeople as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->capitalCity, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->continent, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->population, 0, ',', '.') . "</td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'countries' => $rows
    ];
    $this->view('countries/index', $data);
  }
}