// JavaScript Document
function AdjustHeight() {
    var height = document.getElementById("header").offsetHeight;
	document.getElementById("content").style.marginTop = height + 20 + 'px';
} 