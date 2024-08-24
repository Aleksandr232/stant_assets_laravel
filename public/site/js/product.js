$(document).ready(function() {
    $.ajax({
        url: '{{ route("get_product") }}',
        type: 'GET',
        success: function(data) {
            console.log(data);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});
