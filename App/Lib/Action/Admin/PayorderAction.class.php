<?php
class PayorderAction extends CommonAction{
	
	//订单列表
	public function index(){
		$this->title = "订单列表";
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
		$Payorder = D("payorder");
		import('ORG.Util.Page');
		$count = $Payorder->where($where)->count();
		$amount= $Payorder->where($where)->sum('money');
		$this->sumcont = $count;
		$this->sumamount = $amount;
		$Page  = new Page($count,25);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $Payorder->where($where)->order('addtime Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->list = $list;
		$this->page = $show;
		$this->display();
	}
	
	//删除订单
	public function del(){
        $this->title='删除订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
        $Payorder = D("payorder");
        $status = $Payorder->where(array('id' => $id))->delete();
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除订单成功!");
	}
	
	
	
}
