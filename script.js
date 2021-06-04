var link = document.querySelector(".contacts__button");
var buy = document.querySelectorAll(".button--buy");
var popup = document.querySelector(".modal-login");
var popup2 = document.querySelector(".modal-item");
var close = popup.querySelector(".modal-close");
var close2 = popup2.querySelector(".modal-close2");

var form = popup.querySelector("form");
var login = popup.querySelector("[name=login]");
var password = popup.querySelector("[name=password]");

var isStorageSupport = true;
var storage = "";

try {
    storage = localStorage.getItem("login");
} catch (err) {
    isStorageSupport = false;
}

link.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.add("modal-show");

      if (storage) {
          login.value = storage;
          password.focus();
      } else {
          login.focus();
      }
});

for (var index = 0; index < buy.length; index++) {
    button = buy[index];
    button.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup2.classList.add("modal-show");
    
          if (storage) {
              login.value = storage;
              password.focus();
          } else {
              login.focus();
          }
    });
}


close.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.remove("modal-show");
    popup.classList.remove("modal-error");
});

close2.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup2.classList.remove("modal-show");
    popup2.classList.remove("modal-error");
});

document.querySelector('.modal-button').addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.remove("modal-show");
    popup.classList.remove("modal-error");
});

document.querySelector('.modal-button2').addEventListener("click", function (evt) {
    evt.preventDefault();
    popup2.classList.remove("modal-show");
    popup2.classList.remove("modal-error");
});

form.addEventListener("sumbit", function (evt) {
  if (!login.value || !password.value) {
    evt.preventDefault();
    popup.classList.remove("modal-error");
    popup.offsetWidth = popup.offsetWidth;
    popup.classList.add("modal-error");
  } else {
    if (isStorageSupport) {
    localStorage.setItem("login", login.value);
    }
  }
} );

window.addEventListener("keydown", function (evt) {
    if (evt.keyCode === 27) {
        evt.preventDefault();
        if (popup.classList.contains("modal-show")) {
            popup.classList.remove("modal-show");
            popup.classList.remove("modal-error");
        }
    }
});
