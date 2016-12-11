function addsport(){
   var layer = document.createElement('div');
   layer.id = 'shadow';
   document.body.appendChild(layer);
 
   var element = document.getElementById('add');
   element.style.display = 'block';
}
function cancle1(){
   var element = document.getElementById('add');
   element.style.display = 'none';
   var shadow = document.getElementById('shadow');
   shadow.parentNode.removeChild(shadow);
}


