//获取路由参数
function getUrlParam(name)
{
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}

function  init()
{
    var whdef = 100 / 1920;
    var wH = window.innerHeight;// 当前窗口的高度
    var wW = window.innerWidth;// 当前窗口的宽度
    var rem = wW * whdef;// 以默认比例值乘以当前窗口宽度,得到该宽度下的相应FONT-SIZE值
    if(rem<=65)
    {
        rem=65;
    }
    console.log(rem);
    $('html').css('font-size', rem + "px");
}
//设置导航栏选中样式
function set_index_bg(catid) {
    if(catid!==null)
    {
        $(".item-cat").map(function () {
            console.log($(this));
            if($(this).attr("data-cat")==catid)
            {
                $(this).addClass('select');
            }
        })
    }else{
        $(".index-cat").addClass('select');
    }
}
