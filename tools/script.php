    <script src="js/jquery.transit.js" type="text/javascript"></script>
    <script src="js/slider/functions.js" type="text/javascript"></script>

	<script type="text/javascript" src="js/radio.js"></script>
	<script type="text/javascript" src="js/JScript.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
    
    <script src="js/coordmap.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>

    <!--Google Maps -->
    <script type="text/javascript">
        function initialize() {
            var styleArray = [
            {
                featureType: 'all',
                stylers: [
                { saturation: 20 }
                ]
            }, {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [
                { hue: '#00ffee' },
                { saturation: 50 }
                ]
            }, {
                featureType: 'poi.business',
                elementType: 'labels',
                stylers: [
                { visibility: 'off' }
                ]
            }
            ];


            var latlng = new google.maps.LatLng(45.466, 9.186);
            var myOptions = {
                zoom: 12,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: styleArray,
                mapTypeControl: false,
                panControl: false,
                streetViewControl: false,
                zoomControl: false,

                scaleControl: true,
                scaleControlOptions: {
                    position: google.maps.ControlPosition.BOTTOM_LEFT
                }
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
			    myOptions);
        }
    </script>

    <script src="js/jquery.jcarousel.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
        //JSHint Validated Custom JS Code
        $(document).ready(function () {
            // Contact Form
            $("#ajax-contact-form").submit(function (e) {
                e.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var text = $("#message").val();
                var dataString = 'name=' + name + '&email=' + email + '&message=' + text;
                function isValidEmail(emailAddress) {
                    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                    return pattern.test(emailAddress);
                };

                if (isValidEmail(email) && (text.length > 20) && (name.length > 1)) {
                    $.ajax({
                        type: "POST",
                        url: "contact_form/contact_process.php",
                        data: dataString,
                        success: function () {
                            $('.success').fadeIn(1000);
                        }
                    });
                } else {
                    $('.error').fadeIn(1000);
                }

                return false;
            });

        });
    </script>
    <div id="valHeight"></div>
	
    <script type="text/javascript">	    /*$($.date_input.initialize);*/</script>
    <!--SlidetTop-->
	<!-- jQuery KenBurn Slider  -->	
	<script type="text/javascript" src="js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="js/slide/jquery.themepunch.revolution.min.js"></script>	

     <!--Slider-->
    
    
    <!--
			##############################
			 - ACTIVATE THE BANNER HERE -
			##############################
			-->
    <script type="text/javascript">
        //JSHint Validated Custom JS Code
        /*jslint smarttabs:true */
        var tpj = jQuery;
        tpj(document).ready(function () {

            if (tpj.fn.cssOriginal !== undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            tpj('.fullwidthbanner').revolution(
                {
                    delay: 229000,
                    startwidth: 890,
                    startheight: 650,
                    onHoverStop: 'on',
                    thumbWidth: 100, thumbHeight: 50,
                    thumbAmount: 4,
                    hideThumbs: 200, navigationType: 'both',
                    navigationArrows: "verticalcentered",
                    navigationStyle: "round",
                    touchenabled: "on",
                    navOffsetHorizontal: 0,
                    navOffsetVertical: 20,
                    fullWidth: "on",
                    shadow: 0
                });

        });

    </script>
    <script type="text/javascript">
        //JSHint Validated Custom JS Code
        /*jslint smarttabs:true */
        var tpj = jQuery;
        tpj(document).ready(function () {

            if (tpj.fn.cssOriginal !== undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            tpj('.fullwidthbanner2').revolution(
                {
                    delay: 229000,
                    startwidth: 890,
                    startheight: 650,
                    onHoverStop: 'on',
                    thumbWidth: 100, thumbHeight: 50,
                    thumbAmount: 4,
                    hideThumbs: 200, navigationType: 'both',
                    navigationArrows: "verticalcentered",
                    navigationStyle: "round",
                    touchenabled: "on",
                    navOffsetHorizontal: 0,
                    navOffsetVertical: 20,
                    fullWidth: "on",
                    shadow: 0
                });

        });

    </script>