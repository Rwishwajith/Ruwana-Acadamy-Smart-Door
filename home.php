<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-analytics.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
    
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
      float:right;
			padding: 0;
			overflow: hidden;
			background-color: #010328;
			width: 85%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #d4af37;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
        /* -- import Roboto Font ------------------------------ */
@import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";


/* -- box model --------------------------------------- */
*,
*:after,
*:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

/* -- Base style -------------------------------------- */
html {
  position: relative;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  min-height: 100%;
}

body {
  font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 1.4;
  color: #212121;
  background-color: #ffff;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

/* -- Google typography ------------------------------- */
.title {
  font-size: 20px;
  font-weight: 300;
  line-height: 1.1;
  color: #212121;
  text-transform: inherit;
  letter-spacing: inherit;
}

.caption {
  font-size: 12px;
  font-weight: 300;
  line-height: 1.1;
  color: #bdbdbd;
  text-transform: inherit;
  letter-spacing: inherit;
}

/* -- Ripple-effect ----------------------------------- */
.ripple-effect {
  position: relative;
  overflow: hidden;
  -webkit-transform: translatez(0);
}
.ink {
  display: block;
  position: absolute;
  pointer-events: none;
  border-radius: 50%;
  transform: scale(0);
}
.ink {
  background: #fff;
  opacity: 1;
}
.ink.animate {
  -webkit-animation: ripple-effect 0.5s linear;
  -o-animation: ripple-effect 0.5s linear;
  animation: ripple-effect 0.5s linear;
}

@keyframes ripple-effect {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    -ms-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-webkit-keyframes ripple-effect {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    -ms-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-moz-keyframes ripple-effect {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    -ms-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-ms-keyframes ripple-effect {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    -ms-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-o-keyframes ripple-effect {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    -ms-transform: scale(2.5);
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}

/* -- Dashboard --------------------------------------- */
.dashboard {
  position: relative;
  overflow-x: hidden;
  width: 100%;
  padding: 5px;
  margin: 0;
}
.dashboard > * {
  display: block;
  float: left;
  margin: 5px;
}

/* -- Tiles ------------------------------------------- */
.tile {
  color: #212121;
  overflow: hidden;
  cursor: pointer;
  outline: 0;
  border: 0;
  border-radius: 0;
  -webkit-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
}
.tile:hover,
.tile:active,
.tile.active,
.tile:focus,
.tile:active:focus,
.tile.active:focus {
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
  q
.tile .content-wrapper {
  position: absolute;
  display: block;
  top: 0;
  width: 100%;
  -webkit-transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
  -o-transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
  transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}
.tile .content-wrapper .tile-content {
  position: relative;
  display: block;
  overflow: hidden;
}
.tile .content-wrapper .tile-content .tile-img {
  position: relative;
  display: block;
  width: 100%;
  margin: 0 auto;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
}
.tile .content-wrapper .tile-content .tile-img.tile-img-sm {
  position: absolute;
  margin: 0;
  padding: 0;
  display: block;
  opacity: 0.3;
}
.tile .content-wrapper .tile-content .tile-img.tile-img-bg {
  position: absolute;
  background-position: left top;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.tile .content-wrapper .tile-content .tile-holder {
  position: relative;
  display: block;
  padding: 0;
}
.tile .content-wrapper .tile-content .tile-holder.tile-holder-sm {
  position: absolute;
  margin: 0;
  padding: 0;
}
/* -- Tiles color ------------------------------------- */
.tile-red {
  background-color: #d4af37;
}
.tile-red .tile-content,
.tile-red .title {
  color: #eceff1;
}
.tile-red:hover,
.tile-red:active,
.tile-red.active {
  background-color: #dd191d;
}
.tile-red:focus {
  background-color: #d01716;
}
.tile-red:disabled,
.tile-red.disabled,
.tile-red[disabled] {
  background-color: #b3b3b3;
}
.tile-red .ink {
  background-color: #c41411;
}
.tile-red-reverse {
  background-color: #e84e40;
}
.tile-red-reverse:hover {
  background-color: #eceff1;
}
.tile-red-reverse:hover .tile-content,
.tile-red-reverse:hover .title {
  color: #e84e40;
}
.tile-red-inverse {
  background-color: #eceff1;
}
.tile-red-inverse .tile-content,
.tile-red-inverse .title {
  color: #e84e40;
}
.tile-red-inverse-reverse .tile-content,
.tile-red-inverse-reverse .title {
  color: #e84e40;
}
.tile-red-inverse-reverse:hover {
  background-color: #e84e40;
}
.tile-red-inverse-reverse:hover .tile-content,
.tile-red-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-red-inverse-reverse .ink {
  background-color: #c41411;
}
.tile-pink {
  background-color: #02075d;
}
.tile-pink .tile-content,
.tile-pink .title {
  color: #eceff1;
}
.tile-pink:hover,
.tile-pink:active,
.tile-pink.active {
  background-color: #435C24;
}
.tile-pink:focus {
  background-color: #435C24;
}
.tile-pink:disabled,
.tile-pink.disabled,
.tile-pink[disabled] {
  background-color: #b3b3b3;
}
.tile-pink .ink {
  background-color: #ad1457;
}
.tile-pink-reverse {
  background-color: #ec407a;
}
.tile-pink-reverse:hover {
  background-color: #eceff1;
}
.tile-pink-reverse:hover .tile-content,
.tile-pink-reverse:hover .title {
  color: #ec407a;
}
.tile-pink-inverse {
  background-color: #eceff1;
}
.tile-pink-inverse .tile-content,
.tile-pink-inverse .title {
  color: #ec407a;
}
.tile-pink-inverse-reverse .tile-content,
.tile-pink-inverse-reverse .title {
  color: #ec407a;
}
.tile-pink-inverse-reverse:hover {
  background-color: #ec407a;
}
.tile-pink-inverse-reverse:hover .tile-content,
.tile-pink-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-pink-inverse-reverse .ink {
  background-color: #ad1457;
}
.tile-purple {
  background-color: #d4af37;
}
.tile-purple .tile-content,
.tile-purple .title {
  color: #eceff1;
}
.tile-purple:hover,
.tile-purple:active,
.tile-purple.active {
  background-color: #8e24aa;
}
.tile-purple:focus {
  background-color: #7b1fa2;
}
.tile-purple:disabled,
.tile-purple.disabled,
.tile-purple[disabled] {
  background-color: #b3b3b3;
}
.tile-purple .ink {
  background-color: #6a1b9a;
}
.tile-purple-reverse {
  background-color: #ab47bc;
}
.tile-purple-reverse:hover {
  background-color: #eceff1;
}
.tile-purple-reverse:hover .tile-content,
.tile-purple-reverse:hover .title {
  color: #ab47bc;
}
.tile-purple-inverse {
  background-color: #eceff1;
}
.tile-purple-inverse .tile-content,
.tile-purple-inverse .title {
  color: #ab47bc;
}
.tile-purple-inverse-reverse .tile-content,
.tile-purple-inverse-reverse .title {
  color: #ab47bc;
}
.tile-purple-inverse-reverse:hover {
  background-color: #ab47bc;
}
.tile-purple-inverse-reverse:hover .tile-content,
.tile-purple-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-purple-inverse-reverse .ink {
  background-color: #6a1b9a;
}
.tile-deep-purple {
  background-color: #7e57c2;
}
.tile-deep-purple .tile-content,
.tile-deep-purple .title {
  color: #eceff1;
}
.tile-deep-purple:hover,
.tile-deep-purple:active,
.tile-deep-purple.active {
  background-color: #5e35b1;
}
.tile-deep-purple:focus {
  background-color: #512da8;
}
.tile-deep-purple:disabled,
.tile-deep-purple.disabled,
.tile-deep-purple[disabled] {
  background-color: #b3b3b3;
}
.tile-deep-purple .ink {
  background-color: #4527a0;
}
.tile-deep-purple-reverse {
  background-color: #7e57c2;
}
.tile-deep-purple-reverse:hover {
  background-color: #eceff1;
}
.tile-deep-purple-reverse:hover .tile-content,
.tile-deep-purple-reverse:hover .title {
  color: #7e57c2;
}
.tile-deep-purple-inverse {
  background-color: #eceff1;
}
.tile-deep-purple-inverse .tile-content,
.tile-deep-purple-inverse .title {
  color: #7e57c2;
}
.tile-deep-purple-inverse-reverse .tile-content,
.tile-deep-purple-inverse-reverse .title {
  color: #7e57c2;
}
.tile-deep-purple-inverse-reverse:hover {
  background-color: #7e57c2;
}
.tile-deep-purple-inverse-reverse:hover .tile-content,
.tile-deep-purple-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-deep-purple-inverse-reverse .ink {
  background-color: #4527a0;
}
.tile-indigo {
  background-color: #02075d;
}
.tile-indigo .tile-content,
.tile-indigo .title {
  color: #eceff1;
}
.tile-indigo:hover,
.tile-indigo:active,
.tile-indigo.active {
  background-color: #3949ab;
}
.tile-indigo:focus {
  background-color: #303f9f;
}
.tile-indigo:disabled,
.tile-indigo.disabled,
.tile-indigo[disabled] {
  background-color: #b3b3b3;
}
.tile-indigo .ink {
  background-color: #283593;
}
.tile-indigo-reverse {
  background-color: #5c6bc0;
}
.tile-indigo-reverse:hover {
  background-color: #eceff1;
}
.tile-indigo-reverse:hover .tile-content,
.tile-indigo-reverse:hover .title {
  color: #5c6bc0;
}
.tile-indigo-inverse {
  background-color: #eceff1;
}
.tile-indigo-inverse .tile-content,
.tile-indigo-inverse .title {
  color: #5c6bc0;
}
.tile-indigo-inverse-reverse .tile-content,
.tile-indigo-inverse-reverse .title {
  color: #5c6bc0;
}
.tile-indigo-inverse-reverse:hover {
  background-color: #5c6bc0;
}
.tile-indigo-inverse-reverse:hover .tile-content,
.tile-indigo-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-indigo-inverse-reverse .ink {
  background-color: #283593;
}
.tile-blue {
  background-color: #738ffe;
}
.tile-blue .tile-content,
.tile-blue .title {
  color: #eceff1;
}
.tile-blue:hover,
.tile-blue:active,
.tile-blue.active {
  background-color: #4e6cef;
}
.tile-blue:focus {
  background-color: #455ede;
}
.tile-blue:disabled,
.tile-blue.disabled,
.tile-blue[disabled] {
  background-color: #b3b3b3;
}
.tile-blue .ink {
  background-color: #3b50ce;
}
.tile-blue-reverse {
  background-color: #738ffe;
}
.tile-blue-reverse:hover {
  background-color: #eceff1;
}
.tile-blue-reverse:hover .tile-content,
.tile-blue-reverse:hover .title {
  color: #738ffe;
}
.tile-blue-inverse {
  background-color: #eceff1;
}
.tile-blue-inverse .tile-content,
.tile-blue-inverse .title {
  color: #738ffe;
}
.tile-blue-inverse-reverse .tile-content,
.tile-blue-inverse-reverse .title {
  color: #738ffe;
}
.tile-blue-inverse-reverse:hover {
  background-color: #738ffe;
}
.tile-blue-inverse-reverse:hover .tile-content,
.tile-blue-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-blue-inverse-reverse .ink {
  background-color: #3b50ce;
}
.tile-light-blue {
  background-color: #02075d;
}
.tile-light-blue .tile-content,
.tile-light-blue .title {
  color: #eceff1;
}
.tile-light-blue:hover,
.tile-light-blue:active,
.tile-light-blue.active {
  background-color: #039be5;
}
.tile-light-blue:focus {
  background-color: #0288d1;
}
.tile-light-blue:disabled,
.tile-light-blue.disabled,
.tile-light-blue[disabled] {
  background-color: #b3b3b3;
}
.tile-light-blue .ink {
  background-color: #0277bd;
}
.tile-light-blue-reverse {
  background-color: #29b6f6;
}
.tile-light-blue-reverse:hover {
  background-color: #eceff1;
}
.tile-light-blue-reverse:hover .tile-content,
.tile-light-blue-reverse:hover .title {
  color: #29b6f6;
}
.tile-light-blue-inverse {
  background-color: #eceff1;
}
.tile-light-blue-inverse .tile-content,
.tile-light-blue-inverse .title {
  color: #29b6f6;
}
.tile-light-blue-inverse-reverse .tile-content,
.tile-light-blue-inverse-reverse .title {
  color: #29b6f6;
}
.tile-light-blue-inverse-reverse:hover {
  background-color: #29b6f6;
}
.tile-light-blue-inverse-reverse:hover .tile-content,
.tile-light-blue-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-light-blue-inverse-reverse .ink {
  background-color: #0277bd;
}
.tile-cyan {
  background-color: #02075d;
}
.tile-cyan .tile-content,
.tile-cyan .title {
  color: #eceff1;
}
.tile-cyan:hover,
.tile-cyan:active,
.tile-cyan.active {
  background-color: #00acc1;
}
.tile-cyan:focus {
  background-color: #0097a7;
}
.tile-cyan:disabled,
.tile-cyan.disabled,
.tile-cyan[disabled] {
  background-color: #b3b3b3;
}
.tile-cyan .ink {
  background-color: #00838f;
}
.tile-cyan-reverse {
  background-color: #26c6da;
}
.tile-cyan-reverse:hover {
  background-color: #eceff1;
}
.tile-cyan-reverse:hover .tile-content,
.tile-cyan-reverse:hover .title {
  color: #26c6da;
}
.tile-cyan-inverse {
  background-color: #eceff1;
}
.tile-cyan-inverse .tile-content,
.tile-cyan-inverse .title {
  color: #26c6da;
}
.tile-cyan-inverse-reverse .tile-content,
.tile-cyan-inverse-reverse .title {
  color: #26c6da;
}
.tile-cyan-inverse-reverse:hover {
  background-color: #26c6da;
}
.tile-cyan-inverse-reverse:hover .tile-content,
.tile-cyan-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-cyan-inverse-reverse .ink {
  background-color: #00838f;
}
.tile-teal {
  background-color: #02075d;
}
.tile-teal .tile-content,
.tile-teal .title {
  color: #eceff1;
}
.tile-teal:hover,
.tile-teal:active,
.tile-teal.active {
  background-color: #00897b;
}
.tile-teal:focus {
  background-color: #00796b;
}
.tile-teal:disabled,
.tile-teal.disabled,
.tile-teal[disabled] {
  background-color: #b3b3b3;
}
.tile-teal .ink {
  background-color: #00695c;
}
.tile-teal-reverse {
  background-color: #26a69a;
}
.tile-teal-reverse:hover {
  background-color: #eceff1;
}
.tile-teal-reverse:hover .tile-content,
.tile-teal-reverse:hover .title {
  color: #26a69a;
}
.tile-teal-inverse {
  background-color: #eceff1;
}
.tile-teal-inverse .tile-content,
.tile-teal-inverse .title {
  color: #26a69a;
}
.tile-teal-inverse-reverse .tile-content,
.tile-teal-inverse-reverse .title {
  color: #26a69a;
}
.tile-teal-inverse-reverse:hover {
  background-color: #26a69a;
}
.tile-teal-inverse-reverse:hover .tile-content,
.tile-teal-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-teal-inverse-reverse .ink {
  background-color: #00695c;
}
.tile-green {
  background-color: #02075d;
}
.tile-green .tile-content,
.tile-green .title {
  color: #eceff1;
}
.tile-green:hover,
.tile-green:active,
.tile-green.active {
  background-color: #0a8f08;
}
.tile-green:focus {
  background-color: #0a7e07;
}
.tile-green:disabled,
.tile-green.disabled,
.tile-green[disabled] {
  background-color: #b3b3b3;
}
.tile-green .ink {
  background-color: #0a7e07;
}
.tile-green-reverse {
  background-color: #2baf2b;
}
.tile-green-reverse:hover {
  background-color: #eceff1;
}
.tile-green-reverse:hover .tile-content,
.tile-green-reverse:hover .title {
  color: #2baf2b;
}
.tile-green-inverse {
  background-color: #eceff1;
}
.tile-green-inverse .tile-content,
.tile-green-inverse .title {
  color: #2baf2b;
}
.tile-green-inverse-reverse .tile-content,
.tile-green-inverse-reverse .title {
  color: #2baf2b;
}
.tile-green-inverse-reverse:hover {
  background-color: #2baf2b;
}
.tile-green-inverse-reverse:hover .tile-content,
.tile-green-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-green-inverse-reverse .ink {
  background-color: #0a7e07;
}
.tile-light-green {
  background-color: #02075d;
}
.tile-light-green .tile-content,
.tile-light-green .title {
  color: #eceff1;
}
.tile-light-green:hover,
.tile-light-green:active,
.tile-light-green.active {
  background-color: #7cb342;
}
.tile-light-green:focus {
  background-color: #689f38;
}
.tile-light-green:disabled,
.tile-light-green.disabled,
.tile-light-green[disabled] {
  background-color: #b3b3b3;
}
.tile-light-green .ink {
  background-color: #558b2f;
}
.tile-light-green-reverse {
  background-color: #9ccc65;
}
.tile-light-green-reverse:hover {
  background-color: #eceff1;
}
.tile-light-green-reverse:hover .tile-content,
.tile-light-green-reverse:hover .title {
  color: #9ccc65;
}
.tile-light-green-inverse {
  background-color: #eceff1;
}
.tile-light-green-inverse .tile-content,
.tile-light-green-inverse .title {
  color: #9ccc65;
}
.tile-light-green-inverse-reverse .tile-content,
.tile-light-green-inverse-reverse .title {
  color: #9ccc65;
}
.tile-light-green-inverse-reverse:hover {
  background-color: #9ccc65;
}
.tile-light-green-inverse-reverse:hover .tile-content,
.tile-light-green-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-light-green-inverse-reverse .ink {
  background-color: #558b2f;
}
.tile-lime {
  background-color: #d4af37;
}
.tile-lime .tile-content,
.tile-lime .title {
  color: #eceff1;
}
.tile-lime:hover,
.tile-lime:active,
.tile-lime.active {
  background-color: #c0ca33;
}
.tile-lime:focus {
  background-color: #afb42b;
}
.tile-lime:disabled,
.tile-lime.disabled,
.tile-lime[disabled] {
  background-color: #b3b3b3;
}
.tile-lime .ink {
  background-color: #9e9d24;
}
.tile-lime-reverse {
  background-color: #d4e157;
}
.tile-lime-reverse:hover {
  background-color: #eceff1;
}
.tile-lime-reverse:hover .tile-content,
.tile-lime-reverse:hover .title {
  color: #d4e157;
}
.tile-lime-inverse {
  background-color: #eceff1;
}
.tile-lime-inverse .tile-content,
.tile-lime-inverse .title {
  color: #d4e157;
}
.tile-lime-inverse-reverse .tile-content,
.tile-lime-inverse-reverse .title {
  color: #d4e157;
}
.tile-lime-inverse-reverse:hover {
  background-color: #d4e157;
}
.tile-lime-inverse-reverse:hover .tile-content,
.tile-lime-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-lime-inverse-reverse .ink {
  background-color: #9e9d24;
}
.tile-yellow {
  background-color: #ffee58;
}
.tile-yellow .tile-content,
.tile-yellow .title {
  color: #eceff1;
}
.tile-yellow:hover,
.tile-yellow:active,
.tile-yellow.active {
  background-color: #fdd835;
}
.tile-yellow:focus {
  background-color: #fbc02d;
}
.tile-yellow:disabled,
.tile-yellow.disabled,
.tile-yellow[disabled] {
  background-color: #b3b3b3;
}
.tile-yellow .ink {
  background-color: #f9a825;
}
.tile-yellow-reverse {
  background-color: #ffee58;
}
.tile-yellow-reverse:hover {
  background-color: #eceff1;
}
.tile-yellow-reverse:hover .tile-content,
.tile-yellow-reverse:hover .title {
  color: #ffee58;
}
.tile-yellow-inverse {
  background-color: #eceff1;
}
.tile-yellow-inverse .tile-content,
.tile-yellow-inverse .title {
  color: #ffee58;
}
.tile-yellow-inverse-reverse .tile-content,
.tile-yellow-inverse-reverse .title {
  color: #ffee58;
}
.tile-yellow-inverse-reverse:hover {
  background-color: #ffee58;
}
.tile-yellow-inverse-reverse:hover .tile-content,
.tile-yellow-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-yellow-inverse-reverse .ink {
  background-color: #f9a825;
}
.tile-amber {
  background-color: #d4af37;
}
.tile-amber .tile-content,
.tile-amber .title {
  color: #eceff1;
}
.tile-amber:hover,
.tile-amber:active,
.tile-amber.active {
  background-color: #FFB6C1;
}
.tile-amber:focus {
  background-color: #FFB6C1;
}
.tile-amber:disabled,
.tile-amber.disabled,
.tile-amber[disabled] {
  background-color: #b3b3b3;
}
.tile-amber .ink {
  background-color: #d4af37;
}
.tile-amber-reverse {
  background-color: #ffca28;
}
.tile-amber-reverse:hover {
  background-color: #eceff1;
}
.tile-amber-reverse:hover .tile-content,
.tile-amber-reverse:hover .title {
  color: #ffca28;
}
.tile-amber-inverse {
  background-color: #eceff1;
}
.tile-amber-inverse .tile-content,
.tile-amber-inverse .title {
  color: #ffca28;
}
.tile-amber-inverse-reverse .tile-content,
.tile-amber-inverse-reverse .title {
  color: #ffca28;
}
.tile-amber-inverse-reverse:hover {
  background-color: #ffca28;
}
.tile-amber-inverse-reverse:hover .tile-content,
.tile-amber-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-amber-inverse-reverse .ink {
  background-color: #ff8f00;
}
.tile-orange {
  background-color: #ffa726;
}
.tile-orange .tile-content,
.tile-orange .title {
  color: #eceff1;
}
.tile-orange:hover,
.tile-orange:active,
.tile-orange.active {
  background-color: #fb8c00;
}
.tile-orange:focus {
  background-color: #f57c00;
}
.tile-orange:disabled,
.tile-orange.disabled,
.tile-orange[disabled] {
  background-color: #b3b3b3;
}
.tile-orange .ink {
  background-color: #ef6c00;
}
.tile-orange-reverse {
  background-color: #ffa726;
}
.tile-orange-reverse:hover {
  background-color: #eceff1;
}
.tile-orange-reverse:hover .tile-content,
.tile-orange-reverse:hover .title {
  color: #ffa726;
}
.tile-orange-inverse {
  background-color: #eceff1;
}
.tile-orange-inverse .tile-content,
.tile-orange-inverse .title {
  color: #ffa726;
}
.tile-orange-inverse-reverse .tile-content,
.tile-orange-inverse-reverse .title {
  color: #ffa726;
}
.tile-orange-inverse-reverse:hover {
  background-color: #ffa726;
}
.tile-orange-inverse-reverse:hover .tile-content,
.tile-orange-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-orange-inverse-reverse .ink {
  background-color: #ef6c00;
}
.tile-deep-orange {
  background-color: #d4af37;
}
.tile-deep-orange .tile-content,
.tile-deep-orange .title {
  color: #eceff1;
}
.tile-deep-orange:hover,
.tile-deep-orange:active,
.tile-deep-orange.active {
  background-color: #f4511e;
}
.tile-deep-orange:focus {
  background-color: #e64a19;
}
.tile-deep-orange:disabled,
.tile-deep-orange.disabled,
.tile-deep-orange[disabled] {
  background-color: #b3b3b3;
}
.tile-deep-orange .ink {
  background-color: #d84315;
}
.tile-deep-orange-reverse {
  background-color: #ff7043;
}
.tile-deep-orange-reverse:hover {
  background-color: #eceff1;
}
.tile-deep-orange-reverse:hover .tile-content,
.tile-deep-orange-reverse:hover .title {
  color: #ff7043;
}
.tile-deep-orange-inverse {
  background-color: #eceff1;
}
.tile-deep-orange-inverse .tile-content,
.tile-deep-orange-inverse .title {
  color: #ff7043;
}
.tile-deep-orange-inverse-reverse .tile-content,
.tile-deep-orange-inverse-reverse .title {
  color: #ff7043;
}
.tile-deep-orange-inverse-reverse:hover {
  background-color: #ff7043;
}
.tile-deep-orange-inverse-reverse:hover .tile-content,
.tile-deep-orange-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-deep-orange-inverse-reverse .ink {
  background-color: #d84315;
}
.tile-brown {
  background-color: #8d6e63;
}
.tile-brown .tile-content,
.tile-brown .title {
  color: #eceff1;
}
.tile-brown:hover,
.tile-brown:active,
.tile-brown.active {
  background-color: #6d4c41;
}
.tile-brown:focus {
  background-color: #5d4037;
}
.tile-brown:disabled,
.tile-brown.disabled,
.tile-brown[disabled] {
  background-color: #b3b3b3;
}
.tile-brown .ink {
  background-color: #4e342e;
}
.tile-brown-reverse {
  background-color: #8d6e63;
}
.tile-brown-reverse:hover {
  background-color: #eceff1;
}
.tile-brown-reverse:hover .tile-content,
.tile-brown-reverse:hover .title {
  color: #8d6e63;
}
.tile-brown-inverse {
  background-color: #eceff1;
}
.tile-brown-inverse .tile-content,
.tile-brown-inverse .title {
  color: #8d6e63;
}
.tile-brown-inverse-reverse .tile-content,
.tile-brown-inverse-reverse .title {
  color: #8d6e63;
}
.tile-brown-inverse-reverse:hover {
  background-color: #8d6e63;
}
.tile-brown-inverse-reverse:hover .tile-content,
.tile-brown-inverse-reverse:hover .title {
  color: #eceff1;
}
.tile-brown-inverse-reverse .ink {
  background-color: #4e342e;
}
/*-- Tiles size --------------------------------------- */
.tile {
  width: 270px;
  height: 130px;
}
.tile .content-wrapper .tile-content {
  height: 130px;
  padding: 10px;
}
.tile .content-wrapper .tile-content .tile-img {
  height: 86.66666667px;
}
.tile .content-wrapper .tile-content .tile-img-bg {
  width: 270px;
  height: 130px;
  margin-left: -10px;
  margin-top: -10px;
}
.tile .content-wrapper .tile-content .tile-img-sm {
  width: 65px;
  height: 43.33333333px;
}
.tile .content-wrapper .tile-content .tile-img-sm,
.tile .content-wrapper .tile-content .tile-holder-sm {
  bottom: 10px;
  left: 10px;
}
.tile.tile-sqr {
  width: 130px;
}
.tile.tile-sqr .content-wrapper .tile-content .tile-img-bg {
  width: 130px;
}
.tile-lg {
  width: 550px;
  height: 270px;
}
.tile-lg .content-wrapper .tile-content {
  height: 270px;
  padding: 20px;
}
.tile-lg .content-wrapper .tile-content .tile-img {
  height: 180px;
}
.tile-lg .content-wrapper .tile-content .tile-img-bg {
  width: 550px;
  height: 270px;
  margin-left: -20px;
  margin-top: -20px;
}
.tile-lg .content-wrapper .tile-content .tile-img-sm {
  width: 135px;
  height: 90px;
}
.tile-lg .content-wrapper .tile-content .tile-img-sm,
.tile-lg .content-wrapper .tile-content .tile-holder-sm {
  bottom: 20px;
  left: 20px;
}
.tile-lg.tile-sqr {
  width: 270px;
}
.tile-lg.tile-sqr .content-wrapper .tile-content .tile-img-bg {
  width: 270px;
}
.tile-sm {
  width: 130px;
  height: 60px;
}
.tile-sm .content-wrapper .tile-content {
  height: 60px;
  padding: 5px;
}
.tile-sm .content-wrapper .tile-content .tile-img {
  height: 40px;
}
.tile-sm .content-wrapper .tile-content .tile-img-bg {
  width: 130px;
  height: 60px;
  margin-left: -5px;
  margin-top: -5px;
}
.tile-sm .content-wrapper .tile-content .tile-img-sm {
  width: 30px;
  height: 20px;
}
.tile-sm .content-wrapper .tile-content .tile-img-sm,
.tile-sm .content-wrapper .tile-content .tile-holder-sm {
  bottom: 5px;
  left: 5px;
}
.tile-sm.tile-sqr {
  width: 60px;
}
.tile-sm.tile-sqr .content-wrapper .tile-content .tile-img-bg {
  width: 60px;
}
/*-- Display animation -------------------------------- */
.display-animation > * {
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
}
.display-animation > .animated {
  -webkit-animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
  -o-animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
  animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
}
.no-js .display-animation > * {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

@keyframes display {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}
@-o-keyframes display {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}
@-ms-keyframes display {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes display {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}
@-webkit-keyframes display {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
  
}
&:before {
		content: '';
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0));
	}
	h1 {
		font-size: 2rem;
		font-weight: 700;
	}
}
.custom-input, .btn-custom {
	border: 0;
	background: transparent;
	border-bottom: 4px solid white;
	border-radius: 0;
	margin-bottom: 0;
}
.custom-input:focus {
	border-color: white;
	background: transparent;
	color: white;
}
.btn-custom {
	color: white;
	cursor: pointer;
}
.display-5 {
	font-size: 1.5rem;
}
#greeting {
	margin-top: 2rem;
	font-size: 2rem;
}
@media (min-width: 576px) {
	.background h1 {
		font-size: 2.5rem;
	}
	.display-5 {
		font-size: 1.5rem;
	}
	#greeting {
		margin-top: 1rem;
		font-size: 1.5rem;
	}
}
@media (min-width: 992px) {
	.background h1 {
		font-size: 2rem;
	}
	#greeting {
		font-size: 2rem;
	}
}

@media (min-width: 1200px) {
	.background h1 {
		font-size: 2.5rem;
	}
	#greeting {
		font-size: 2.6rem;
	}
  

}
@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(5deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-5deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

@keyframes sonar {
  0% {
    transform: scale(0.9);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    opacity: 0;
  }
}
body {
  font-size: 0.9rem;
}
.page-wrapper .sidebar-wrapper,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
.sidebar-wrapper ul li a i,
.page-wrapper .page-content,
.sidebar-wrapper .sidebar-search input.search-menu,
.sidebar-wrapper .sidebar-search .input-group-text,
.sidebar-wrapper .sidebar-menu ul li a,
#show-sidebar,
#close-sidebar {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/*----------------page-wrapper----------------*/

.page-wrapper {
  height: 100vh;
}

.page-wrapper .theme {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 4px;
  margin: 2px;
}

.page-wrapper .theme.chiller-theme {
  background: #1e2229;
}

/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}

@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}
/*----------------show sidebar button----------------*/
#show-sidebar {
  position: fixed;
  left: 0;
  top: 10px;
  border-radius: 0 4px 4px 0px;
  width: 35px;
  transition-delay: 0.3s;
}
.page-wrapper.toggled #show-sidebar {
  left: -40px;
}
/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
  width: 260px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -300px;
  z-index: 999;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/*----------------sidebar-content----------------*/

