 function getStyle(obj, attr)
    {
        if(obj.currentStyle)
        {
           return obj.currentStyle[attr];
        }
        else
        {
            return getComputedStyle(obj, false)[attr];
        }
    }
    function startMove(obj, json, fn)       //运动框架
    {
        clearInterval(obj.timer);
        obj.timer=setInterval(function ()
        {
            var bStop=true;  //这一次运动就结束了——所有的值都到达了
            for(var attr in json)
            {
            //1.取当前的值
                var iCur=0;
                if(attr=='opacity')
                {
                    iCur=parseInt(parseFloat(getStyle(obj, attr))*100);
                }
                else
                {
                    iCur=parseInt(getStyle(obj, attr));
                }
            //2.算速度
                var iSpeed=(json[attr]-iCur)/8;
               iSpeed=iSpeed>0?Math.ceil(iSpeed):Math.floor(iSpeed);
            //3.检测停止
                if(iCur!=json[attr])
                {
                    bStop=false;
                }
                if(attr=='opacity')
                {
                    obj.style.filter='alpha(opacity:'+(iCur+iSpeed)+')';
                    obj.style.opacity=(iCur+iSpeed)/100;
                }
                else
                {
                    obj.style[attr]=iCur+iSpeed+'px';
                }
            }
            if(bStop)
            {
                clearInterval(obj.timer);
                if(fn)
                {
                    fn();
                }
            }
        }, 30)
    }
    window.onload=function()
    {
        var oBanner=document.getElementById("banner");
        var oUl=oBanner.getElementsByTagName("ul")[0];
        var aLi=oUl.getElementsByTagName("li");
        var aBtn=oBanner.getElementsByTagName("ol")[0].getElementsByTagName("li");;
        oUl.style.width=aLi[0].offsetWidth*aLi.length+"px";
        var timer=null;
        var now=0;
        for(var i=0;i<aBtn.length;i++)
        {
            aBtn[i].index=i;
            aBtn[i].onclick=function()
            {
                now=this.index;
                tab();
            }
        }
        function tab()
        {
            for(var i=0;i<aBtn.length;i++)
            {
                aBtn[i].className="";
            }
            aBtn[now].className="active";
            startMove(oUl,{left:-now*aLi[0].offsetWidth});
        }
        function next()
        {
            now++;
            if(now==aLi.length)
            {
                now=0;
            }
            tab();
        }
        timer=setInterval(next,5000);
        oBanner.onmouseover=function()
        {
            clearInterval(timer);
        }
        oBanner.onmouseout=function()
        {
            timer=setInterval(next,5000);
        }
    };