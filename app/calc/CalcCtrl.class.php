<?php


require_once $conf->root_path.'/lib/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';
        
class CalcCtrl { 
        private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
        
         
	 //Konstruktor - inicjalizacja właściwości
	 
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
        public function getParams(){
	$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
	$this->form->typPodatku = isset($_REQUEST ['typPodatku']) ? $_REQUEST ['typPodatku'] : null;
	$this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
	$this->form->kwota = $this->form->x;
        }
        
        function validate(){
	if (! (isset($this->form->x) && isset($this->form->typPodatku) && isset($this->form->procent))) {		
	// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
	
            return false;
        }
        
	if ( $this->form->x == "") {
	$this->msgs->addError = 'Nie podano kwoty';
        }
        if ( $this->form->typPodatku == "") {
	$this->msgs->addError = 'Nie wybrano rodzaju kalkulacji';
        }

        if (! $this->msgs->isError()){
            if (! is_numeric( $this->form->x )) {
		$this->msgs->addError = 'Kwota wartość nie jest liczbą całkowitą';
	}
        }

	return ! $this->msgs->isError();

        }
        /** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
        function process(){
	//global $role;
            $this->getparams();
            if ($this->validate()) {
	
            //konwersja parametrów na int
            $this->form->x = intval($this->form->x);
            $this->form->procent = intval($this->form->procent);
            $this->msgs->addInfo('Parametry poprawne.');
	
            //wykonanie operacji
            switch ($this->form->typPodatku) {
		case 'brutto-netto' :
			$this->result->result = round(($this->form->x / (1+$this->form->procent/100)),2);
			$this->result->kwotaVat = round(($this->form->x - $this->result->result),2);
			break;
		case 'netto-brutto' :
			$this->result->result = round(($this->form->x * (1+$this->form->procent/100)),2);
			$this->result->kwotaVat = round(($this->result->result - $this->form->x),2);
			break;
		default :
			$this->result->result = $this->form->x * $this->form->procent;
			break;
            }
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
        }

//generowanie widoku(tera łatwo)
        public function generateView(){
            global $conf;
            
            $smarty = new Smarty();
            $smarty->assign('conf',$conf);
            
            $smarty->assign('page_title','przyklad 06');
            $smarty->assign('page_description','obiektowosc + jeden punkt wejscia w /app/ctrl.php');
            $smarty->assign('page_header','obiekty');
            
            $smarty->assign('msgs',$this->msgs);
            $smarty->assign('form',$this->form);
            $smarty->assign('result',$this->result);

           $smarty->display($conf->root_path.'/app/calc/CalcView.tpl');
        }
}