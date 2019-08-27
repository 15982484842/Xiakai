<?php
class BillsAction extends CommonAction{
	
	public function index(){
		$this->title = "还款列表";
		$keyword = I("keyword",'','trim');
		
		$sday = I("sday");
		$eday = I("eday");
		$this->sday = $sday;
		$this->eday = $eday;
		
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			$where['user|name'] = array('like',"%{$keyword}%");
		}
		
		 if ($sday) {
			 $time1=strtotime($sday);
			 $where['addtime'] = array('egt',$time1);
		 }
		 if ($eday) {
			 $time2=strtotime($eday)+86399;
			 $where['addtime'] = array('elt',$time2);
		 }
		 if ($sday && $eday) {
			 $time1=strtotime($sday);
			 $time2=strtotime($eday)+86399;
			 $where['addtime'] = array('between',array($time1,$time2));
		 }		
		
		
		$Bills = D("bills");
		import('ORG.Util.Page');
		$count = $Bills->where($where)->count();
		$amount= $Bills->where($where)->sum('money');
		$this->sumcont = $count;
		$this->sumamount = $amount;
		
		$Page  = new Page($count,25);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $Bills->where($where)->order('addtime Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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
		$Bills = D("bills");
        $status = $Bills->where(array('id' => $id))->delete();
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除订单成功!");
	}
	
	
		public function queren(){
        $this->title='确认还款订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
		$Bills = D("bills");
		$Order = D("Order");
		$info1 = $Bills->where(array('id' => $id))->find();
		$info2 = $Order->where(array('ordernum' =>  $info1['ordernum']))->find();
		if($info1['tiqianhuan']==1)
		{
			$status = $Order->where(array('ordernum' =>  $info1['ordernum']))->save(array('huankuanliebiao' => 0,'donemonth' => $info2['months']));
			$status1 = $Bills->where(array('id' => $id))->save(array('zhuangtai' => 1));
			}
			
			if($info1['tiqianhuan']==0)
		{
			$status = $Order->where(array('ordernum' =>  $info1['ordernum']))->save(array('huankuanliebiao' => 0,'donemonth' => $info1['qishu']));
			
			$status1 = $Bills->where(array('id' => $id))->save(array('zhuangtai' => 1));
			}
       
        if(!$status){
			
            $this->error("确认失败!");
        }
		 if(!$status1){
			
            $this->error("确认失败!");
        }
        $this->success("确认还款订单成功!");
	}
	
}
