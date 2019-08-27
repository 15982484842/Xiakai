<?php
class TaobaoAction extends CommonAction{

	
	public function index(){


	
		$token=$_GET['token'];
	$user=$_GET['user'];
	
			$xycx=D('xycx');
			
						$info = $xycx->where(array('user' => $user))->find();
			
			if($info){
				
				$jieguo = $xycx->where(array('user' => $user))->save(array('token_taobao' => $token));
				
			}
			
			else
			{
				
				if($user!=null)
				{
			 	    $adddata['user']=$user;
			    	$adddata['date']=date("Y-m-d H:i:s");
				    $adddata['mobile']=$user;
				    $adddata['token_taobao']=$token;
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
