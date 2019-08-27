<?php
class TixianAction extends CommonAction{
	
	public function index(){
		$this->title = "提现中心列表";
		$keyword = I("keyword",'','trim');
			$sday = I("sday");
		$eday = I("eday");
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			$where['user'] = array('like',"%{$keyword}%");
		}
		 if ($sday) {
			 $time1=strtotime($sday);
			 $where['time'] = array('egt',$time1);
		 }
		 if ($eday) {
			 $time2=strtotime($eday)+86399;
			 $where['time'] = array('elt',$time2);
		 }
		 if ($sday && $eday) {
			 $time1=strtotime($sday);
			 $time2=strtotime($eday)+86399;
			 $where['time'] = array('between',array($time1,$time2));
		 }
		$Tixians = D("tixian");
		import('ORG.Util.Page');
		$count = $Tixians->where($where)->count();
		$amount= $Tixians->where($where)->sum('money');
		$this->sumcont = $count;
		$this->sumamount = round($amount,2);
		$Page  = new Page($count,25);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $Tixians->where($where)->order('time Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->list = $list;
		$this->page = $show;
		$this->display();
	}
	
	public function del(){
        $this->title='删除订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
		$Tixians = D("tixian");
        $status = $Tixians->where(array('id' => $id))->delete();
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除订单成功!");
	}
		public function queren(){
        $this->title='确认提现订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
		$Tixians = D("tixian");
		$status1 = $Tixians->where(array('id' => $id))->save(array('zhuangtai' => 1));
		 if(!$status1){
			
            $this->error("确认失败!");
        }
        $this->success("确认提现订单成功!");
		}
			public function bohui(){
        $this->title='驳回提现订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
		$Tixians = D("tixian");
		$status1 = $Tixians->where(array('id' => $id))->save(array('zhuangtai' => 2));
		 if(!$status1){
			
            $this->error("驳回失败!");
        }
        $this->success("驳回提现订单!");
		}
		
		
		public function duanxinqueren(){
		$sd=$_GET['id'];

			$Tixians = D("tixian");
				$tixians = $Tixians->where(array('id' =>$sd))->find();
				$neiyong="您的提.现申请已经确认！";
	 import("@.Class.Smsapi");
						$Smsapi = new Smsapi();
						$phone1=$tixians['user'];
					
						$contstr = "{$neiyong}";
					
						$status22 = $Smsapi->send($phone1,$neiyong);
				
						
						 if($status22>0){
             echo '<script>alert("发送成功");location.href="/index.php?g=Admin&m=Tixian&a=index"</script>';
            }
		   {
       
		   $this->error("发送失败!");
		  
		   }
		   
		}
		   	public function duanxinbohui(){
		$sd=$_GET['id'];

			$Tixians = D("tixian");
				$tixians = $Tixians->where(array('id' =>$sd))->find();
				$neiyong="您的提.现申请已经被驳回！";
	 import("@.Class.Smsapi");
						$Smsapi = new Smsapi();
						$phone1=$tixians['user'];
					
						$contstr = "{$neiyong}";
					
						$status22 = $Smsapi->send($phone1,$neiyong);
				
						
						 if($status22>0){
             echo '<script>alert("发送成功");location.href="/index.php?g=Admin&m=Tixian&a=index"</script>';
            }
		   {
       
		   $this->error("发送失败!");
		  
		   }
		
		
		
			
	}
	
}
