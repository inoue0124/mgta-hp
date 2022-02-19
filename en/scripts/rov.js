rollovers=function(off,on){
img=document.getElementsByTagName("img");p=[];
off_reg=new RegExp(off+"(\.[a-z]+$)","i");on_reg=new RegExp(on+"(\.[a-z]+$)","i");
for(var x=0,i;i=img[x];x++){ if(i.src.match(off_reg)){p[x]=new Image();p[x].src=i.src.replace(off_reg,on+"$1");
i.onmouseover=function(){this.src=this.src.replace(off_reg,on+"$1");};
i.onmouseout=function(){this.src=this.src.replace(on_reg,off+"$1");};};};};