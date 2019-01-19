var truck = document.getElementsByClassName("truck");
leftdicrection = -1;
rightdirection = 1;
speed = 20;
truckMove = document.getElementById("truck");

document.addEventListener("keydown", e => {
  var truckPos = truckMove.offsetLeft;
  if (e.keyCode == 37) {
    truckMove.style.left = truckPos + speed * leftdicrection + "px";
  } else if (e.keyCode == 39) {
    truckMove.style.left = truckPos + speed * rightdirection + "px";
  }
});
