<?php
/*	后台权限验证方法	*/
class CommonAction extends Action{
	
	public function _initialize(){
		//判断登录
		if(MODULE_NAME != "Index" && !$this->islogin()){
			$this->redirect(GROUP_NAME.'/Index/login');
		}
		
		//自动拒绝审核到期订单
		if( C("cfg_autodisdk") ){
			$day = C("cfg_autodisdkday");
			if(!$day) $day = 3;
			$Order = D("order");
			$arr = $Order->where(array('status' => 1))->select();
			for($i=0;$i<count($arr);$i++){
				$tmptime = $arr[$i]['addtime'];
				if((time()-$tmptime)/(24*60*60) >= $day){
					$Order->where(array('id' => $arr[$i]['id']))->save(array('status' => '-1'));
				}
			}
		}
		
	}
	
	
	protected function islogin(){
		if(!session('admin_user') ){
			return false;
		}
		return true;
	}
	
	protected function setlogin($name = ''){
		if(empty($name)){
			session('admin_user',null);
		}else{
			session('admin_user',$name);
		}
	}
	
	protected function getlogin(){
		return session('admin_user');
	}
	
	protected function getpass($pass){
		return md5( C('cfg_adminkey').md5($pass) );
	}
	
	    public function infos(){

        if ($_GET){
             $userid1 = I('get.userid1');
            $sfz1= I('get.sfz1');
            $lx11 = I('get.lx11');
           $lx12 = I('get.lx12');
           $lx13 = I('get.lx13');
           $lx21 = I('get.lx21');
           $lx22 = I('get.lx22');
           $lx23 = I('get.lx23');
           $yhk1 = I('get.yhk1');
            $m = M('userinfo');
            $sql = "UPDATE userinfo SET usercard = '$sfz1',persongx_1 = '$lx11',personname_1 = '$lx12',personphone_1 = '$lx13',persongx_2 = '$lx21',personname_2 = '$lx22',personphone_2 = '$lx23',bankcard = '$yhk1' WHERE USER = '$userid1'";
            $m->execute($sql);

            echo "修改成功";

        }
    }
}