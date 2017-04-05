<?php
App::uses('AppController', 'Controller');

class SocialsController extends AppController{

	//BEFORE FILTER START
	public function beforeFilter(){
		parent::beforeFilter();
		if(!empty($this->Auth)){
			$this->Auth->allow();
		}
	}
	//BEFORE FILTER END


	/*------------------------------------ FRONT SECTION START -----------------------------------------------*/
	
	/*------------------------------------ FRONT SECTION START -----------------------------------------------*/


	/*------------------------------------ ADMIN SECTION START -----------------------------------------------*/
	//FUNCTION FOR MANAGING THE STATIC PAGES START
	public function admin_manage(){
		
	}
	//FUNCTION FOR MANAGING THE STATIC PAGES END
	/*------------------------------------ ADMIN SECTION END   -----------------------------------------------*/

}
