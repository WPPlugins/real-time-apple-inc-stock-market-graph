<div id="apple_wp">

<script language="Javascript">        

  setInterval("apple_settime()", 1000);

</script>
<script language="Javascript">        

  setInterval("apple_settime_1()", 1000);

</script>

  <div id="apple_Website-Trend-Gadget">
<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){

?>
    <div id="apple_Gadget-Heading">
    <div name="apple_link_3_div" id="apple_link_3_div"><h3 >Real time Apple,Inc. Stock Market  Graph</h3></div>
    <input type="hidden" id="apple_submit" name="apple_submit" value="6" />


  <form name="apple_myform" action="" method="GET">



   <span id="apple_between_boxes">Enter markets you want to compare:</span> <br />



   <input type="text" name="apple_first_name" id="apple_first_name" value="<?php echo $apple_first_name;?>" onkeydown="if(event.keyCode == 13){return apple_writeText(this.form)}"/> vs <br/>


<input type="text" name="apple_second_name" id="apple_second_name" value="<?php echo $apple_second_name;?>"onkeydown="if(event.keyCode == 13){return apple_writeText(this.form)}"/> <br />
 

      <select name="apple_drop_down_range" onchange="apple_writeText(this.form)">

        <option value="mtd">30 Days</option>

        <option value="ytd">12 Months</option>

        <option value="all">All Time</option>

		<option value="2010">2010</option>

		<option value="2009">2009</option>

		<option value="2008">2008</option>

		<option value="2007">2007</option>

		<option value="2006">2006</option>

		<option value="2005">2005</option>

		<option value="2004">2004</option>



      </select> 


      <select name="apple_drop_down_geo"onchange="apple_writeText(this.form)">

        <option value="all">Global</option>

        <option value="us">USA</option>

        <option value="ca">Canada</option>

        <option value="gb">United Kingdom</option>  

        <option value="au">Australia</option>

        <option value="in">India</option> <option value="" disabled="">&mdash;&mdash;</option>

        <option value="af"> Afghanistan </option>

	<option value="al"> Albania </option>

	<option value="dz"> Algeria </option>

	<option value="as"> American Samoa </option>

	<option value="ad"> Andorra </option>

	<option value="ao"> Angola </option>

	<option value="ai"> Anguilla </option>

	<option value="aq"> Antarctica </option>

	<option value="ag"> Antigua and Barbuda </option>

	<option value="ar"> Argentina </option>

	<option value="am"> Armenia </option>

	<option value="aw"> Aruba </option>

	<option value="at"> Austria </option>

	<option value="az"> Azerbaijan </option>

	<option value="bs"> Bahamas </option>

	<option value="bh"> Bahrain </option>

	<option value="bd"> Bangladesh </option>

	<option value="bb"> Barbados </option>

	<option value="by"> Belarus </option>

	<option value="be"> Belgium </option>

	<option value="bz"> Belize </option>

	<option value="bj"> Benin </option>

	<option value="bm"> Bermuda </option>

	<option value="bt"> Bhutan </option>

	<option value="bo"> Bolivia </option>

	<option value="bw"> Botswana </option>

	<option value="bv"> Bouvet Island </option>

	<option value="br"> Brazil </option>

	<option value="bn"> Brunei Darussalam </option>

	<option value="bg"> Bulgaria </option>

	<option value="bf"> Burkina Faso </option>

	<option value="bi"> Burundi </option>

	<option value="kh"> Cambodia </option>

	<option value="cm"> Cameroon </option>

	<option value="ca"> Canada </option>

	<option value="cv"> Cape Verde </option>

	<option value="ky"> Cayman Islands </option>

	<option value="td"> Chad </option>

	<option value="cl"> Chile </option>

	<option value="cn"> China </option>

	<option value="co"> Colombia </option>

	<option value="km"> Comoros </option>

	<option value="cd"> Congo, Republic </option>

	<option value="cg"> Congo </option>

	<option value="ck"> Cook Islands </option>

	<option value="cr"> Costa Rica </option>

	<option value="ci"> Cote d'Ivoire </option>

	<option value="hr"> Croatia </option>

	<option value="cu"> Cuba </option>

	<option value="cy"> Cyprus </option>

	<option value="cz"> Czech Republic </option>

	<option value="dk"> Denmark </option>

	<option value="dj"> Djibouti </option>

	<option value="dm"> Dominica </option>

	<option value="do"> Dominican Republic </option>

	<option value="ec"> Ecuador </option>

	<option value="eg"> Egypt </option>



	<option value="sv"> El Salvador </option>



	<option value="gq"> Equatorial Guinea </option>



	<option value="er"> Eritrea </option>



	<option value="ee"> Estonia </option>



	<option value="et"> Ethiopia </option>



	<option value="fj"> Fiji </option>



	<option value="fi"> Finland </option>



	<option value="fr"> France </option>



	<option value="gf"> French Guiana </option>



	<option value="pf"> French Polynesia </option>



	<option value="tf"> French Southern </option>



	<option value="ga"> Gabon </option>



	<option value="gm"> Gambia </option>



	<option value="ge"> Georgia </option>



	<option value="de"> Germany </option>



	<option value="gh"> Ghana </option>



	<option value="gi"> Gibraltar </option>



	<option value="gr"> Greece </option>



	<option value="gl"> Greenland </option>



	<option value="gd"> Grenada </option>



	<option value="gp"> Guadeloupe </option>



	<option value="gu"> Guam </option>



	<option value="gt"> Guatemala </option>



	<option value="gn"> Guinea </option>



	<option value="gw"> Guinea-Bissau </option>



	<option value="gy"> Guyana </option>



	<option value="ht"> Haiti </option>



	<option value="hn"> Honduras </option>



	<option value="hk"> Hong Kong </option>



	<option value="hu"> Hungary </option>



	<option value="is"> Iceland </option>



	<option value="in"> India </option>



	<option value="id"> Indonesia </option>



	<option value="ir"> Iran </option>



	<option value="iq"> Iraq </option>



	<option value="ie"> Ireland </option>



	<option value="il"> Israel </option>



	<option value="it"> Italy </option>



	<option value="jm"> Jamaica </option>



	<option value="jp"> Japan </option>



	<option value="jo"> Jordan </option>



	<option value="kz"> Kazakhstan </option>



	<option value="ke"> Kenya </option>



	<option value="ki"> Kiribati </option>



	<option value="kw"> Kuwait </option>



	<option value="kg"> Kyrgyzstan </option>



	<option value="lv"> Latvia </option>



	<option value="lb"> Lebanon </option>



	<option value="ls"> Lesotho </option>



	<option value="lr"> Liberia </option>



	<option value="ly"> Libya </option>



	<option value="li"> Liechtenstein </option>



	<option value="lt"> Lithuania </option>



	<option value="lu"> Luxembourg </option>



	<option value="mo"> Macau </option>



	<option value="mk"> Macedonia </option>



	<option value="mg"> Madagascar </option>



	<option value="mw"> Malawi </option>



	<option value="my"> Malaysia </option>



	<option value="mv"> Maldives </option>



	<option value="ml"> Mali </option>



	<option value="mt"> Malta </option>



	<option value="mh"> Marshall Islands </option>



	<option value="mq"> Martinique </option>



	<option value="mr"> Mauritania </option>



	<option value="mu"> Mauritius </option>



	<option value="yt"> Mayotte </option>



	<option value="mx"> Mexico </option>



	<option value="fm"> Micronesia </option>



	<option value="md"> Moldova </option>



	<option value="mc"> Monaco </option>



	<option value="mn"> Mongolia </option>



	<option value="ms"> Montserrat </option>



	<option value="ma"> Morocco </option>



	<option value="mz"> Mozambique </option>



	<option value="mm"> Myanmar </option>



	<option value="na"> Namibia </option>



	<option value="nr"> Nauru </option>



	<option value="np"> Nepal </option>



	<option value="nl"> Netherlands </option>



	<option value="an"> Netherlands Antilles </option>



	<option value="nc"> New Caledonia </option>



	<option value="nz"> New Zealand </option>



	<option value="ni"> Nicaragua </option>



	<option value="ne"> Niger </option>



	<option value="ng"> Nigeria </option>



	<option value="nu"> Niue </option>



	<option value="nf"> Norfolk Island </option>



	<option value="kp"> North Korea </option>



	<option value="no"> Norway </option>



	<option value="om"> Oman </option>



	<option value="pk"> Pakistan </option>



	<option value="pw"> Palau </option>



	<option value="ps"> Palestinian Territory </option>



	<option value="pa"> Panama </option>



	<option value="pg"> Papua New Guinea </option>



	<option value="py"> Paraguay </option>



	<option value="pe"> Peru </option>



	<option value="ph"> Philippines </option>



	<option value="pn"> Pitcairn </option>



	<option value="pl"> Poland </option>



	<option value="pt"> Portugal </option>



	<option value="pr"> Puerto Rico </option>



	<option value="qa"> Qatar </option>



	<option value="re"> Reunion </option>



	<option value="ro"> Romania </option>



	<option value="ru"> Russian Federation </option>



	<option value="rw"> Rwanda </option>



	<option value="sh"> St. Helena </option>



	<option value="lc"> Saint Lucia </option>



	<option value="ws"> Samoa </option>



	<option value="sm"> San Marino </option>



	<option value="st"> Sao Tome and Principe </option>



	<option value="sa"> Saudi Arabia </option>



	<option value="sn"> Senegal </option>



	<option value="sc"> Seychelles </option>



       <option value="sl"> Sierra Leone </option>



	<option value="sg"> Singapore </option>



	<option value="sk"> Slovakia </option>



	<option value="si"> Slovenia </option>



	<option value="sb"> Solomon Islands </option>



	<option value="so"> Somalia </option>



	<option value="za"> South Africa </option>



	<option value="kr"> South Korea </option>



	<option value="es"> Spain </option>



	<option value="lk"> Sri Lanka </option>



	<option value="sd"> Sudan </option>



	<option value="sr"> Suriname </option>



	<option value="sz"> Swaziland </option>



	<option value="se"> Sweden </option>



	<option value="ch"> Switzerland </option>



	<option value="sy"> Syria </option>



	<option value="tw"> Taiwan </option>



	<option value="tj"> Tajikistan </option>



	<option value="tz"> Tanzania </option>



	<option value="th"> Thailand </option>



	<option value="tg"> Togo </option>



	<option value="tk"> Tokelau </option>



	<option value="to"> Tonga </option>



	<option value="tn"> Tunisia </option>



	<option value="tr"> Turkey </option>



	<option value="tm"> Turkmenistan </option>



	<option value="tv"> Tuvalu </option>



	<option value="um"> US Minor Islands </option>



	<option value="vi"> Virgin Islands (U.S.) </option>



	<option value="ug"> Uganda </option>



	<option value="ua"> Ukraine </option>



	<option value="ae"> United Arab Emirates </option>



	<option value="uy"> Uruguay </option>



	<option value="uz"> Uzbekistan </option>



	<option value="vu"> Vanuatu </option>



	<option value="va"> Vatican </option>



	<option value="ve"> Venezuela </option>
	<option value="vn"> Viet Nam </option>
	<option value="eh"> Western Sahara </option>
	<option value="ye"> Yemen </option>
	<option value="zm"> Zambia </option>

	<option value="zw"> Zimbabwe </option>

      </select>


     
       <input type="button" name="clock" id="apple_show_clock"  value=""/>  


       <input id="apple_show_graph" type="button" name="button2" Value="Show Graph" onClick="apple_writeText(this.form)"/><br /> 

  </form>
<!-- END OF THE UPPER FORM -->

     </div> <br /> <br />
<?php } //ENDING THE UPPER IF STATEMENT?>
 <!-- BEGIN OF THE STATIC APPLE GRAPH -->

 <div id="apple_Stock-Market-Gadget_1">
  <h2> Apple,Inc. Stock Market</h2>

     <div id="apple_Gadget-Img_1">

          <a href="http://www.google.com/finance?q=NASDAQ:AAPL"

