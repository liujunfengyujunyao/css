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
class Index extends HomeBase
{
    public function index()
    {    			
		$list = osc_goods()->get_home_goods_list();
		$banners = Db::name('ad')
            ->where(['module_id'=>1])
            ->select();
		
		$this->assign('empty', '~~暂无数据');
        $this->assign('banners',$banners);
		$this->assign('list', $list);
		
		$this->assign('SEO',['title'=>config('SITE_TITLE'),'keywords'=>config('SITE_KEYWORDS'),'description'=>config('SITE_DESCRIPTION')]);
		
		return $this->fetch();
   
    }
}
