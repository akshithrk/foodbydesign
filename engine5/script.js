// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_bubbles(c,m,o){var f=jQuery;var g=f(this);var j=c.noCanvas||!document.createElement("canvas").getContext;var l=c.width,q=c.height;var i=f("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_bubbles").appendTo(o);if(!j){var b=f("<canvas>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%"}).appendTo(i);var p=b.get(0).getContext("2d")}var k={easeOutBack:function(u,v,h,z,y,w){if(w==undefined){w=1.70158}return z*((v=v/y-1)*v*((w+1)*v+w)+1)+h},easeOutBackCubic:function(u,v,h,A,z,w){var y=(v/=z)*v;return h+A*(-1.5*y*v*y+2*y*y+4*y*v+-9*y+5.5*v)},easeOutCubic:function(u,v,h,y,w){return y*((v=v/w-1)*v*v+1)+h},easeOutExpo:function(u,v,h,y,w){return(v==w)?h+y:y*(-Math.pow(2,-10*v/w)+1)+h}};var t=[["#bbbbbb",0.5,0.5],["#b3b3b3",0.2,0.2],["#b6b6b6",0.5,0.2],["#b9b9b9",0.8,0.2],["#cccccc",0.2,0.8],["#c3c3c3",0.5,0.8],["#c6c6c6",0.8,0.8]];var d=[[[0.5,0.5,0.7,0.15],[0.5,0.5,0.6,0.3],[0.5,0.5,0.5,0.45],[0.5,0.5,0.4,0.6],[0.5,0.5,0.3,0.75],[0.5,0.5,0.2,0.9],[0.5,0.5,0.1,1]],[[0.5,0.5,0.7,1],[0.5,0.5,0.6,0.9],[0.5,0.5,0.5,0.75],[0.5,0.5,0.4,0.6],[0.5,0.5,0.3,0.45],[0.5,0.5,0.2,0.3],[0.5,0.5,0.1,0.15]]];var n=[[[0.5,0.5,0,1],[0.5,0.5,0,0.9],[0.5,0.5,0,0.75],[0.5,0.5,0,0.6],[0.5,0.5,0,0.45],[0.5,0.5,0,0.3],[0.5,0.5,0,0.15]],[[0.5,0.5,0,0.15],[0.5,0.5,0,0.3],[0.5,0.5,0,0.45],[0.5,0.5,0,0.6],[0.5,0.5,0,0.75],[0.5,0.5,0,0.9],[0.5,0.5,0,1]],[[0.5,7.5,0.7,0.75],[0.5,7.5,0.6,0.15],[0.5,7.5,0.5,1],[0.5,7.5,0.4,0.3],[0.5,7.5,0.3,0.45],[0.5,7.5,0.2,0.6],[0.5,7.5,0.1,0.9]],[[0.5,7.5,0.7,1],[0.5,7.5,0.6,0.9],[0.5,7.5,0.5,0.75],[0.5,7.5,0.4,0.6],[0.5,7.5,0.3,0.45],[0.5,7.5,0.2,0.3],[0.5,7.5,0.1,0.15]]];function e(v){if(Object.prototype.toString.call(v)==="[object Array]"){return v[Math.floor(Math.random()*(v.length))]}else{var h;var u=0;for(var w in v){if(Math.random()<1/++u){h=w}}return/linear|swing/g.test(h)?e(v):h}}function a(w,v,y){var x=new Date().getTime();var u=function(){var A=new Date().getTime();var z=(A-x)/w;if(z<1){v(z);requestAnimationFrame(u)}else{h(1)}};u();function h(z){cancelAnimationFrame(u);if(z){v(1)}if(y){y()}}return{stop:h}}function r(C,B,w,A,u){C.clearRect(0,0,l,q);for(var v=0,z=w.length;v<z;v++){var h=Math.max(0,Math.min(1,B-w[v][3]*(1-B)));if(u&&k[u]){h=k[u](1,h,0,1,1,1)}var x=l;if(l/q<=1.8&&l/q>0.7){x*=2}else{if(l/q<=0.7){x=q*2}}var y=w[v][2]*h*x;if(A){y=(w[v][2]+(A[v][2]-w[v][2])*h)*x}y=Math.max(0,y);C.beginPath();C.arc((w[v][0]+((A?A[v][0]:0.5)-w[v][0])*h)*l,(w[v][1]+((A?A[v][1]:0.5)-w[v][1])*h)*q,y,0,2*Math.PI,false);C.fillStyle=t[v][0];C.fill()}}this.go=function(C,x){if(j){o.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(C?-C+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},c.duration,"easeInOutExpo",function(){g.trigger("effectEnd")})}else{l=o.width();q=o.height();b.attr({width:l,height:q});var A=m.get(x);for(var y=0,B=t.length;y<B;y++){var v=Math.abs(t[y][1]),h=Math.abs(t[y][2]);t[y][0]=s(A,{x:v*l,y:h*q,w:2,h:2})||t[y][0]}var u=e(d);var w=e(n);var z=e(k);a(c.duration/2,function(D){r(p,D,u,0,z)},function(){o.find(".ws_list").css({left:(C?-C+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))});z=e(k);a(c.duration/2,function(D){r(p,1-D,w,u,z)},function(){p.clearRect(0,0,l,q);g.trigger("effectEnd")})})}};function s(D,u){u=u||{};var F=1,x=u.exclude||[],C;var z=document.createElement("canvas"),w=z.getContext("2d"),v=z.width=D.naturalWidth,J=z.height=D.naturalHeight;w.drawImage(D,0,0,D.naturalWidth,D.naturalHeight);try{C=w.getImageData(u.x?u.x:0,u.y?u.y:0,u.w?u.w:D.width,u.h?u.h:D.height)["data"]}catch(E){return false}var y=(u.w?u.w:D.width*u.h?u.h:D.height)||C.length,A={},H="",G=[],h={dominant:{name:"",count:0}};var B=0;while(B<y){G[0]=C[B];G[1]=C[B+1];G[2]=C[B+2];H=G.join(",");if(H in A){A[H]=A[H]+1}else{A[H]=1}if(x.indexOf(["rgb(",H,")"].join(""))===-1){var I=A[H];if(I>h.dominant.count){h.dominant.name=H;h.dominant.count=I}}B+=F*4}return["rgb(",h.dominant.name,")"].join("")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 7.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container5").wowSlider({effect:"bubbles",prev:"",next:"",duration:20*100,delay:20*100,width:830,height:360,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:false,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,responsive:2,fullScreen:false,gestures:2,onBeforeStep:0,images:0});