target="_blank" title="Today's Apple Stock Market"><img width="90%"

src="http://www.google.com/finance/chart?cht=c&q=.CINDEXNASDAQ%3A.IXIC&tlf=12h&auto=1&zx=n1cdhz-28eb2o"></a>
    <div id="date">
      
      <form name="apple_myform_1">
         <input type="button" name="clock_1" id="apple_show_clock"  value=""/> 
      </form>
    </div>
 
    <div id="apple_Color-Index_1">

      <a href="http://www.google.com/finance?q=NASDAQ%3AAAPL"

target="_blank\" style="color: blue;">NASDAQ:AAPL</a>&nbsp;&nbsp;

  
<a id="apple_enlarge_image_1"  target="_blank" href="http://www.google.com/finance?q=NASDAQ:AAPL&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a> 

</div>
</div>
</div> <br /> 

<!-- END OF THE STATIC APPLE GRAPH -->



<!-- START OF THE FINANCE COMPARISON GRAPH -->

<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name'])){?>
    <div id="apple_Stock-Market-Gadget_1">
  <h2>Stock Market Comparisons</h2>

     <div id="apple_Gadget-Img_1">

          <a href="http://www.google.com/finance?q=<?php if(!empty($options['apple_first_name']) &&!empty($options['apple_second_name'])){echo $apple_first_name; echo ", "; echo $apple_second_name;}else echo "HPQ,IBM"; ?>"

