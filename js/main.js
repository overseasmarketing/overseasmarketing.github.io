// Navbar

function showClose() {
  document.getElementById("close").style.display = "block";
  document.getElementById("bars").style.display = "none";
}

function showBars() {
  document.getElementById("bars").style.display = "block";
  document.getElementById("close").style.display = "none";
}

function openLink(link) {
  window.open(link);
}
