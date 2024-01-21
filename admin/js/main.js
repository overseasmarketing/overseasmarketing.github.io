function changeFrameSrc(newSrc) {
  let frame = document.getElementById("main_frame");
  frame.src = newSrc;
}

function logout() {
  window.location.href = "logout";
  // alert("You've been logged out");
}

function showModal(content) {
  if (content == null) {
    // Nothing
  } else {
    let modal_text = (document.getElementById("modal_text").innerHTML =
      content);
    let modal_trigger_btn = document
      .getElementById("modal_trigger_btn")
      .click();
  }
}

function support() {
  window.location.href = "https://overseasmarketing.studio/contact";
}

let basic_button_sendmail = `<button class="w-90 btn btn-info text-left" onclick="showModal('In order to use this feature please subscribe to <b>Quadmin Premium</b>.')"> <i class="fa-solid fa-at"></i> &nbsp; Send Mail </button>`;

let premium_button_sendmail = `<button class="w-90 btn btn-info text-left" onclick="changeFrameSrc('send-mail.php')"> <i class="fa-solid fa-at"></i> &nbsp; Send Mail </button>`;
