<?php
/**
 * oscshop2 B2C电子商务系统
 *
 * ==========================================================================
 * @link      http://www.oscshop.cn/
 * @copyright Copyright (c) 2015-2016 oscshop.cn. 
 * @license   http://www.oscshop.cn/license.html License
 * ==========================================================================
 *
 * @author    鱼君瑶
 *
 * 商品品牌
 */
 
namespace osc\index\controller;
use osc\common\controller\HomeBase;
use think\Db;
class Brand extends HomeBase
{
    public function index()
    {
        $brands=Db::name('brand')
            ->select();
        foreach($brands as $k=>$v){
            $brands_list[$v['letter']][] = $v;
        }
        $letters = array_keys($brands_list);
        $this->assign('brands_list',$brands_list);
        $this->assign('letters',$letters);
        $this->assign('no_bottom',1);
//		$this->assign('empty', '~~暂无数据');
//
//		$this->assign('list', osc_goods()->get_brand_goods_list(input('param.'),20,'g.goods_id,g.name,g.image,g.price,gtc.category_id'));
		
		
		return $this->fetch();
   
    }
}
