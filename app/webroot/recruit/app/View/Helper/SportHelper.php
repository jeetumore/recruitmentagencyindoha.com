<?php
class SportHelper extends AppHelper{
	public $helpers = array('Html', 'Form', 'Session');

	//FUNCTION FOR ENCRYPTION START
	public function encrypt($data){
		$enc_data = base64_encode($data);
		return $enc_data;
	}
	//FUNCTION FOR ENCRYPTION END

	//FUNCTION FOR DECRYPTION START
	public function decrypt($data){
		$enc_data = base64_decode($data);
		return $enc_data;
	}
	//FUNCTION FOR DECRYPTION END
	
	//FUNCTION FOR PARSING THE URL START
	public function parseParameterNew($title){
		$title = strtolower($title);
		$newParameter = str_replace(array('/',' ',',','.',':',"'",'?','!','&','#39;','_'), array('-'), $title);
		return $newParameter;
	}
	//FUNCTION FOR PARSING THE URL END

	//SET VIEW PAGE HEADING START
	public function page_heading($heading){
		$newHeading = '<div class="heading_header">';
		$newHeading .= '	<div class="leftcorner">'.$this->Html->image('Admin/leftcorner.png', array('alt'=>'')).'</div>';
		$newHeading .= '	<div class="rightcorner">'.$this->Html->image('Admin/rightcorner.png', array('alt'=>'')).'</div>';
		$newHeading .= '	<div class="pdleft10 pdtop7 fleft">'.$heading.'</div>';
		$newHeading .= '</div>';
		$newHeading .= '<div class="clear"></div>';
		return $newHeading;
	}
	//SET VIEW PAGE HEADING END

	//SET FRONT VIEW PAGE HEADING START
	public function front_page_heading($heading){
		$newHeading = '<div class="insidetopbgmain">';
		$newHeading .= '	<div class="insidetopbg">'.$heading.'</div>';
		$newHeading .= '</div>';
		$newHeading .= '	<div class="insidetoshadow">'.$this->Html->image('Front/about_us_btm_shadow.jpg', array('alt'=>'')).'</div>';
		return $newHeading;
	}
	//SET FRONT VIEW PAGE HEADING END

	// FETCH THE FIRE STATIONS START
	public function fetchFireStations(){
		$ret = '';

		App::import('Model', 'FireStation');
		$this->FireStation = new FireStation();

		$fireStationsArr = $this->FireStation->find('list', array('fields'=>array('FireStation.id', 'FireStation.name'), 'conditions'=>array('FireStation.status'=>'1'))); //pr($fireStationsArr);die;
		if(!empty($fireStationsArr))
			$ret = $fireStationsArr;
		return $ret;
	}
	// FETCH THE FIRE STATIONS END

	// FETCH THE FIRE FIGHTERS OF A STATION START
	public function fetchFireFightersOfStation($stationId){
		$ret = '';
		
		App::import('Model', 'FireFighter');
		$this->FireFighter = new FireFighter();

		$fireArr = $this->FireFighter->find('all', array('fields'=>array('FireFighter.id', 'FireFighter.first_name', 'FireFighter.last_name'), 'conditions'=>array('FireFighter.fire_station_id'=>$stationId), 'order'=>array('FireFighter.first_name'=>'ASC'))); //pr($fireArr);die;

		if(!empty($fireArr))
			$ret = $fireArr;

		return $ret;
	}
	// FETCH THE FIRE FIGHTERS OF A STATION END

	// COUNT ALL GROUP MEMBERS START
	public function countAllGrpMembers($grpId){
		App::import('Model', 'GroupMember');
		$this->GroupMember = new GroupMember();

		return $this->GroupMember->find('count', array('conditions'=>array('GroupMember.group_id'=>$grpId)));
	}
	// COUNT ALL GROUP MEMBERS END

	//FETCH GRP MEMBERS START
	public function fetchGroupMembers($grpId){
		App::import('Model', 'GroupMember');
		$this->GroupMember = new GroupMember();
		$grpMemArr = $this->GroupMember->find('list', array('fields'=>array('GroupMember.fire_fighter_id'), 'conditions'=>array('GroupMember.group_id'=>$grpId))); //pr($grpMemArr);die;
		return $grpMemArr;
	}
	//FETCH GRP MEMBERS END

	// FETCH FIRE FIGHTER NAME START
	public function fetchFireFighterName($id){
		App::import('Model', 'FireFighter');
		$this->FireFighter = new FireFighter();

		$userArr = $this->FireFighter->findById($id);
		$ret = '';
		if(!empty($userArr)){
			$ret = $userArr['FireFighter']['first_name'].' '.$userArr['FireFighter']['last_name'];
		}
		return $ret;
	}
	// FETCH FIRE FIGHTER NAME END
}
?>