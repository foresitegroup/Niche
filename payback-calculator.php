<?php
$PageTitle = "Payback Calculator";
$Description = "";
$Keywords = "";
$HeaderImage = "header-market.jpg";
$SideMenu = "3";

$InsertJQ = '
      function Calculate() {
        var total = Math.round($("#samples").val() * $("#point").val());
        var twox = Math.round(total * 0.5);
        var threex = Math.round(twox * 0.75);
        var fourx = Math.round(threex * 0.85);
        var fivex = Math.round(fourx * 0.98);
        var sixx = Math.round(fivex * 0.98);
        
        var minusthirtyfive = ($("#retailprice").val() * 0.35).toFixed(2);
        var contperunit = Math.round((($("#retailprice").val() - minusthirtyfive) - $("#costofgoods").val()) * 100) / 100;
        var totalonex = Math.round(contperunit * total);
        var totaltwox = Math.round(contperunit * twox);
        var totalthreex = Math.round(contperunit * threex);
        var totalfourx = Math.round(contperunit * fourx);
        var totalfivex = Math.round(contperunit * fivex);
        var totalsixx = Math.round(contperunit * sixx);
        var totalvar = totalonex + totaltwox + totalthreex + totalfourx + totalfivex + totalsixx;
        var totalsamplecost = Math.round($("#samples").val() * $("#samplecost").val());
        var totalpayback = Math.round(totalvar - 5000 - totalsamplecost);
        var totalpurchases = Math.round(total + twox + threex + fourx + fivex + sixx);
        
        $(".total").text(total);
        $(".twox").text(twox);
        $(".threex").text(threex);
        $(".fourx").text(fourx);
        $(".fivex").text(fivex);
        $(".sixx").text(sixx);
        
        $(".minusthirtyfive").text("$" + minusthirtyfive);
        $(".contperunit").text("$" + contperunit);
        $(".totalonex").text("$" + totalonex);
        $(".totaltwox").text("$" + totaltwox);
        $(".totalthreex").text("$" + totalthreex);
        $(".totalfourx").text("$" + totalfourx);
        $(".totalfivex").text("$" + totalfivex);
        $(".totalsixx").text("$" + totalsixx);
        $(".totalvar").text("$" + totalvar);
        $(".totalsamplecost").text("$" + totalsamplecost);
        $(".totalpayback").text("$" + totalpayback);
        $(".totalpurchases").text("$" + totalpurchases);
        
        return [total, twox, threex, fourx, fivex, sixx];
      }
      
      $("input[type=\'text\']").keyup( function() {
        var a = Calculate();
        plot1.series[0].data = [[1,a[0]], [2,a[1]], [3,a[2]], [4,a[3]], [5,a[4]], [6,a[5]]];
        plot1.replot({resetAxes: true});
      });
      
      var a = Calculate();
      MyData = [[1,a[0]], [2,a[1]], [3,a[2]], [4,a[3]], [5,a[4]], [6,a[5]]];
      plot1 = $.jqplot("chartdiv", [MyData], {
        title: "ESTIMATED REPEAT DECAY CURVE",
        axesDefaults: { labelRenderer: $.jqplot.CanvasAxisLabelRenderer },
        axes: { xaxis: { label: "# repeat purchases", pad: 1 }, yaxis: { label: "# units sold" } },
        seriesDefaults: { color: "#444444", lineWidth: 1, markerOptions: { style: "filledSquare", size: 8, color: "#00FF00", shadow: false } },
        grid: { gridLineColor: "#000000", background: "#FFFFFF", borderColor: "#000000", borderWidth: 1.0, shadow: false }
      });
';

include "header.php";
?>

<!--[if lt IE 9]><script type="text/javascript" src="inc/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="inc/jquery.jqplot.js"></script>
<script type="text/javascript" src="inc/jqplot.canvasTextRenderer.js"></script>
<script type="text/javascript" src="inc/jqplot.canvasAxisLabelRenderer.js"></script>
<link rel="stylesheet" type="text/css" href="inc/jquery.jqplot.css" />

<div style="text-align: center; font-weight: bold; font-size: 125%;">
  YEAR 1 ANALYSIS OF Brand X<br>
  PARTICIPATION IN NSI'S SAMPLING PROGRAM Curves Gift Pack
  <hr style="width: 70%;">
  Brand X reported a +8 point increase in "Most Likely To Use Next".<br>
  It Increased from 6% in the Control Cell to 14% in the Test Cell.
</div>

<br><br>

<div style="width: 380px; margin: 0 auto;">
  <div style="float: left; width: 210px; text-align: right; margin-right: 5px;">Curves Gift Pack total samples</div>
  <input type="text" id="samples" value="1000000" style="float: left; width: 50px; text-align: right;">
  <div style="clear: both;"></div>
  
  <div style="float: left; width: 210px; text-align: right; margin-right: 5px;">Average point increase</div>
  <input type="text" id="point" value="0.08" style="float: left; width: 50px; text-align: right;">
  <div style="clear: both;"></div>
  
  <div class="total" style="float: left; height: 1em; width: 267px; text-align: right;"></div>
  <div style="float: left; padding-left: 5px;">new 1x purchases</div>
</div>

<br><br>

<div id="chartdiv" style="height: 200px; width: 400px; margin: 0 auto;"></div>

