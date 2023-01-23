//朝代时间线切换
$(".item").click(function(){
    $(this).css({"background-color":"rgba(209, 204, 192,0.2)",})
    .siblings().css({"background-color":""});
      $(".pic_content").eq($(this).index()).show().siblings().hide();
});
//朝代板块
var divs=document.querySelectorAll('.pic_info');
	for(var i=0;i<divs.length;i++){
		divs[i].onmouseover=function(){ 
        this.querySelector('.pic_info_tm').style.transform='translateX(102%)';
        this.style.transform='translateY(-6px)';
        this.style.boxShadow='0px 2px 5px 1px black';
	}
	divs[i].onmouseout=function(){ 
        this.querySelector('.pic_info_tm').style.transform='translateX(0px)';
        this.style.transform='translateY(0px)';
        this.style.boxShadow='';
	}
}
var pages = document.querySelectorAll('.article,.map');
for(var i=0;i<pages.length;i++){
    pages[i].onmouseover=function(){ 
    this.querySelector('img').style.transform='scale(1.3)';
    this.style.transform='translateY(-6px)';
    this.style.transform='translateY(-6px)';
    this.style.border="2px solid white";
    this.querySelector('.arti_tm,.map_tm').style.display='block';
    
}
pages[i].onmouseout=function(){ 
    this.querySelector('img').style.transform='scale(1)';
    this.style.transform='translateY(0px)';
    this.style.transform='translateY(0px)';
    this.style.border="2px solid rgba(127, 140, 141,1.0)";
    this.querySelector('.arti_tm,.map_tm').style.display='none';
   
}
}
// 阅读和查看
var infos = document.querySelectorAll('.arti_info,.map_info');
for(var i=0;i<infos.length;i++){
    infos[i].onmouseover=function(){
        this.style.borderColor='white';
        this.style.backgroundColor='rgba(255, 255, 255, 0.3)';
    }
    infos[i].onmouseout=function(){
        this.style.borderColor='';
        this.style.backgroundColor=' rgba(0, 0, 0, 0.3)';
    }
}
// 搜索栏
var tx=document.getElementById('tx');
tx.onclick=function(){
   tx.value='';
   tx.style.color='black';
};
// tx.onblur=function(){
//     tx.value='请输入内容';
//     tx.style.color='#cccccc';
//  };
//部分文章
var boxs = document.querySelectorAll('.tag_box');
for(var i=0;i<boxs.length;i++){
    boxs[i].onmouseover=function(){
        this.style.boxShadow='0px 2px 5px 1px black';
        this.style.transform='translateY(-6px)';
    }
    boxs[i].onmouseout=function(){
        this.style.boxShadow='';
        this.style.transform='';
    }
}