<?php
class Appointments extends BaseController
{

    private $appointmentModel;



    public function __construct()
    {
        $this->appointmentModel = $this->model('appointment');
    }


    public function index()
    {

        //gets the data from the database/table and puts it in an array

        $result = $this->appointmentModel->getAppointment();


        //puts it in dataRows in an array with html elements

        $dataRows = "";

        foreach ($result as $data) {
            $soort = '';
            if($data->Soort1 == 'on'){
                $soort .= 'Nagelbijt ';
            }
            if($data->Soort2 == 'on'){
                $soort .= 'Manicuren ';
            }
            if($data->Soort3 == 'on'){
                $soort .= 'Nagelreparatie ';
            }
            $dataRows .= "<tr>
            <td>$data->Kleur1</td>
            <td>$data->Kleur2</td>
            <td>$data->Kleur3</td>
            <td>$data->Kleur4</td>
            <td>$data->Tel</td>
            <td>$data->Email</td>
            <td>$data->Datum</td>
            <td>$soort</td>
            <td><a href='" . URLROOT . "/appointments/update/$data->Id'>Update</a></td>
            <td><a href='" . URLROOT . "/appointments/delete/$data->Id'>Delete</a></td>
            </tr>";
        }
        //gives the data to the next page

        $data = [
            'title' => 'Afspraken',
            'dataRows' => $dataRows
        ];


        $this->view('appointments/index', $data);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->appointmentModel->createAppointment($_POST);
            echo "<div class='alert alert-success' role='alert'>
            A simple success alert—check it out!
          </div>
          ";
            header('refresh3:' . URLROOT . '/appointments/index');
        }
        $data = [
            'title' => 'Maak een afspraak'
        ];

        $this->view('appointments/create', $data);
    }
    public function update($appointmentID){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $result = $this->appointmentModel->updateAppointment($_POST, $appointmentID);
            echo "Updated";
            header('Refresh:1'. URLROOT . '/Appointments/index');
        }
        $result = $this->appointmentModel->selectAppointment($appointmentID);
        $data = [
            'Id' => $result->Id,
            'Kleur1' => $result->Kleur1,
            'Kleur2' => $result->Kleur2,
            'Kleur3' => $result->Kleur3,
            'Kleur4' => $result->Kleur4,
            'Tel' => $result->Tel,
            'Email' => $result->Email,
            'Datum' => $result->Datum,
            'Soort1' => $result->Soort1,
            'Soort2' => $result->Soort2,
            'Soort3' => $result->Soort3
        ];
        $this->view('Appointments/update', $data);
    }
}
