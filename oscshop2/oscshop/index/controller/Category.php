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
 */
 
namespace osc\index\controller;
use osc\common\controller\HomeBase;
use think\Db;
class Category extends HomeBase
{
    public function index()
    {    
		$param=input('param.');
        $limit = isset($param['limit'])?$param['limit']:30;
        $sort = isset($param['sort'])?$param['sort']:'sort_order';
        $order = isset($param['order'])?$param['order']:'DESC';
		if(!$category=Db::name('category')->find((int)$param['id'])){
			$this->error('商品分类不存在！！');
		}
		if($category['pid']>0){
		    $parentcate = Db::name('category')->find((int)$category['pid']);
            $this->assign('pcate',$parentcate);
        }
        $this->assign('now_category',$category);
		$this->assign('SEO',['title'=>$category['name'].'-'.config('SITE_TITLE'),
		'keywords'=>$category['meta_keyword'],
		'description'=>$category['meta_description']]);
		
//		if(isset($param['a'])){
			$this->assign('list',osc_goods()->get_category_goods_list(input('param.'),$limit,'g.shipping,g.goods_id,g.name,g.image,g.price,gtc.category_id',$sort,$order));
//		}
		$this->assign('empty', '~~暂无数据');
		$this->assign('limit','/limit/'.$limit);
        $this->assign('sort','/sort/'.$sort.'/order/'.$order);
//		$this->assign('attribute', osc_goods()->get_category_attribute((int)input('param.id')));
		
		return $this->fetch();
   
    }
}
