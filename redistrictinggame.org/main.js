// preload images
var preloader = new Array();

function preload() {
    for (var i=0; i<arguments.length; i++) {
        preloader[i] = document.createElement('img');
        preloader[i].setAttribute('src', arguments[i]);
    }
}

// timer for menu
var timer;

function subMenuTimer() {
  // hide submenu after .5 seconds of rolling out
  window.clearTimeout(timer);
  timer = window.setTimeout('hideSubMenu();', '500');
}
function clearSubMenuTimer() {
  window.clearTimeout(timer);
}
// make sure everything is hidden
function menuControl(idName, styleDisplay) {
  document.getElementById(idName).style.display = styleDisplay;
}
// highlight top level
function highlightMenu(menu, highlighted) {
  if (highlighted == true) {
  } else {
    subMenuTimer();
  }
}
// make submenu visible
function hideSubMenu() {
  var menuArray = ['submenu1', 'submenu2', 'submenu4', 'submenu5']; 	// 'submenu3' 
  window.clearTimeout(timer);
  for (var i=0; i<menuArray.length; i++) {
    menuControl(menuArray[i], 'none');
  }
}