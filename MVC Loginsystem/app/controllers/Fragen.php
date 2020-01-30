<?php 
class Fragen extends Controller{
    public function __construct(){

      $this->fragenModel = $this->model('Frage');
      $this->userModel = $this->model('User');
    }
    
    
    public function index(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'frage' =>'',
                    'value' =>trim($_POST['kategorie_antwort']),
                    'kategorie_auswahl_err' =>''
                ];
                
        
            if(empty($data['value'])) {
                $data['kategorie_auswahl_err'] = 'Bitte wählen Sie eine Kategorie   aus';
            }
            
           
            
            
            // Wenn die errors leer sind
            if(empty($data['kategorie_auswahl_err'])){
                redirect('fragen/frage');
            } 
            else {
                // Lade view mit Fehler
                $this->view('fragen/index', $data);
            }
            }
        else {
            $data = [
                'value' =>'',
                'kategorie_auswahl_err' =>''
            ];

            $this->view('fragen/index', $data);
        }
    }
    public function frage() {
        
       $this->view('fragen/frage');
}
}

