<?php
class DuanxinAction extends CommonAction{
	

	public function index(){
		$this->title = "短信发送";
		
		$this->display();
	}
	
	//确认提现金额
	public function tijiao(){
       $this->title = "提现申请";
	   $keyword = I("keyword",'','trim');
	   $keyword1 = I("keyword1",'','trim');
	 import("@.Class.Smsapi");
						$Smsapi = new Smsapi();
						$phone=$keyword;
						$contstr = "【".C('cfg_smsname')."】{$keyword1}";
						$status = $Smsapi->send($phone,$contstr);
		 if($status == '0'){
           $this->success("发送成功!");
            }
		   {
			  
			     $this->error("发送失败");
          
		   }
		
		
		}
	}
	
	