.sidebar-content {
  max-height: calc(100% - 30px);
  height: calc(100% - 30px);
  overflow-y: auto;
  position: relative;
}

.sidebar-content.desktop {
  overflow-y: hidden;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
  padding: 10px 20px;
  display: flex;
  align-items: center;
}

.sidebar-wrapper .sidebar-brand > a {
  text-transform: uppercase;
  font-weight: bold;
  flex-grow: 1;
}

.sidebar-wrapper .sidebar-brand #close-sidebar {
  cursor: pointer;
  font-size: 20px;
}
/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
  float: left;
  width: 60px;
  padding: 2px;
  border-radius: 12px;
  margin-right: 15px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
  float: left;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
  font-size: 8px;
  margin-right: 4px;
  color: #5cb85c;
}

/*-----------------------sidebar-search------------------------*/

.sidebar-wrapper .sidebar-search > div {
  padding: 10px 20px;
}

/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 12px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}

.sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
  display: inline-block;
  animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  content: "\f105";
  font-style: normal;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background: 0 0;
  position: absolute;
  right: 15px;
  top: 14px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f111";
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-right: 10px;
  font-size: 8px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
  float: right;
  margin-top: 8px;
  margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
  float: right;
  margin-top: 0px;
}

.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
  right: 17px;
}

