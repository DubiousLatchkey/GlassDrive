var ffcheck=0;
  var blocks = document.getElementsByClassName("identify");
  var njsca=[];
  var words;
  /**form a random numb**/
  function stuff(){
    njsca=[];
    drawPic();
  }
  function randomNum(min,max){
    return Math.floor( Math.random()*(max-min)+min);
  }
  /**form a random color**/
  function randomColor(min,max){
    var r = randomNum(min,max);
    var g = randomNum(min,max);
    var b = randomNum(min,max);
    return "rgb("+r+","+g+","+b+")";
  }
  drawPic();
  //document.getElementById("changeImg").onclick = function(e){
  //  e.preventDefault();
  //  drawPic();
  //}

  /**Draw the picture**/
  function drawPic(){
    var canvas=document.getElementById("canvas");
    var width=canvas.width;
    var height=canvas.height;
    var ctx = canvas.getContext('2d');
    ctx.textBaseline = 'bottom';

    /**background color**/
    ctx.fillStyle = randomColor(180,240); //keep the color not too deep
    ctx.fillRect(0,0,width,height);
    /**words**/
    var str = 'ABCEFGHJKLMNPQRSTWXY123456789abcdefghigklmnopqrstuvwxyz';
    for(var i=0; i<4; i++){
      var txt = str[randomNum(0,str.length)];
      
      ctx.fillStyle = randomColor(50,160);  //gives the word random colors
      ctx.font = randomNum(15,40)+'px SimHei'; //gives the word random size
      var x = 10+i*25;
      var y = randomNum(25,45);
      var deg = randomNum(-45, 45);
      //change the position and the angle
      ctx.translate(x,y);
      ctx.rotate(deg*Math.PI/180);
      ctx.fillText(txt, 0,0);
      njsca.push(txt);
      //reset the position and the angle
      ctx.rotate(-deg*Math.PI/180);
      ctx.translate(-x,-y);

    }
    /**draw lines**/
    for(var i=0; i<8; i++){
      ctx.strokeStyle = randomColor(40,180);
      ctx.beginPath();
      ctx.moveTo( randomNum(0,width), randomNum(0,height) );
      ctx.lineTo( randomNum(0,width), randomNum(0,height) );
      ctx.stroke();
    }
    /**draw points**/
    for(var i=0; i<100; i++){
      ctx.fillStyle = randomColor(0,255);
      ctx.beginPath();
      ctx.arc(randomNum(0,width),randomNum(0,height), 1, 0, 2*Math.PI);
      ctx.fill();
    }
  }
  
  function getValue() {
  	var value = document.getElementById('random').value;
  	 for(var i=0; i<4; i++){
  	 	if(value.length>4){
  	 		alert("error!");
  	 		njsca=[];
  	 		drawPic();
  	 		return;
  	 	}else if(value[i]!=njsca[i]){
  	 		alert("error!");
  	 		njsca=[];
  	 		drawPic();

  	 		return;
  	 	}else{
  	 		
  	 	}
  	 }
  	 ffcheck=1;
  	 document.getElementById('identify').style.visibility='hidden';
  	 document.getElementById('identify').style.height=0;
  	 document.getElementById('identify').style.backgroundColor='#36bfe1';
  	 document.getElementById('identify').style.border = 'none';
  	 document.getElementById('identify').style.border = 'none';
  	  document.getElementById('id01').style.display='none';
  	 if(ffcheck==1){
  	 document.getElementById('submit').style.visibility='visible';
  	 document.getElementById('submit').style.height=60;
  	 }
  	 
  	
  	 
  }
  
