<?php
/**
 * oscshop2 B2C电子商务系统
 *
 * ==========================================================================
 * @link      http://www.oscshop.cn/
 * @copyright Copyright (c) 2015-2019 oscshop.cn. 
 * @license   http://www.oscshop.cn/license.html License
 * ==========================================================================
 *
 * @author    刘峻峰
 *
 */
namespace osc\admin\controller;
use osc\common\controller\AdminBase;
use think\Db;
class Ad extends AdminBase{
	
	protected function _initialize(){
		parent::_initialize();
		$this->assign('breadcrumb1','广告');
		$this->assign('breadcrumb2','广告管理');
	}

	// public function index()
	// {
	// 	$pid=input('param.pid');
		
	// 	if(!$pid){
	// 		$pid=0;
	// 	}
	// 	$list = Db::name('category')->where('pid',$pid)->paginate(config('page_num'));
	// 	$this->assign('empty', '<tr><td colspan="20">~~暂无数据</td></tr>');
	// 	$this->assign('list',$list);
	// 	return $this->fetch();
	// }

	public function module_index()
	{
		$list = DB::name('ad_module')->paginate(config('page_num'));
		$this->assign('empty', '<tr><td colspan="20">~~暂无数据</td></tr>');
		$this->assign('list',$list);
		return $this->fetch();
	}
	
	public function module_add()
	{

		if(request()->isPost()){
			
			// $model=osc_model('admin','category');
			
			$post =  input('post.');
			
			$add = [
				'module_name' => $post['name'],
				'update_time' => time(),
				// 'image' => $post['image'],
				'meta_description' => $post['meta_description'],
			];
			$result = DB::name('ad_module')->insert($add);
			if($result){
				storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'新增了广告分类');						
					return ['success'=>'新增成功','action'=>'add'];			
			}else{
				return ['error'=>'新增失败'];
			}
			
			
		
			
		}
		$this->assign('module','添加广告模块');
		$this->assign('action',url('Ad/module_add'));
		return $this->fetch('module_edit');
	}

	public function module_edit()
	{
		$id = request()->param('id');
		$cat = DB::name('ad_module')->find($id);
		
			if(request()->isPost()){
			// halt(10);
			// $model=osc_model('admin','category');
			
			$post =  input('post.');
			
			$save = [
				'module_name' => $post['name'],
				'update_time' => time(),
				// 'image' => $post['image'],
				'meta_description' => $post['meta_description'],
			];
			
			$result = DB::name('ad_module')->where("id",$post['id'])->update($save);
			
			if($result){
				storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'修改了广告分类');						
					return ['success'=>'修改成功','action'=>'edit'];			
			}else{
				return ['error'=>'修改失败'];
			}
			
			
		
			
		}
		$this->assign('module','修改广告模块');
		$this->assign('cat',$cat);
		$this->assign('action',url('Ad/module_edit'));
		return $this->fetch('module_edit');
	}
		function module_del(){	
			
		$id = request()->param('id');
		$r = DB::name('ad_module')->where('id',$id)->delete();
		
		if($r){
			
			storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'删除了广告模块'.input('get.id'));
			
			$this->redirect('Ad/module_index');
			
		}else{
			
			return $this->error('删除失败！',url('Ad/module_index'));
		}		
		
	}
	

	public function ad_index()
	{
		$list = DB::name('ad')->alias('t1')->field('t1.*,t2.module_name')->join('__AD_MODULE__ t2','t2.id = t1.module_id','LEFT')->paginate(config('page_num'));
		
		$this->assign('empty', '<tr><td colspan="20">~~暂无数据</td></tr>');
		$this->assign('list',$list);
		return $this->fetch();
	}

	public function ad_add()
	{
			if(request()->isPost()){
			
			// $model=osc_model('admin','category');
			
			$post =  input('post.');
			
			$add = [
				'name' => $post['name'],
				'update_time' => time(),
				'image' => $post['image'],
				'meta_description' => $post['meta_description'],
				'module_id' => $post['pid'],
				'url' => $post['url'],
			];
			$result = DB::name('ad_')->insert($add);
			if($result){
				storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'新增了广告');						
					return ['success'=>'新增成功','action'=>'add'];			
			}else{
				return ['error'=>'新增失败'];
			}
			
			
		
			
		}
		$category = DB::name('ad_module')->field('id as module_id,module_name as name')->select();

		$this->assign('category',$category);
		$this->assign('action',url('Ad/ad_add'));
		return $this->fetch('ad_edit');
	}
	
		public function ad_edit()
	{
			$id = request()->param('id');
			if(request()->isPost()){
			
			// $model=osc_model('admin','category');
			
			$post =  input('post.');
			
			$add = [
				'name' => $post['name'],
				'update_time' => time(),
				'image' => $post['image'],
				'meta_description' => $post['meta_description'],
				'module_id' => $post['pid'],
				'url' => $post['url'],
			];
			$result = DB::name('ad')->where('id',$post['id'])->update($add);
			if($result){
				storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'新增了广告');						
					return ['success'=>'修改成功','action'=>'edit'];			
			}else{
				return ['error'=>'修改失败'];
			}
			
			
		
			
		}
		$category = DB::name('ad_module')->field('id as module_id,module_name as name')->select();
		$cat = DB::name('ad')->find($id);
		$this->assign('cat',$cat);
		$this->assign('category',$category);
		$this->assign('action',url('Ad/ad_edit'));
		return $this->fetch('ad_edit');
	}

	function ad_del(){	
			
		$id = request()->param('id');
		$r = DB::name('ad')->where('id',$id)->delete();
		
		if($r){
			
			storage_user_action(UID,session('user_auth.username'),config('BACKEND_USER'),'删除了广告'.input('get.id'));
			
			$this->redirect('Ad/ad_index');
			
		}else{
			
			return $this->error('删除失败！',url('Ad/ad_index'));
		}		
		
	}
}
?>