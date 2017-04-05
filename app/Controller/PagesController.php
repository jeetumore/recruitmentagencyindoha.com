<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController{

	//BEFORE FILTER START
	public function beforeFilter(){
		parent::beforeFilter();
		if(!empty($this->Auth)){
			$this->Auth->allow('home', 'page', 'contact', 'thankyoupage');
		}
	}
	//BEFORE FILTER END


	/*------------------------------------ FRONT SECTION START -----------------------------------------------*/
	public function home(){
		$this->layout = 'Front/home';

		$pageArr = $this->Page->find('first', array('conditions'=>array('Page.alias_name'=>'home', 'Page.status'=>'1')));
		if(!empty($pageArr))
			$this->set('pageArr', $pageArr);
	}

	//FUNCTION FOR STATIC PAGE START
	public function page($alias_name){
		if($alias_name != ''){
			$pageArr = $this->Page->find('first', array('conditions'=>array('Page.alias_name'=>$alias_name, 'Page.status'=>'1')));
			if(!empty($pageArr)){ //pr($pageArr);die;
				$this->set('pageArr', $pageArr);
			}else
				$this->redirect('/');
		}else
			$this->redirect('/');
	}
	//FUNCTION FOR STATIC PAGE END

	// FUNCTION FOR CONTACT US START
	public function contact(){
		if(!empty($this->request->data)){ //pr($this->request->data);die;
			$this->request->data['Enquiry']['name'] = ucwords(strtolower(trim($this->request->data['Enquiry']['name'])));
			$this->request->data['Enquiry']['email'] = trim($this->request->data['Enquiry']['email']);

			$this->set('dataArr', $this->request->data['Enquiry']);

			$this->Email->smtpOptions = array(
			  'port'=>'587',
			  'timeout'=>'30',
			  'host' => 'smtp.sendgrid.net',
			  'username'=>'corfuit',
			  'password'=>'corfuit@2017',
			  'client' => 'recruitmentagencyindoha.com'
			);

			$this->Email->delivery = 'smtp';
			$this->Email->to = array('hr@corfuit.com', 'jay@corfuit.org', 'victor@corfuit.org', 'jayeshjaiswal@gmail.com', 'jayesh.in.ie@gmail.com');
			$this->Email->replyTo = $this->request->data['Enquiry']['email'];
			$this->Email->bcc = 'chauhanarun10@gmail.com';
			$this->Email->from = 'support@recruitment-agencies-in-dubai.com';
			$this->Email->subject = '[Doha Recruitment] New Enquiry';
			$this->Email->layout = 'default';
			$this->Email->template = 'Front/enquiry_reply';
			$this->Email->sendAs = 'html';
			$this->Email->send();
			die('MF000');
		}
		$pageArr = $this->Page->find('first', array('conditions'=>array('Page.alias_name'=>'contact', 'Page.status'=>'1')));
		if(!empty($pageArr))
			$this->set('pageArr', $pageArr);

		/*
		hr@corfuit.com, jay@corfruit.org, victor@corfuit.org
		*/ 
	}
	// FUNCTION FOR CONTACT US END

	public function thankyoupage(){
		$pageArr = $this->Page->find('first', array('conditions'=>array('Page.alias_name'=>'thank-you', 'Page.status'=>'1')));
		if(!empty($pageArr))
			$this->set('pageArr', $pageArr);
	}
	/*------------------------------------ FRONT SECTION START -----------------------------------------------*/


	/*------------------------------------ ADMIN SECTION START -----------------------------------------------*/
	//FUNCTION FOR MANAGING THE STATIC PAGES START
	public function admin_manage(){
		$this->paginate = array('limit'=>PAGINATION, 'order'=>array('Page.alias_name'=>'ASC'));
		$this->set('viewListing', $this->paginate('Page'));
	}
	//FUNCTION FOR MANAGING THE STATIC PAGES END

	//FUNCTION FOR SETTING THE STATUS START
	public function admin_set_status($id=NULL, $newStatus=NULL){
		if(($id != '') && ($newStatus != '')){
			$saveData['id'] = $id;
			$saveData['status'] = $newStatus;
			if($newStatus == '1')
				$msg = 'Activated';
			else
				$msg = 'Deactivated';
			if($this->Page->save($saveData, false))
				$this->Session->setFlash('Page '.$msg.' Successfully!!', 'message', array('class'=>'msg_success'));
			else
				$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
			$this->redirect('/admin/pages/manage/');
		}else
			$this->redirect('/admin/pages/manage/');
		exit;
	}
	//FUNCTION FOR SETTING THE STATUS END

	//FUNCTION FOR EDITING THE PAGE CONTENT START
	public function admin_edit($id){
		if(!empty($this->request->data)){ //pr($this->request->data);die;
			if($this->Page->save($this->request->data))
				$this->Session->setFlash('Page Content Updated Successfully!!', 'message', array('class'=>'msg_success'));
			else
				$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
			$this->redirect('/admin/pages/manage/');
		}

		if($id != ''){
			$pageArr = $this->Page->findById($id);
			if(!empty($pageArr)){ //pr($pageArr);die;
				$this->data = $pageArr;
			}else
				$this->redirect('/admin/pages/manage/');
		}else
			$this->redirect('/admin/pages/manage/');
	}
	//FUNCTION FOR EDITING THE PAGE CONTENT END

	//FUNCTION FOR ADMIN PAGE VIEW START
	public function admin_view($id){
		$this->layout = 'FancyBox/fancy_box_popup';
		$this->set('pageArr', $this->Page->findById($id));
	}
	//FUNCTION FOR ADMIN PAGE VIEW END
	/*------------------------------------ ADMIN SECTION END   -----------------------------------------------*/

}