target="_blank" title="Todays Market's Comparison"><img width="90%"
src="http://www.google.com/finance/chart?cht=c&amp;q=INDEXDJX%3A.DJI%2CINDEXSP%3A.INX%2CINDEXNASDAQ%3A.IXIC&amp;tlf=12h&amp;auto=1&amp;zx=n1cdhz-28eb2o"></a>

<!-- src="http://www.google.com/finance/chart?cht=c&q=.CINDEXNASDAQ%3A.IXIC&tlf=12h&auto=1&zx=n1cdhz-28eb2o"></a> -->
    <div id="apple_Color-Index_1">

      <a href="http://www.google.com/finance?q=<?php if(empty($options['apple_first_name']) && empty($options['apple_second_name'])){
                             echo $apple_first_name ="IBM";
      }else echo $apple_first_name;?>"

target="_blank\" style="color: blue;"><?php if(empty($options['apple_first_name']) && empty($options['apple_second_name']) && empty($options['apple_third_name'])){
                             echo $apple_first_name ="IBM";
      }else echo $apple_first_name;?></a>&nbsp;&nbsp;

      <a href="http://www.google.com/finance?q=<?php if(empty($options['apple_first_name']) && empty($options['apple_second_name']) &&empty($options['apple_third_name'])){
                             echo $apple_second_name ="HPQ";
      }else echo $apple_first_name;?>"

