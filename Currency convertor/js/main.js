var inpt1=document.querySelector('.txt');
inpt1.onfocus=function(){
   if(inpt1.value==0)
      document.getElementById('label_e').classList.add('label_after');
   else
      document.getElementById('ent').select();
}
inpt1.onblur=function(){
   if(inpt1.value==0)
      document.getElementById('label_e').classList.remove('label_after');
}

function switch_devise(){
   var sel1=document.getElementById('dev1'); 
   var sel2=document.getElementById('dev2');
   var tmp=sel1.options.selectedIndex;
   sel1.options.selectedIndex=sel2.options.selectedIndex;
   sel2.options.selectedIndex=tmp;
   
}


