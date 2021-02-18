function setmodel(value, id, siteid, q)
{
	$("#typeid").val(value);
	$("#search a").removeClass();
	id.addClass('on');
	if(q!=null && q!='') {
		window.location='?m=search&c=index&a=init&siteid='+siteid+'&typeid='+value+'&q='+q;
	}
}
$(window).resize(function ()
{// 绑定到窗口缩放的事件
	init();
});

$(function(){
	//页面刚刷新时调用
	init();
	let catid=getUrlParam('catid');
	//设置导航栏样式
	set_index_bg(catid);
});