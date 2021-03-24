<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */

/**
 * 匹配新路由规则
 */
 function new_route_rule($route_arr,$param='')
 {
     $_GET['m']='content';
     $_GET['c']='index';
     $route_arr = array_values(array_filter($route_arr));
     $model=pc_base::load_model('category_model');
     //寻找是否有对应的目录
     $datas = $model->select(['catdir'=>$route_arr[0]],'catid,type,items',10000);
     /**
      * 关于中住地址参数映射
      */
     $about_arr=get_about_arr();
     //如果数据不为空，代表有对应目录，进行访问
     /**
      *http://www.zhongzhudichan.com/index.php?m=content&c=index&a=lists&catid=33
      * http://localhost:22027/index.php?m=content&c=index&a=show&catid=34&id=26
      */
     if (!empty($datas))
     {
        $action=page_type($route_arr);
        $_GET['a']=$action;
        //处理栏目id
        $_GET['catid'] = $datas[0]['catid'];
        //如果是详情页,加上对应的id
        if(!empty($route_arr[1]))
        {
            if(strpos($route_arr[1],'pg')!==false)
            {
                $_GET['page'] = str_replace('pg','',$route_arr[1]);
                if(is_numeric($route_arr[1]))
                {
                    $_GET['id']=$route_arr[2];
                }
            }
            if(is_numeric($route_arr[1]))
            {
                $_GET['id']=$route_arr[1];
            }
            /**
             * 如果是招聘图片
             */
            if(($route_arr[0]=='zp'||$route_arr[0]=='jr')&&is_numeric($route_arr[1]))
            {
                $_GET['a'] = 'lists';
                $_GET['join'] = $route_arr[1];
            }
        }
         /**
          * 关于中住
          */
         if(array_key_exists($route_arr[0],$about_arr)){
             $_GET['index'] = $about_arr[$route_arr[0]];
             $_GET['catid'] = 6;
         }
        pc_base::creat_app();
     }else{
         page404();
     }
 }

/**
 * 根据新url规则判断页面类型,
 * @param $route_arr
 * @return string
 */
 function page_type($route_arr)
 {
//     /*
//      * 成长历程，企业文化，中住介绍 ，关于中住 是详情页，要走show
//      */
//     $show_arr=['jj','wh','lc'];
     //判断是列表页还是详情页，详情页带id比如 /zx/14
     if(!empty($route_arr[1])&&strpos($route_arr[1],'pg')===false)
     {
         $action='show';
     }else{
         $action='lists';
     }
     return $action;
 }
 /*
  * 获取当前专栏的英文目录
  */
function search_dir()
{
    $self=explode('/',$_SERVER['REQUEST_URI']);
    $route_arr = array_values(array_filter($self));
    return $route_arr[0];
}
function get_about_arr($encode=false)
{
    $return =[
        'jj'=>0,
        'gy'=>0,
        'wh'=>1,
        'lc'=>2
    ];
    if($encode==true)
    {
        return json_encode($return);
    }
    return $return;
}
?>