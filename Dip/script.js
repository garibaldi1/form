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

function addcompetition() {
   var layer = document.createElement('div');
   layer.id = 'shadow';
   document.body.appendChild(layer);
   
   var element = document.getElementById('add2');
   element.style.display = 'block';
}

function cancle2(){
   var element = document.getElementById('add2');
   element.style.display = 'none';
   var shadow = document.getElementById('shadow');
   shadow.parentNode.removeChild(shadow);
}
function addnotes(){
   var layer = document.createElement('div');
   layer.id = 'shadow';
   document.body.appendChild(layer);
   
   var element = document.getElementById('add3');
   element.style.display = 'block'; 
}

function cancel3() {
   var element = document.getElementById('add3');
   element.style.display = 'none';
   var shadow = document.getElementById('shadow');
   shadow.parentNode.removeChild(shadow);
}

