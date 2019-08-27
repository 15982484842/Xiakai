<?php
class YunxingshangAction extends CommonAction{

	
	public function index(){


		$user=$_GET['user'];
		$token=$_GET['token'];
		
			$xycx=D('xycx');
						$info = $xycx->where(array('user' => $user))->find();
				
			if($info){
				
				$jieguo = $xycx->where(array('user' => $user))->save(array('token' => $token));
				
			}
			else
			{
				if($user!=null)
				{
			 	    $adddata['user']=$user;
			    	$adddata['date']=date("Y-m-d H:i:s");
				    $adddata['mobile']=$user;
				    $adddata['token']=$token;
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
