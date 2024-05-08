// Assuming jQuery is included (you might need to add a CDN link)

$(document).ready(function() {
    $('#questionForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var questionTitle = $('#questionTitle').val();
        var questionBody = $('#questionBody').val();
        var course = $('#course').val();

        // Send data to PHP script using AJAX
        $.ajax({
            url: 'process_question.php',
            type: 'POST',
            data: {
                questionTitle: questionTitle,
                questionBody: questionBody,
                course: course
            },
            success: function(response) {
                if (response.success) {
                    alert('Question submitted successfully!');
                    // Clear the form
                    $('#questionForm').trigger('reset');
                } else {
                    alert('Error submitting question: ' + response.message);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX error:', textStatus, errorThrown);
                alert('An error occurred. Please try again later.');
            }
        )}
    )}
