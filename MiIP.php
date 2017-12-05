<HTML>
<BODY>

Mi IP:

Comienzo PHP

<?php 
 //Gets the IP address
 $ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; 
 ?> 
 
 Fin PHP


<script type="text/javascript"> var userip; </script> 
<script type="text/javascript" 
$.get("http://ipinfo.io", function(response) {
    alert(response.ip);
}, "jsonp");>
</script>
<script type="text/javascript">document.write("Your IP address is :", userip); </script> 

<script type="text/javascript" 
$(document).ready(function () {
    $.getJSON("http://jsonip.com/?callback=?", function (data) {
        console.log(data);
        alert(data.ip);
    });
});>

</script>

WTI:

<script type="text/javascript"
	src="http://www.oil-price.net/TABLE2/gen.php?lang=en">
</script>
<noscript> To get the WTI <a href="http://www.oil-price.net/dashboard.php?lang=en#TABLE2">oil price</a>, please enable Javascript.
</noscript>
'
'
BRENT:

<script type="text/javascript"
	src="http://www.oil-price.net/widgets/brent_crude_price_large/gen.php?lang=en">
</script>
<noscript> To get the BRENT <a href="http://www.oil-price.net/dashboard.php?lang=en#brent_crude_price_large">oil price</a>, please enable Javascript.
</noscript>


</BODY>
</HTML>