<br>

<table cellspacing="0" cellpadding="0" style="margin: 0 auto;">
  <tr>
    <td style="text-align: right;">*repeat purchases</td>
    <td style="width: 50px; text-align: center;">1x</td>
    <td style="width: 50px; text-align: center;">2x</td>
    <td style="width: 50px; text-align: center;">3x</td>
    <td style="width: 50px; text-align: center;">4x</td>
    <td style="width: 50px; text-align: center;">5x</td>
    <td style="width: 50px; text-align: center;">6x</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: right;">units sold</td>
    <td style="text-align: center;" class="total"></td>
    <td style="text-align: center;" class="twox"></td>
    <td style="text-align: center;" class="threex"></td>
    <td style="text-align: center;" class="fourx"></td>
    <td style="text-align: center;" class="fivex"></td>
    <td style="text-align: center; font-style: italic;" class="sixx"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
    <td colspan="2"><em>long time loyal users</em></td>
  </tr>
</table>

<br><br><br><br>

<div style="text-align: center; font-weight: bold; font-size: 125%;">
  Brand X YEAR 1 PAYBACK
</div>

<br><br>

<table cellspacing="0" cellpadding="2" border="0" style="margin: 0 auto; width: 520px;">
  <tr>
    <td colspan="7" style="font-size: 120%;">Variable Contribution Per Unit</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">retail price</td>
    <td style="text-align: right;">$<input type="text" id="retailprice" value="2.49" style="width: 30px; text-align: right; float: right;"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td style="text-align: right;">-35%</td>
    <td colspan="2">wholesale discount</td>
    <td style="text-align: right;" class="minusthirtyfive"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td style="text-align: right;">(minus)</td>
    <td colspan="2">cost of goods</td>
    <td style="text-align: right;">$<input type="text" id="costofgoods" value="0.60" style="width: 30px; text-align: right; float: right;"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align: right;">(equals)</td>
    <td colspan="3">variable contribution per unit</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr><td colspan="7">&nbsp;</td></tr>
  
  <tr>
    <td colspan="7" style="font-size: 120%;">Variable Contribution Per Unit x Units Sold = Total Variable Contribution</td>
  </tr>
  
  <tr>
    <td style="width: 14%;">&nbsp;</td>
    <td style="width: 14%; text-align: right;" class="contperunit"></td>
    <td style="width: 10%; text-align: center;">x</td>
    <td style="width: 14%; text-align: center;" class="total"></td>
    <td style="width: 10%; text-align: center;">=</td>
    <td style="width: 14%; text-align: center;" class="totalonex"></td>
    <td style="width: 25%;">(1x)</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(plus)</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td style="text-align: center;">x</td>
    <td style="text-align: center;" class="twox"></td>
    <td style="text-align: center;">=</td>
    <td style="text-align: center;" class="totaltwox"></td>
    <td>(2x)</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(plus)</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td style="text-align: center;">x</td>
    <td style="text-align: center;" class="threex"></td>
    <td style="text-align: center;">=</td>
    <td style="text-align: center;" class="totalthreex"></td>
    <td>(3x)</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(plus)</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td style="text-align: center;">x</td>
    <td style="text-align: center;" class="fourx"></td>
    <td style="text-align: center;">=</td>
    <td style="text-align: center;" class="totalfourx"></td>
    <td>(4x)</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(plus)</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td style="text-align: center;">x</td>
    <td style="text-align: center;" class="fivex"></td>
    <td style="text-align: center;">=</td>
    <td style="text-align: center;" class="totalfivex"></td>
    <td>(5x)</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(plus)</td>
    <td style="text-align: right;" class="contperunit"></td>
    <td style="text-align: center;">x</td>
    <td style="text-align: center;" class="sixx"></td>
    <td style="text-align: center;">=</td>
    <td style="text-align: center;" class="totalsixx"></td>
    <td>(6x)</td>
  </tr>
  
  <tr>
    <td colspan="5">&nbsp;</td>
    <td style="text-align: center;"><hr></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(equals)</td>
    <td colspan="4" style="font-size: 120%;">Total variable contribution</td>
    <td style="text-align: right;" class="totalvar"></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(minus)</td>
    <td colspan="4" style="font-size: 120%;">Total program cost</td>
    <td style="text-align: right;">$5000</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(minus)</td>
    <td colspan="4" style="font-size: 120%;"><div style="float: left;">*Total sample cost $</div><input type="text" id="samplecost" value="0.10" style="width: 30px; text-align: right;"></td>
    <td style="text-align: right;" class="totalsamplecost"></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="text-align: right;">(equals)</td>
    <td colspan="4" style="font-size: 120%;">Total year 1 payback at 6x repeat</td>
    <td style="text-align: right; font-size: 120%; border-top: 1px solid #000000;" class="totalpayback"></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr><td colspan="7">&nbsp;</td></tr>
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" style="font-size: 120%;">Total year 1 incremental purchases</td>
    <td style="text-align: right; font-size: 120%;" class="totalpurchases"></td>
    <td>&nbsp;</td>
  </tr>
</table>

<br><br>

<div style="width: 600px; margin: 0 auto;">
  Note:  The results from this analysis do not include purchase increases generated by this specific audience's high level word of mouth advertising and heavier than average usage.
</div>

<?php include "footer.php"; ?>