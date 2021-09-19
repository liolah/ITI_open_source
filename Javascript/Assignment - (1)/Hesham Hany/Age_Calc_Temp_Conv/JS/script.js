function calculateAge(){
  var by = document.getElementById("birth year").value;
  var fy = document.getElementById("future year").value;
  document.getElementById("result").innerHTML = `You will be either ${
    fy - by - 1
  } or ${fy - by} by ${fy}`;
}

function convertTemp() {
  var c = document.getElementById("cel").value;
  document.getElementById("resultf").innerHTML = `${c}°C is ${(
    c * 1.8 +
    32
  ).toFixed(2)} F°`;
  var f = document.getElementById("feh").value;
  document.getElementById("resultc").innerHTML = `${f}°F is ${(
    ((f - 32) * 5) /
    9
  ).toFixed(2)} C°`;
}