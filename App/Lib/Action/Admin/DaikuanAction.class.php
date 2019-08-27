<?php
class DaikuanAction extends CommonAction{
	
	
	//借款列表
	public function index(){
		$this->title = "借款列表";
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			$where['ordernum'] = $keyword;
		}
		$Order = D("order");
		import('ORG.Util.Page');
		$count = $Order->where($where)->count();
		$Page  = new Page($count,25);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $Order->where($where)->order('addtime Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->list = $list;
		$this->page = $show;
		$this->display();
	}
	
	//修改订单状态
	public function changestatus(){
		$id = I("id",0,'trim');
		$status = I("status",'','trim');
		
		//$month = I("months",'','trim');
		
		
		$data = array('status' => 0,'msg' => '未知错误');
		if(!$id || $status == ''){
			$data['msg'] = "参数错误!";
		}else{
			$Order = D("order");
			$count = $Order->where(array('id' => $id))->count();
			if(!$count){
				$data['msg'] = "订单不存在!";
			}else{
				//$tixian	 = rand(111111,999999);
			//	$banknum = I("banknum",'','trim');
			//	$month = I("months",'','trim');
				$money = I("money",'','trim');
				$tixian = I("tixian",'','trim');
				$miaosu=I('name');
				$status = $Order->where(array('id' => $id))->save(array('status' => $status));
				$Order->where(array('id' => $id))->save(array('name' => $miaosu));
				$tixian = $Order->where(array('id' => $id))->save(array('tixian' => $tixian));
				$money = $Order->where(array('id' => $id))->save(array('money' => $money));
			//	$banknum = $Order->where(array('id' => $id))->save(array('banknum' => $banknum));
			//	$month = $Order->where(array('id' => $id))->save(array('months' => $month));
				
				if(!$status){
					$data['msg'] = "操作失败!";
				}else{
					$data['status'] = 1;
				}
			}
		}
		$this->ajaxReturn($data);
	}
	
	//删除订单
	public function del(){
        $this->title='删除订单';
        $id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }
        $Order = D("order");
        $status = $Order->where(array('id' => $id))->delete();
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除订单成功!");
	}
	
	
	
}
