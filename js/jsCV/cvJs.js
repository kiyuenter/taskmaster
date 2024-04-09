function advanceProgressBar() {
  var progressBar = document.getElementById("progressBar");
  var width = parseInt(progressBar.style.width) || 0;
  
  // Increment progress by 10% (adjust as needed)
  width += 10;
  
  if (width > 100) {
    width = 100;
  }
  
  progressBar.style.width = width + "%";
}

function resetProgressBar() {
  var progressBar = document.getElementById("progressBar");
  progressBar.style.width = "0%";
}

// Education

function eduProgress() {
  var progressBar = document.getElementById("eduprogressBar");
  var width = parseInt(progressBar.style.width) || 0;
  
  // Increment progress by 10% (adjust as needed)
  width += 10;
  
  if (width > 100) {
    width = 100;
  }
  
  progressBar.style.width = width + "%";
}

function reseteduProgress() {
  var progressBar = document.getElementById("eduprogressBar");
  progressBar.style.width = "0%";
}