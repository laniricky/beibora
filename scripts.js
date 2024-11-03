// Initialize and customize the interactive map
function initMap() {
    // Replace with your business coordinates
    var myLatLng = { lat: 34.052235, lng: -118.243683 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatLng,
        disableDefaultUI: true, // Disable default map UI
        styles: [
            {
                "featureType": "poi",
                "stylers": [
                    { "visibility": "off" }
                ]
            }
        ]
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Your Business Name'
    });
}

// Form validation using jQuery
$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Simple validation
        if (name.trim() == '' || email.trim() == '' || message.trim() == '') {
            $('#formStatus').html('<div class="alert alert-danger" role="alert">Please fill in all fields.</div>');
            return;
        }

        // Assuming AJAX form submission for this example
        // You would replace the AJAX call with your own form submission logic
        // Simulating a successful form submission
        $('#formStatus').html('<div class="alert alert-success" role="alert">Your message has been sent successfully!</div>');

        // Clear form fields after successful submission
        $('#name').val('');
        $('#email').val('');
        $('#message').val('');
    });
});
