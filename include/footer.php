<?php
/**
 * Created by PhpStorm.
 * User: Sumit
 * Date: 1/7/2018
 * Time: 10:41 AM
 */
?>

<footer>
    <div class="row no-pad no-margin">
        <div class="col-md-12 no-pad no-margin">
            <p class="text-center">&copy; 2018, DWIT Job Fair. All rights reserved. <span class="pull-right"> Powered by DWIT Digital Media </span></p>
        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/slippry.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
    $(function() {

        function toggleChevron(e) {
            $(e.target)
                .prev('.panel-heading')
                .find("i")
                .toggleClass('rotate-icon');
            $('.panel-body.animated').toggleClass('zoomIn zoomOut');
        }
        $('#accordion').on('hide.bs.collapse', toggleChevron);
        $('#accordion').on('show.bs.collapse', toggleChevron);
    })
</script>
<script>
    $(document).ready(function(){
        $("#registerForm").validate();
        $('.registrationClose').modal('show');
    });
</script>
<script>
    $(document).ready(function () {
        $("#phoneno").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#errmsg").html("Phone Number Only!!").show().fadeOut(3500);
                return false;
            }
            else{
                return true;
            }
        });
    });
</script>

<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }
        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date('March 23, 2018 11:00:00')));
    initializeClock('clockdiv', deadline);
</script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel ({
            slideSpeed : 800,
            autoPlay: 100,
            stopOnHover : true,
        });
    });
</script>

</body>
</html>