target="_blank" style="color: red;"><?php if(empty($options['apple_third_name']) && empty($options['apple_second_name']) &&empty($options['apple_third_name'])){
                             echo $apple_second_name ="HPQ";
      }else echo $apple_second_name;?></a>&nbsp;&nbsp;

     <!-- <a href="http://www.google.com/finance?q=<?php if(empty($options['apple_third_name']) && empty($options['apple_second_name']) &&empty($options['apple_third_name'])){
                             echo $apple_third_name ="NASDAQ:MSFT";
      }else echo $apple_first_name;?>"

target="_blank" style="color: orange;">NasdAq</a>-->

<a id="apple_enlarge_image_1"  target="_blank" href="http://www.google.com/finance?q=<?php if(!empty($options['apple_first_name']) &&!empty($options['apple_second_name'])){echo $apple_first_name; echo ", "; echo $apple_second_name;}else echo "IBM,HPQ"; ?>  NASDAQ:AAPL&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a> 

</div>
</div>
</div> <br /> 
<?php }?>


<!-- END OF THE FINANCE COMPARISON GRAPH -->

<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){?>
  <div id="comparisonTitle">
     <span><p><h2>Trends Graph</h2>  </p>  </span>
  </div>

    <div id="apple_Gadget-Img">
  
<a target="_blank" title="Click to see graph at Google.com" href="http://trends.google.com/trends/viz?q=<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name'])){ echo $apple_first_name; echo ", "; echo $apple_second_name;}else echo "AAPL,MSFT";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">

<img src="http://trends.google.com/trends/viz?q=<?php if(!empty($options['apple_first_name']) &&!empty($options['apple_second_name'])){echo $apple_first_name; echo ", "; echo $apple_second_name;}else echo "stocks,bonds";?>

&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"/></a>

  <div id="apple_Color-Index">

      <a id="apple_enlarge_image"  target="_blank" href="http://trends.google.com/trends/?q=<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name'])){echo $apple_first_name; echo ","; echo $apple_second_name;}else echo "AAPL,MSFT";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a> 

<a id="apple_firstname" target="_blank" href="http://trends.google.com/trends/?q=<?php

 if(empty($options['apple_first_name'])){ echo $apple_first_name= "AAPL";}else echo $apple_first_name;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $apple_first_name; ?></a>&nbsp;&nbsp;

     <a  id="apple_secondname" target="_blank" href="http://trends.google.com/trends/?q=<?php 

if(empty($options['apple_second_name'])){ echo $apple_second_name="MSFT"; } else echo $apple_second_name;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $apple_second_name;?></a>&nbsp;&nbsp;

    </div>
 </div>
 <?php }?>

  <span id="apple_google_disclaimer">* This Real time Apple,Inc. Stock Market  graph (image only) is provided by Google and does not reflect entire scope of each markets's graphs but only search trends based on the exact search phrase entered into box. Graph reflects search trends for words in market's name also.</span>   

<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){?>
  <div name="apple_link_2_div" id="apple_link_2_div">

    Get Your Widget&nbsp;<a title='Get Your Own Real time Apple,Inc. Stock Market Graph Widget HERE'   href='http://personalmoneystore.com/moneyblog/real-time-apple-inc-stock-market-graph/'>Real time Apple,Inc. Stock Market  Graphs Widget</a> 


</div>
<?php }?>

</div><!-- END OF apple_website_trend_image -->


 </div>