// JavaScript Document
var imgmm;
var imgw;
var left;
var right;
var dpmm;
var rulermm;
var unit;

	function redraw(){
		imgw = right-left;
		$("#iCalibrate").css({"left":left+1,"width":imgw-1});
		$("#dLeft").css("left",left);
		$("#dRight").css("left",right);
		$("#dTop").css("left",left-50).width(imgw+100);
		}
	function ladd(d){
		left+=d;
		if(left>right-50) left=right-50;
		if(left<0) left=0;
		redraw();
		}
	function radd(d){
		right+=d;
		if(right<left+50) right=left+50;
		if(right>$(".content").width()-1) right=$(".content").width()-1;
		redraw();
		}
	function calibrate(img,w,obj){
		$("#info1,#info3,#info4,#dRuler").hide();
		$("#obj").text(obj);
		$("#info2").show();
		$("#iCalibrate").attr("src","images/"+img);
		$("#dCalibrate").show();
		imgmm=w;
		imgw=Math.round(imgmm*dpmm);
		rulerw=rulermm*dpmm;
		left=Math.max(Math.round(($(document).width()-imgw)/2),0);
		right=Math.min(left+imgw,$(".content").width()-1);
		redraw();
		$("#dLAdjust").css("left",Math.max(left-66,0))
		$("#dRAdjust").css("left",Math.min(right-66,$(".content").width()-$("#dRAdjust").width()));
		}
	function caliFinish(){
		$("#info2,#dCalibrate").hide();
		$("#info3").show();
		dpmm =imgw/imgmm;
		rulerw=Math.round(rulermm*dpmm);
		$("#iRuler").attr("src","images/"+unit+".bmp");
		$("#iRuler").attr("width",rulerw);
		$("#dRuler").show();
		setCookie("dpmm",dpmm,999);
		}
	$(function(){
		dpmm=96/25.4;
		$("#rCm").click(function(){
			rulermm=500;
			unit="ruler";
			$("#iRuler").attr("src","images/"+unit+".bmp");
			$("#iRuler").attr("width",rulerw);
		});
		$("#rInch").click(function(){
			rulermm=508;
			unit="ruler1";
			$("#iRuler").attr("src","images/"+unit+".bmp");
			$("#iRuler").attr("width",rulerw);
		});
		if(rulermm==null){
			rulermm=500;
			unit="ruler";
		}
		$(".menu-s,.submenu,.subsubmenu").mouseenter(function(){
				$(this).css({"background":"#444","z-index":100}).children("ul").show();	
			}).mouseleave(function(){
				$(this).css({"background":"#000","z-index":0}).children("ul").hide();
			});
		
		});
		
		