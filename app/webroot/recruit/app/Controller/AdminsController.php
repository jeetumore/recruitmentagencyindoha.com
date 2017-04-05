<?php
App::uses('AppController', 'Controller');
/**
 * Admins Controller
 *
 * @property Admin $Admin
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController{
/**
 * Components
 *
 * @var array
 */

	//BEFORE FILTER START
	public function beforeFilter(){
		parent::beforeFilter();
		if(!empty($this->Auth)){
			$this->Auth->allow('admin_sign_in', 'admin_forgot_password');
		}
	}
	//BEFORE FILTER END

	/*------------------------------------ ADMIN SECTION START -----------------------------------------------*/
	//FUNCTION FOR ADMIN SIGN IN START
	public function admin_sign_in(){
		$this->layout = 'Admin/sign_in';  //echo $this->Auth->password('123456');

		$this->validateAfterLogin(); // validate after login

		if(!empty($this->request->data)){ //pr($this->request->data);die;
			$adminArr = $this->Admin->find('first', array('conditions'=>array('Admin.username'=>$this->request->data['Admin']['username'], 'Admin.password'=>$this->Auth->password($this->request->data['Admin']['password_1']))));

			if(!empty($adminArr)){ //pr($adminArr);die;
				if($adminArr['Admin']['type'] == 'SUP'){ //if SUPER ADMIN, then directly login
					if($this->Auth->login($adminArr)){
						$this->manageLastLogin($adminArr); // Manage the last login of admin
						$this->redirect('/admin/admins/dashboard/');
					}else
						$this->Session->setFlash('Unable to Authorize!', 'message', array('class'=>'msg_error'));
				}else{ // if SUB_ADMIN, then check the status
					if($adminArr['Admin']['status'] == '1')
						$this->redirect('/admin/admins/dashboard/');
					else
						$this->Session->setFlash('Inactive Account!', 'message', array('class'=>'msg_error'));
				}
			}else
				$this->Session->setFlash('Invalid Username or Password!', 'message', array('class'=>'msg_error'));
		}
	}
	//FUNCTION FOR ADMIN SIGN IN END

	//FUNCTION FOR ADMIN LOGOUT START
	public function admin_sign_out(){
		if($this->Auth->logout())
			$this->redirect('/admin/admins/sign_in');
		else
			$this->redirect('/admin/admins/dashboard/');
	}
	//FUNCTION FOR ADMIN LOGOUT END

	//FUNCTION FOR ADMIN SIGN OUT START
	public function admin_dashboard(){
		
	}
	//FUNCTION FOR ADMIN SIGN OUT END

	//FUNCTION FOR FORGOT PASSWORD START
	public function admin_forgot_password(){
		$this->layout = 'Admin/sign_in';

		$this->validateAfterLogin(); // validate after login

		if(!empty($this->request->data)){ //pr($this->request->data);die;
			$this->Admin->recursive = -1;
			$adminArr = $this->Admin->findByEmail($this->data['Admin']['email']);
			if(!empty($adminArr)){ //pr($adminArr);die;
				Controller::loadModel('User'); // load the User Model for using its function defined in Model
				$tempPass = $this->Sport->random_string(8);

				$saveData['id'] = $adminArr['Admin']['id'];
				$saveData['password'] = $this->Auth->password($tempPass);

				if($this->Admin->save($saveData, false)){
					//set the required data
					$this->set('adminArr', $adminArr);
					$this->set('tempPass', $tempPass);

					//Send Email Notification Carrying the Admin Login Credentials
					$this->Email->to = $adminArr['Admin']['email'];
					$this->Email->from = ADMIN_EMAIL_FROM;
					$this->Email->subject = 'Admin Username and Password!';
					$this->Email->layout = 'default';
					$this->Email->template = 'Admin/forgot_password';
					$this->Email->sendAs = 'html';
					$this->Email->send();
				
					$this->Session->setFlash('Your new password has been sent to your email!!', 'message', array('class'=>'msg_success'));
					$this->redirect('/admin/admins/sign_in');
				}else
					$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
			}else
				$this->Session->setFlash('No Associated Email Found!!', 'message', array('class'=>'msg_error'));
		}
	}
	//FUNCTION FOR FORGOT PASSWORD END

	//FUNCTION VALIDATE PUBLIC PAGES AFTER LOGIN START
	public function validateAfterLogin(){
		$adminSessionId = $this->Session->read('Auth.Admin.Admin.id');
		if($adminSessionId != '')
			$this->redirect('/admin/admins/dashboard/');
	}
	//FUNCTION VALIDATE PUBLIC PAGES AFTER LOGIN END

	//FUNCTION FOR MANAGING THE LAST LOGIN OF ADMIN START
	public function manageLastLogin($adminArr){
		$saveData['id'] = $adminArr['Admin']['id'];
		$saveData['last_login'] = $adminArr['Admin']['modified'];
		if($this->Admin->save($saveData, false))
			return true;
	}
	//FUNCTION FOR MANAGING THE LAST LOGIN OF ADMIN END

	//FUNCTION FOR CHANGING THE ADMIN EMAIL START
	public function admin_change_email(){
		if(!empty($this->request->data)){ //pr($this->request->data);die;
			$saveData['id'] = $this->request->data['Admin']['id'];
			$saveData['email'] = $this->request->data['Admin']['email'];
			if($this->Admin->save($saveData, false))
				$this->Session->setFlash('Email Updated Successfully!!', 'message', array('class'=>'msg_success'));
			else
				$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
		}

		$this->data = $this->Admin->findById($this->Session->read('Auth.Admin.Admin.id'));
	}
	//FUNCTION FOR CHANGING THE ADMIN EMAIL END

	//FUNCTION FOR ADMIN LOGIN CHANGE PASSWORD START
	public function admin_change_password(){
		if(!empty($this->request->data)){ //pr($this->request->data);die;
			$id = $this->Session->read('Auth.Admin.Admin.id');

			$adminArr = $this->Admin->find('first', array('conditions'=>array('Admin.id'=>$id, 'Admin.password'=>$this->Auth->password($this->request->data['Admin']['current_password'])))); //pr($adminArr);die;

			if(!empty($adminArr)){
				$saveData['id'] = $id;
				$saveData['password'] = $this->Auth->password($this->request->data['Admin']['new_password']);
				if($this->Admin->save($saveData)){
					$this->Session->setFlash('Password Changed Successfully!!', 'message', array('class'=>'msg_success'));
					$this->redirect('/admin/admins/change_password/');
				}else
					$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
			}else
				$this->Session->setFlash('Invalid Current Password!!', 'message', array('class'=>'msg_error'));
		}
	}
	//FUNCTION FOR ADMIN LOGIN CHANGE PASSWORD END
	/*------------------------------------ ADMIN SECTION END   -----------------------------------------------*/

	/*------------------------------------ SETTING SECTION START SECTION START   -----------------------------------------------*/
	//FUNCTON FOR SETTINGS START
	public function admin_settings(){
		Controller::loadModel('Setting');
		$this->paginate = array('limit'=>PAGINATION, 'order'=>array('Setting.id'=>'ASC'));
		$this->set('viewListing', $this->paginate('Setting'));
	}
	//FUNCTON FOR SETTINGS END

	//FUNCTION FOR UPDATING THE SETTING START 
	public function admin_settings_edit($id){
		Controller::loadModel('Setting');
		if(!empty($this->request->data)){ //pr($this->request->data);die;
			if($this->Setting->save($this->request->data, false)){
				$this->Session->setFlash('Settings Updated Successfully!!', 'message', array('class'=>'msg_success'));
				$this->redirect('/admin/admins/settings/');
			}else
				$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
		}

		$this->data = $this->Setting->findById($id);
	}
	//FUNCTION FOR UPDATING THE SETTING END

	//FUNCTION FOR SETTING THE STATUS START
	public function admin_set_settings_status($id=NULL, $newStatus=NULL){
		Controller::loadModel('Setting');
		if(($id != '') && ($newStatus != '')){
			$saveData['id'] = $id;
			$saveData['status'] = $newStatus;
			if($newStatus == '1')
				$msg = 'Activated';
			else
				$msg = 'Deactivated';
			if($this->Setting->save($saveData, false))
				$this->Session->setFlash('Setting '.$msg.' Successfully!!', 'message', array('class'=>'msg_success'));
			else
				$this->Session->setFlash('Please Try Later!!', 'message', array('class'=>'msg_error'));
			$this->redirect('/admin/admins/settings/');
		}else
			$this->redirect('/admin/admins/settings/');
		exit;	
	}
	//FUNCTION FOR SETTING THE STATUS END
	/*------------------------------------ SETTING SECTION START SECTION END   -----------------------------------------------*/

}
