  function start() {
  time();
  window.setInterval("time()", 1000);
}

function time() {
  var now = new Date();
  hours = now.getHours();
  minutes = now.getMinutes();
  seconds = now.getSeconds();

  thetime = (hours < 10) ? "0" + hours + ":" : hours + ":";
  thetime += (minutes < 10) ? "0" + minutes + ":" : minutes + ":";
  thetime += (seconds < 10) ? "0" + seconds : seconds;

  element = document.getElementById("time");
  element.innerHTML = thetime;
}
