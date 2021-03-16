<?php

require_once $conf->root_path.'/libs/smarty/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result; 
	private $hide_intro; 


	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->calc_result = new CalcResult();
		$this->hide_intro = false;
	}
	

	public function getParams(){
		$this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->form->percentages = isset($_REQUEST ['percentages']) ? $_REQUEST ['percentages'] : null;
	}
	
	
	public function validate() {
	
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->percentages ))) {
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		
		if ($this->form->amount == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->years == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		if ($this->form->percentages == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $amount i $years są liczbami całkowitymi
			if (! is_numeric ( $this->form->amount )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->years )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->percentages )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
			$this->form->percentages = intval($this->form->percentages);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$this->calc_result->result = ($this->form->amount/($this->form->years*12)) + ($this->form->amount/($this->form->years*12) * ($this->form->percentages/100));
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
				
		$smarty->assign('hide_intro',$this->hide_intro);
		$smarty->assign('amount',$this->form->amount);
		$smarty->assign('years',$this->form->years);
		$smarty->assign('percentages',$this->form->percentages);
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->calc_result);
		
		$smarty->display($conf->root_path.'/app/calc/calc_view.tpl');
	}
}
