//This javascript is a script that blinks colors. 
function gen_math(a,b){return Math.floor((Math.random() * b) + a);}
function colorx(){return "rgb("+gen_math(220,255)+","+gen_math(0,180)+","+gen_math(0,180)+")";}
setInterval(function(){document.getElementById("hellox").style.color=colorx();}, 100);

