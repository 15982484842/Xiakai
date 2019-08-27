<?php
class FenxiaoAction extends CommonAction{
	
	public function Index(){
		
		$user_sq = D("user");
		$user = $this->getLoginUser();
		
		if(!$user){
			$this->redirect('User/login');
		}
		$tuima=D("user")->where(array('phone' => $user))->find();
		$this->data = $user_sq->where(array('phone' => $user))->find();
		$this->userCount2 = $user_sq->where(array('yao_ma' => $tuima['tui_ma']))->count();
		$this->tuima = $tuima;
		$this->display();
	}
	
	
	public function fenxiaolibiao(){
	
		$user = $this->getLoginUser();
		if(!$user){
			$this->redirect('User/login');
		}
		$u = D("User");
		$tuima=D("user")->where(array('phone' => $user))->find();
		$uu = $u->where(array('yao_ma' => $tuima['tui_ma']))->select();
		
		$this->data = $uu;
		$this->display();
	}
		public function shentixian(){
	header('Content-Type:text/html;charset=utf-8');
		$this->display();
	}
	
	
	
	public function erweima(){
	header('Content-Type:text/html;charset=utf-8');
	$user = $this->getLoginUser();
	$tuima=D("user")->where(array('phone' => $user))->find();
	$t=urlencode('http://www.fengshop.vip/index.php?m=User&a=signup&tui_ma='.$tuima['tui_ma'].'');
	$this->t = $t;
	
		$this->display();
	}
	
		public function shentixian_add(){
			header('Content-Type:text/html;charset=utf-8');
	 $keyword = I("keyword",'','trim');
		$user = $this->getLoginUser();
		if(!$user){
			$this->redirect('User/login');
		}
	
			$user=M('user')->where(array('phone' => $user))->find();
		
		 if($keyword> $user['ketixian']){
            $this->error("申请提现失败!申请提现金额大于可提现金额");
			
        }
		else{
			$u0=M('user')->where(array('phone' => $user['phone']))->save(array('shenqing_tixian'=>$keyword));
		 if(!$u0){
            $this->error("申请提现失败!");
               }
		    {
              $this->success("申请提现成功!");
		      }
		}
		
	
	}
	
}