/*--------------------------side-footer------------------------------*/

.sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: flex;
}

.sidebar-footer > a {
  flex-grow: 1;
  text-align: center;
  height: 30px;
  line-height: 30px;
  position: relative;
}

.sidebar-footer > a .notification {
  position: absolute;
  top: 0;
}

.badge-sonar {
  display: inline-block;
  background: #980303;
  border-radius: 50%;
  height: 8px;
  width: 8px;
  position: absolute;
  top: 0;
}

.badge-sonar:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border: 2px solid #980303;
  opacity: 0;
  border-radius: 50%;
  width: 100%;
  height: 100%;
  animation: sonar 1.5s infinite;
}

/*--------------------------page-content-----------------------------*/

.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
}

.page-wrapper .page-content > div {
  padding: 20px 40px;
}

.page-wrapper .page-content {
  overflow-x: hidden;
}

/*------scroll bar---------------------*/

::-webkit-scrollbar {
  width: 5px;
  height: 7px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #525965;
  border: 0px none #ffffff;
  border-radius: 0px;
}
::-webkit-scrollbar-thumb:hover {
  background: #525965;
}
::-webkit-scrollbar-thumb:active {
  background: #525965;
}
::-webkit-scrollbar-track {
  background: transparent;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: transparent;
}
::-webkit-scrollbar-track:active {
  background: transparent;
}
::-webkit-scrollbar-corner {
  background: transparent;
}


