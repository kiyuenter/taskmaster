function uploadFiles() {
    var files = document.getElementById('fileInput').files;
    var formData = new FormData();

    for (var i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
    }

    var xhr = new XMLHttpRequest();

    xhr.upload.onprogress = function(event) {
        if (event.lengthComputable) {
            var progress = (event.loaded / event.total) * 100;
            updateProgress(progress);
        }
    };

    xhr.onload = function() {
        if (xhr.status === 200) {
            updateProgress(100);
            alert('Upload complete!');
        } else {
            alert('Error uploading files!');
        }
    };

    xhr.open('POST', 'upload.php', true);
    xhr.send(formData);
}

function updateProgress(progress) {
    var progressBar = document.getElementById('progressBar');
    var progressText = document.getElementById('progressText');

    progressBar.style.backgroundImage = 'conic-gradient(#007bff ' + progress + '%, transparent ' + progress + '%)';
    progressText.textContent = Math.round(progress) + '%';
}
