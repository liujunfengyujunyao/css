<?php
/**
 *
 * @author    鱼君瑶
 *会员中心
 */
namespace osc\common\controller;
use think\Db;
class HomeBase extends Base{	
	
	protected function _initialize() {
		parent::_initialize();		
		
		if(request()->isMobile()&&('mobile'!=request()->module())){
			header('Location:'.request()->domain().'/mobile/');
			die();
		}
//		dump(osc_goods()->get_goods_category());die;
		$this->assign('top_nav',osc_goods()->get_goods_category());
		$cart=osc_cart();
		$cart_list=$cart->get_all_goods(member('uid'));		
		$total_all_price=0;
		if(isset($cart_list)){
			foreach ($cart_list as $k => $v) {
				$total_all_price+=$v['total'];
			}
		}
		$this->assign('cartlist',$cart_list);
		$this->assign('total_price',$total_all_price);   
		$brands=Db::name('brand')
			->alias('b')
            ->limit(0,6)
			->select();
		$this->assign('brands',$brands);
        $this->assign('no_bottom',0);
		
	}
	
}
