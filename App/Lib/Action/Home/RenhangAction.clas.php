<?php
class RenhangAction extends CommonAction{

	
	public function index(){


	
		$token=$_GET['token'];
	$user=$_GET['user'];
	
			$xycx=D('xycx');
			
				$userD=D('user');
						$info = $xycx->where(array('user' => $user))->find();
						$userDinfo = $userD->where(array('phone' => $user))->find();
			
			if($info){
				
				$jieguo = $xycx->where(array('user' => $user))->save(array('token_renhang' => $token));
				
			}
			
			else
			{
				
				if($user!=null)
				{
			 	    $adddata['user']=$user;
			    	$adddata['date']=date("Y-m-d H:i:s");
				    $adddata['mobile']=$user;
				    $adddata['token_renhang']=$token;
					$adddata['name']=$userDinfo['truename'];
				    $jieguo=$xycx->add($adddata);
				  }
				}

				if($jieguo)
				
				{
					$this->redirect('Info/index');
					}
					else
					{
						$this->redirect('Info/index');
						}
	
		
				

	}
	
}
