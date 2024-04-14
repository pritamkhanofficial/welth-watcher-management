<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>front/js/jquery-3.7.0.js<?=ct()?>"></script>
<!-- <script src="<?=base_url()?>front/js/jquery-migrate-3.4.1.js"></script> -->
<script src="<?=base_url()?>front/js/slick.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/waypoints.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/countUp.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/phosphor-icon.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/scrollreveal-4.0.0.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/bootstrap-drawer.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/drawer.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/main.min.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/jquery.steps.js<?=ct()?>"></script>
<script src="<?=base_url()?>front/js/script.js<?=ct()?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<!-- Ajax Form -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- on your view layout file HEAD section -->
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin="anonymous"></script>

<!-- Start of LiveChat (www.livechat.com) code -->
<!-- <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 17610915;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/17610915/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> -->
<!-- End of LiveChat code -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/661c21521ec1082f04e23465/1hreu4bdl';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
/*  $(document).ready(function(){
        Swal.fire("Saved!", "fdsdsf", "success");
    }); */
function swAlert(data) {
    Swal.fire(data?.title, data?.message, data?.type);
}
</script>

<script>
function asd(a) {
    if (a == 1) {
        $('#updatef').hide();
        $('#forgot-password').hide();
        $('#login_form').show();
    } else if (a == 2) {
        $('#login_form').hide();
        $('#forgot-password').hide();
        $('#updatef').show();
    } else if (a == 3) {
        $('#login_form').hide();
        $('#updatef').hide();
        $('#forgot-password').show();
    }
}

$(".regBtn").click(function(){
    asd(2)
});
$(".loginBtn").click(function(){
    asd(1)
});


$('.register').validate({
    rules: {
        full_name: {
            required: true
        },
        email: {
            required: true,
            email: true,
            remote: "<?=base_url('check-email')?>"
        },
        mobile: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10,
            remote: "<?=base_url('check-mobile')?>"
        },
        password: {
            required: true,
            minlength: 3
        },
        confirm_password: {
            required: true,
            minlength: 3,
            equalTo: "#password"
        }
    },
    messages: {
        name: "Please enter your name",
        email: {
            required: "Please enter your email",
            email: "Please enter a valid email"
        },
        mobile_no: {
            required: "Please enter your mobile number",
            number: "Mobile number must be numeric",
            minlength: "Mobile number must be 10 digit",
            maxlength: "Mobile number must be 10 digit"
        }
    }
});
$('#forgot-password').validate({
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        email: {
            required: "Please enter your email",
            email: "Please enter a valid email"
        }
    }
});



$(".register").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {
        var valid = $('.register').valid();
        if (valid) {
            $(".spinner-border").removeClass("d-none")
            return valid;
        }
    },
    success: function(response) {
        swAlert(response)
        if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can log in now.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        }
        $(".spinner-border").addClass("d-none")
    }
});
$("#login_form").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {

        $(".spinner-border").removeClass("d-none")
    },
    success: function(response) {
        swAlert(response)
        /* if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can now log in.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        } */
        $(".spinner-border").addClass("d-none")
        if (response?.type == 'success') {
            location.href = location.href
        }
    }
});
$("#forgot-password").ajaxForm({
    // contentType: 'application/json',
    beforeSubmit: function() {

        $(".spinner-border").removeClass("d-none")
    },
    success: function(response) {
        swAlert(response)
        /* if (response?.type == 'success') {
            if (response?.message == 'Registration successful! You can now log in.') {
                asd(1)
                $('.register')[0].reset();
                $("#otp").attr("required", false);
                $("#send_otp").removeClass("d-none")
                $(".submit_otp").addClass("d-none")
            } else {
                $("#send_otp").addClass("d-none")
                $(".submit_otp").removeClass("d-none")
                $("#otp").attr("required", true);
                var time = 300;
                timer(time);
                var counter = setInterval(function() {
                    if (!timerOn) {
                        clearInterval(counter);
                        //alert(timerOn)
                        $("#otp").attr("required", false);
                        $("#send_otp").removeClass("d-none")
                        $(".submit_otp").addClass("d-none")
                    }

                }, time);
            }
        } */
        $(".spinner-border").addClass("d-none")
        /* if (response?.type == 'success') {
            location.href = location.href
        } */
    }
});
</script>