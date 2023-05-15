const select = document.querySelector("select");
const score = document.querySelector("#score");
const pt1 = document.querySelector("#points-1");
const pt2 = document.querySelector("#points-2");
const pointsBtn1 = document.querySelector("#button-1");
const pointsBtn2 = document.querySelector("#button-2");
const reset = document.querySelector("#button-3");

var maxScore;
var points1 = 0;
var points2 = 0;

maxScore = select.value;

select.addEventListener("input", function () {
  maxScore = select.value;

  pt1.style.color = "#212529";
  pt2.style.color = "#212529";
});

pointsBtn1.addEventListener("click", function () {
  if (points1 < maxScore) {
    points1++;
    pt1.innerText = `${points1}`;
  }

  if (points1 == maxScore) {
    pt1.style.color = "green";
    pt2.style.color = "red";

    select.setAttribute("disabled", "disabled");
    select.style.cursor = "not-allowed";
    pointsBtn1.setAttribute("disabled", "disabled");
    pointsBtn1.style.cursor = "not-allowed";
    pointsBtn2.setAttribute("disabled", "disabled");
    pointsBtn2.style.cursor = "not-allowed";
  }
});
pointsBtn2.addEventListener("click", function () {
  if (points2 < maxScore) {
    points2++;
    pt2.innerText = `${points2}`;
  }

  if (points2 == maxScore) {
    pt2.style.color = "green";
    pt1.style.color = "red";

    select.setAttribute("disabled", "disabled");
    select.style.cursor = "not-allowed";
    pointsBtn1.setAttribute("disabled", "disabled");
    pointsBtn1.style.cursor = "not-allowed";
    pointsBtn2.setAttribute("disabled", "disabled");
    pointsBtn2.style.cursor = "not-allowed";
  }
});

reset.addEventListener("click", function () {
  points1 = 0;
  points2 = 0;
  pt1.style.color = "#212529";
  pt2.style.color = "#212529";
  pt1.innerText = `${points1}`;
  pt2.innerText = `${points2}`;
  select.removeAttribute("disabled");
  select.style.cursor = "";
  pointsBtn1.removeAttribute("disabled");
  pointsBtn1.style.cursor = "";
  pointsBtn2.removeAttribute("disabled");
  pointsBtn2.style.cursor = "";
});
