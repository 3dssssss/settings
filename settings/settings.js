$('#update-form').submit(function(event) {
    event.preventDefault();
    var updateText = $('#myTextbox1').val();
    $.ajax({
      type: 'POST',
      url: 'update.php', // or update.py, update.rb, etc.
      data: { update_text: updateText },
      success: function(data) {
        console.log('Data updated successfully!');
      },
      error: function(xhr, status, error) {
        console.log('Error updating data:', error);
      }
    });
  });