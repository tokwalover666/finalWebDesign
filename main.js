var modal = document.getElementById("myModal");

function openModal(user) {
    modal.style.display = "block";

}

function closeModal() {
    modal.style.display = "none";
}

var images = document.querySelectorAll(".user");

images.forEach(function(img) {
    img.onclick = function() {
        var user = this.getAttribute('sign-up-form');
        openModal(user);
    };
});

$(document).ready(function() {
    $('input[type=password]').keyup(function() {
        var pswd = $(this).val();

        //validate the length
        if (pswd.length < 8) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }

        //validate letter
        if (pswd.match(/[A-z]/)) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }

        //validate capital letter
        if (pswd.match(/[A-Z]/)) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }

        //validate number
        if (pswd.match(/\d/)) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }

        //validate space
        if (pswd.match(/[^a-zA-Z0-9\-\/]/)) {
            $('#space').removeClass('invalid').addClass('valid');
        } else {
            $('#space').removeClass('valid').addClass('invalid');
        }

    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });

});

$(function(){
    var regExp = /^[a-zA-Z0-9._%+-]+@ciit\.edu\.ph$/;

    $('[type="email"]').on('keyup', function() {
        $('.message').hide();
        regExp.test($(this).val()) ? $('.message.success').show() : $('.message.error').show();
    });

    $('form').submit(function(event) {
        var emailInput = $(this).find('input[name="email"]');
        if (!regExp.test(emailInput.val())) {
            event.preventDefault(); 
            alert('Please enter your CIIT email');
            emailInput.focus();
        }
    });
});

function start() {
    gapi.load('auth2', function() {
        auth2 = gapi.auth2.init({
            client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
        });
        });
    }
    
    $('#googleSignIn').click(function() {
        auth2.grantOfflineAccess().then(signInCallback);
    });

