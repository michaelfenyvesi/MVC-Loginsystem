<?php
  class Pages extends Controller {
    
    public function index(){
        if(isset($_SESSION['user_id'])) {
            redirect('fragen');
        }
  
        $data = [
            'title' => 'Quiz Spiel',
            'description' => 'Du hast 5 Kategorien zur Auswahl. Wähle eine Kattegorie und die dazugehörige schwierigkeit der Fragen aus. Danach werden dir 10  Fragen gestellt. Für jede korrekt beantworte Frage bekommst du Punkte. Ziel ist es, mehr Punkte als der Computergegner zu erreichen. Logge dich ein um zu starten.',
        ];
        $this->view('pages/index', $data);
    }
  }
