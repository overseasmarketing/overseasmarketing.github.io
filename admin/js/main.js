function changeFrameSrc(newSrc) {
  const frame = document.getElementById("main_frame");
  frame.src = newSrc;
}

function logout() {
  window.location.href = "logout";
}

function checkClientDevice() {
  const device = window.navigator.userAgent;
  // console.log(`Device: ${device}`);
  return device;
}

function notification(message) {
  console.log(`Notification: ${message}`);
  // alert(message);
}