/*-----------------------------chiller-theme-------------------------------------------------*/

.chiller-theme .sidebar-wrapper {
    background: #010328;
}

.chiller-theme .sidebar-wrapper .sidebar-header,
.chiller-theme .sidebar-wrapper .sidebar-search,
.chiller-theme .sidebar-wrapper .sidebar-menu {
    border-top: 1px solid #525965;
}

.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
}

.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
.chiller-theme .sidebar-wrapper .sidebar-brand>a,
.chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
.chiller-theme .sidebar-footer>a {
    color: #ffffff;
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info,
.chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
.chiller-theme .sidebar-footer>a:hover i {
    color: #b8bfce;
}

.page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #bdbdbd;
}

.page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
}

.chiller-theme .sidebar-wrapper ul li:hover a i,
.chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #16c7ff;
    text-shadow:0px 0px 10px rgba(22, 199, 255, 0.5);
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: #3a3f48;
}

.chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
}

.chiller-theme .sidebar-footer {
    background: #3a3f48;
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
}

.chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
}

.chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
}

		</style>
		
		<title>Registration</title>
	</head>
	
	<body>

	
		<ul class="topnav">
		<li> <img src="sky gold LOGO 2 png.png" alt="" style="width:100px; height:50px;"></li>
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="studentinfro.php">Student Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="userdetails.php">Student Details</a></li>
			<li><a href="payment.php">Payment Information</a></li>
			<li><a href="attendance.php">Attendance</a></li>
		</ul>

		<div class="dashboard display-animation" style="margin: 0 auto; width: 1130px;">
  <a class="tile tile-lg tile-pink ripple-effect" href="payment.php">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img" style="background-image: url(https://wallpaperaccess.com/full/30100.jpg);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Student Information</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-purple ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img" style="background-image: url(https://wallpaperaccess.com/full/30100.jpg);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Daily Classes</span> 
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-cyan ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-holder tile-holder-sm">
          <span class="title">
       <h3 id="day" class="display-5">Monday, January 01</h3>
       <span class="title" id="time">12:00 AM<br></span><br>
       <span class="title" id="greeting">Good Morning!<br></span>
       
          
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-amber ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img tile-img-bg" style="background-image: url(https://www.google.com/design/images/doodlearchive.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Today Schedule</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-light-blue ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img tile-img-bg" style="background-image: url(https://www.google.com/design/images/googleplus.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Attendace</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-red ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img" style="background-image: url(https://www.google.com/design/images/design-minutes.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">List of Tute Classes</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-indigo ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img" style="background-image: url(https://www.google.com/design/images/cast.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Hall Allocations</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-sqr tile-deep-orange ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img" style="background-image: url(https://www.google.com/design/images/glass.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Total Students Today</span>
        </span>
      </span>      
    </span>
  </a>
  <a class="tile tile-lg tile-light-green ripple-effect" href="#">
    <span class="content-wrapper">
      <span class="tile-content">
        <span class="tile-img tile-img-bg" style="background-image: url(https://www.google.com/design/images/webdesigner.png);"></span>
        <span class="tile-holder tile-holder-sm">
          <span class="title">Other</span>
        </span>
      </span>      
    </span>
  </a>
</div>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Ruwana Academy Management</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="Mr Nilupul (Manager) 2.jpeg" alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Nilupul
            <strong>Senarathne</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Registration</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Scan ID</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Attendance</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  
    <script>

(function($) {
    var speed = 2000;
    var container =  $('.display-animation');
    container.each(function() {
        var elements = $(this).children();
        elements.each(function() {
            var elementOffset = $(this).offset();
            var offset = elementOffset.left*0.8 + elementOffset.top;
            var delay = parseFloat(offset/speed).toFixed(2);
            $(this)
                .css("-webkit-animation-delay", delay+'s')
                .css("-o-animation-delay", delay+'s')
                .css("animation-delay", delay+'s')
                .addClass('animated');
        });
    });
})(jQuery);


(function($) {
    $(".ripple-effect").click(function(e){
        var rippler = $(this);

        // create .ink element if it doesn't exist
        if(rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if(!ink.height() && !ink.width())
        {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({height: d, width: d});
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width()/2;
        var y = e.pageY - rippler.offset().top - ink.height()/2;

        // set .ink position and add class .animate
        ink.css({
            top: y+'px',
            left:x+'px'
        }).addClass("animate");
    })
})(jQuery);

    </script>
    <script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R" crossorigin="anonymous"></script>
		<script>
		// Document ready function
$(function() {
	
	// Time function to get the date/time
	function time() {
		
		// Create new date var and init other vars
		var date = new Date(),
			hours = date.getHours(), // Get the hours
			minutes = date.getMinutes().toString(), // Get minutes, convert to string
			ante, // Will be used for AM and PM later
			greeting, // Set the appropriate greeting for the time of day
			dd = date.getDate().toString(), // Get the current day
			userName = "Admin"; // Can be used to insert a unique name

		/* Set the AM or PM according to the time, it is important to note that up
			to this point in the code this is a 24 clock */
		if (hours < 12) {
			ante = "AM";
			greeting = "Morning";
		} else if (hours === 12 && hours >= 3) {
			ante = "PM";
			greeting = "Afternoon"
		} else {
			ante = "PM";
			greeting = "Evening";
		}

		/* Since it is a 24 hour clock, 0 represents 12am, if that is the case
		then convert that to 12 */
		if (hours === 0) {
			hours = 12;
			
			/* For any other case where hours is not equal to twelve, let's use modulus
			to get the corresponding time equivilant */
		} else if (hours !== 12) {
			hours = hours % 12;
		}

		// Minutes can be in single digits, hence let's add a 0 when the length is less than two
		if (minutes.length < 2) {
			minutes = "0" + minutes;
		}

		// Let's do the same thing above here for the day
		if (dd.length < 2) {
			dd = "0" + dd;
		}

		// Months
		Date.prototype.monthNames = [
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December"
		];

		// Days
		Date.prototype.weekNames = [
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday"
		];
		
		// Return the month name according to its number value
		Date.prototype.getMonthName = function() {
			return this.monthNames[this.getMonth()];
		};
		
		// Return the day's name according to its number value
		Date.prototype.getWeekName = function() {
			return this.weekNames[this.getDay()];
		};

		// Display the following in html
		$("#time").html(hours + ":" + minutes + " " + ante);
		$("#day").html(date.getWeekName() + ", " + date.getMonthName() + " " + dd);
		$("#greeting").html("Good " + greeting + ", " + userName + ".");
		
		// The interval is necessary for proper time syncing
		setInterval(time, 1000);
	}
	time();
});
</script>
<script>
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


</script>

<script>
	 var firebaseConfig = {
    apiKey: "AIzaSyDkoQOcnGi1xVtf-vNDGf-ceYW31_iC0JU",
    authDomain: "ruwana-academy.firebaseapp.com",
    databaseURL: "https://ruwana-academy.firebaseio.com",
    projectId: "ruwana-academy",
    storageBucket: "ruwana-academy.appspot.com",
    messagingSenderId: "121261082835",
    appId: "1:121261082835:web:ebba2043b1762cac03ac26",
    measurementId: "G-WQEPJCKJJK"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="connect.js"></script>
</html>