<script>
// JavaScript code
$(document).ready(function() {
    $('#specialist').change(function() {
        // Get selected category
        var specialistId = $(this).val();
        
        // Disable subcategory select box
        $('#fname').prop('disabled', true);
        
        // Clear subcategory options
        $('#fname').html('<option value="">Select a Doctor</option>');

        if (specialistId != '') {
            // Send AJAX request to get subcategories
            $.ajax({
                url: 'get_doctors.php',
                type: 'POST',
                data: { specialistId: specialistId },
                dataType: 'json',
                success:function(response) {
                    // Loop through subcategories and create options
                    $.each(response, function(index, fname) {
                        $('#fname').append('<option value="' + fname + '">' + fname + '</option>');
                    });
                    
                    // Enable subcategory select box
                    $('#fname').prop('disabled', false);
                }
            });
        }
    });


// availability//

$('#fname').change(function() {
        // Get selected category
        var fnameId = $(this).val();
        
        // Disable subcategory select box
        $('#availability').prop('disabled', true);
        
        // Clear subcategory options
        $('#availability').html('<option value="">Select a availability</option>');
        
        if (fnameId != '') {
            // Send AJAX request to get subcategories
            $.ajax({
                url: 'get_doctors.php',
                type: 'POST',
                data: { fnameId: fnameId },
                dataType: 'json',
                success:function(response) {
                    // Loop through subcategories and create options
                    $.each(response, function(index, fnameId) {
                    $('#availability').append('<option value="' + fnameId + '">' + fnameId + '</option>');
                    });
                    
                    // Enable subcategory select box
                    $('#availability').prop('disabled', false);
                }
            });
        }
    });
// availability//
});
</script>