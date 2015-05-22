jQuery.fn.myDrag=function(){ 
_IsMove = 0; 
_MouseLeft = 0; 
_MouseTop = 0; 
return $(this).bind("mousemove",function(e){ 
if(_IsMove==1){ 
$(this).offset({top:e.pageY-_MouseLeft,left:e.pageX-_MouseTop}); 
} 
}).bind("mousedown",function(e){ 
_IsMove=1; 
var offset =$(this).offset(); 
_MouseLeft = e.pageX - offset.left; 
_MouseTop = e.pageY - offset.top; 
}).bind("mouseup",function(){ 
_IsMove=0; 
}).bind("mouseout",function(){ 
_IsMove=0; 
}); 
} // JavaScript Document