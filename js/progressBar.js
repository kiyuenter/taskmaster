function setProgress(percent) {
    var circle = document.querySelector('.progress-ring');
    var radius = circle.r.baseVal.value;
    var circumference = radius * 2 * Math.PI;
  
    var offset = circumference - percent / 100 * circumference;
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = offset;
  
    document.querySelector('.progress-text').textContent = `${percent}%`;
  }
  
  function completeProfileSection(section) {
    // Simulate completion of profile section
    // Replace this with actual AJAX call to PHP script
    // Example:
    // $.post("update_progress.php", { section: section }, function(data) {
    //    setProgress(data.progress);
    // });
    // Here, 'section' is the identifier for the completed section
    // update_progress.php is the PHP script that updates the progress
    // data.progress is the updated progress percentage returned by the PHP script
  
    // Simulated progress update (replace this with actual AJAX call)
    var progress = Math.floor(Math.random() * 20) + 20 + 20 + 20 + 20; // Random progress between 20% and 40%
    setProgress(progress);
  }
  