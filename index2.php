<?PHP
include 'dbconnect_na.php';
?><html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="../../script/jquery-2.1.1.min.js"></script>
<title>
The most accurate statistics. Live from U.R.F.
</title>
<link rel="stylesheet" type="text/css" href="style/css.css">
<style type="text/css">
img{ filter:expression(fixPNGimg(this)); }
</style>
<script type="text/javascript">
function fixPNGimg(e){
  var src;
  /MSIE (5\.5|6).+Win/.test(navigator.userAgent) &&
  e.tagName=='IMG' && /\.png$/.test(e.src) && 
  (src=e.src) && (e.src="") &&
  (e.runtimeStyle.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "')");
}
</script>
<SCRIPT language=JavaScript1.2>
<!-- Begin

var no = 30; // image number or falling rate
var speed = 22; // the lower the number the faster the image moves
var snow = new Array();
snow[0] = "images/bublissimo/bubble.png"
snow[1] = "images/bublissimo/bubble1.png"
var ns4up = (document.layers) ? 1 : 0;  // browser sniffer
var ie4up = (document.all) ? 1 : 0;
var ns6up = (document.getElementById&&!document.all) ? 1 : 0;
var dx, xp, yp;    // coordinate and position variables
var am, stx, sty;  // amplitude and step variables
var i, doc_width = window.screen.width, doc_height = window.screen.height;
if (ns4up||ns6up) {
        doc_width = window.screen.width-300;
        doc_height = window.screen.height-150;
} else if (ie4up) {
        doc_width = window.screen.width-300;
        doc_height = window.screen.width-150;
}
dx = new Array();
xp = new Array();
yp = new Array();
am = new Array();
stx = new Array();
sty = new Array();
j = 0;
for (i = 0; i < no; ++ i) {
        dx[i] = 0;                        // set coordinate variables
        xp[i] = Math.random()*(doc_width-150);  // set position variables
        yp[i] = Math.random()*doc_height-150;
        am[i] = Math.random()*20;         // set amplitude variables
        stx[i] = 0.02 + Math.random()/10; // set step variables
        sty[i] = 0.7 + Math.random();     // set step variables
        if (ns4up) {                      // set layers
                if (i == 0) {
                        document.write("<layer name=\"dot"+ i +"\" left=\"15\" top=\"15\" visibility=\"show\"><img src=\""+ snow[j] + "\" border=\"0\"></layer>");
                } else {
                        document.write("<layer name=\"dot"+ i +"\" left=\"15\" top=\"15\" visibility=\"show\"><img src=\""+ snow[j] + "\" border=\"0\"></layer>");
                }        } else if (ie4up||ns6up) {                if (i == 0) 
{
                        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"VISIBILITY: visible; TOP: 15px; LEFT: 15px; width:1;\"><img src=\"" + snow[j] + "\" border=\"0\"></div>");
                } else {
                        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"VISIBILITY: visible; TOP: 15px; LEFT: 15px; width:1;\"><img src=\"" + snow[j] + "\" border=\"0\"></div>");
                }
        }
        if (j == (snow.length-1)) { j = 0; } else { j += 1; }
}
function snowNS() {  // Netscape main animation function
        for (i = 0; i < no; ++ i) {  // iterate for every dot
                yp[i] -= sty[i];                if (yp[i] < -50) {
                        xp[i] = Math.random()*(doc_width-am[i]-30);
                        yp[i] = doc_height;
                        stx[i] = 0.02 + Math.random()/10;
                        sty[i] = 0.7 + Math.random();
                        doc_width = self.innerWidth;
                        doc_height = self.innerHeight;                }
                dx[i] += stx[i];
                document.layers["dot"+i].top = yp[i]+pageYOffset;
                document.layers["dot"+i].left = xp[i] + 
am[i]*Math.sin(dx[i]);
        }
        setTimeout("snowNS()", speed);
}
function snowIE_NS6() {  // IE main animation function
        for (i = 0; i < no; ++ i) {  // iterate for every dot
                yp[i] -= sty[i];
                if (yp[i] < -50) {
                        xp[i] = Math.random()*(doc_width-am[i]-30);
                        yp[i] = doc_height;
                        stx[i] = 0.02 + Math.random()/10;
                        sty[i] = 0.7 + Math.random();
                        doc_width = ns6up?window.innerWidth-55:document.body.clientWidth;
                        doc_height = ns6up?window.innerHeight-55:document.body.clientHeight;
                }
                dx[i] += stx[i];
                if (ie4up){
                document.all["dot"+i].style.pixelTop = yp[i]+document.body.scrollTop;
                document.all["dot"+i].style.pixelLeft = xp[i] + am[i]*Math.sin(dx[i]);
                }
                else if (ns6up){
                document.getElementById("dot"+i).style.top=yp[i]+pageYOffset;
                document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i]);
                }
        }
        setTimeout("snowIE_NS6()", speed);
}
if (ns4up) {
        snowNS();
} else if (ie4up||ns6up) {
        snowIE_NS6();
}
// End -->
</SCRIPT>

</head>
<body>
<div style="width:100%; height: 100%; position: fixed; z-index: -1000;">
<video id="if_you_want_shut_me_up_ok" width="100%" autoplay loop preload="metadata"  style="position: fixed; z-index:-1000;">
<source src="urf_bg.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>
</div>

<div class="mainbk">
<div class="disbalancer"><a id="make_some_work" onclick="aaaaaa();"><div class="STOP_OMG"><img id="change_me_if_u_need" src="images/DISBALANSED_FOLDER/mute.png"></div> <div class="second_omg"><font size="25">STOP</font><br> DAT MUSIC,<br><font size="20">PLZ!!!</font></div><div class="clear_shi_"></div></a></div>
<div class="swag_rito"><a href="http://leagueoflegends.com" class="rito_href" target="_blanc"></a>&copy; 2015 URF STATS</div>
<div class="inmainbk">
<div class="somethinglikemenu"><ul class="THIS_IS_MEEEENU"><li><a href="index.php">Europe West</a></li><li><a href="">North America</a></li><li><a href="a_boat.html">Something more freaky</a></li></ul><div class="clear_shi_"> </div></div>
<div class="supermegamainimage">
<div class="yaaay_triangle_right"></div><div class="yaaay_triangle_left"></div><div class="loginius"><img src="images/interesting_pictures/logonius.png"></div>
</div>
<div class="ultra_data_block">

<div class="ouuuuuultra_name_3000">The most often picked champions</div>
<div>
<table class="midornottobemid cmps">
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=95"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=96"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=97"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=98"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=99"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=100"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=101"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=102"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=103"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=104"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">The most often banned champions</div>
<div>
<table class="midornottobemid cmps">
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=11"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=12"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=13"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=14"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=15"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=16"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=17"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=18"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=19"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/<?PHP  echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=20"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img width="128px" src="http://ddragon.leagueoflegends.com/cdn/5.6.2/img/champion/MonkeyKing.png"></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">The most often bought items</div>
<div>
<table class="midornottobemid cmps">
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=1"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=105"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=2"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=106"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=3"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=107"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.6.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=4"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=108"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=5"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=109"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=6"); $result = mysqli_fetch_array($query); echo $result[0];
$query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=110"); $result = mysqli_fetch_array($query);?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/item/<?PHP  echo $result[0]; ?>.png"></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">The most often chosen spells</div>
<div>
<table class="midornottobemid cmps">
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=7"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/spell/Summoner<?PHP echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=8"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/spell/Summoner<?PHP echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=9"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/spell/SummonerDot.png"></td>
</tr>
<tr>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=10"); $result = mysqli_fetch_array($query); echo $result[0];?></td>
<td><img src="http://ddragon.leagueoflegends.com/cdn/5.2.2/img/spell/Summoner<?PHP echo str_replace(" ","",$result[0]); ?>.png"></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">Team achievements</div>
<div>
<table class="midornottobemid">
<tr>
<td>Total baron kills</td>
<td><img src="images/STATS_INFORNATIONIC/oother/Baron_NashorSquare.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=28"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total dragon kills</td>
<td><img src="images/STATS_INFORNATIONIC/oother/DragonSquare.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=30"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total turret kills</td>
<td><img src="images/STATS_INFORNATIONIC/oother/GolemSquare.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=29"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">About life and death</div>
<div>
<table class="midornottobemid">
<tr>
<td>Total amount of kills</td>
<td><img src="images/STATS_INFORNATIONIC/oother/kills.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=67"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of kills</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=68"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of kills</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=69"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of kills</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=70"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total amount of deaths</td>
<td><img src="images/STATS_INFORNATIONIC/oother/skull.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=71"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of deaths</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=72"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of deaths</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=73"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of deaths</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=74"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total amount of assists</td>
<td><img src="images/STATS_INFORNATIONIC/oother/assists.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=75"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of assists</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=76"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of assists</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=77"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of assists</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=78"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">Yarrr, we need more gold!</div>
<div>
<table class="midornottobemid">
<tr>
<td>Total amount of earned gold</td>
<td><img src="images/STATS_INFORNATIONIC/oother/gold_earned.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=79"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of earned gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=80"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of earned gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=81"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of earned gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=82"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total amount of spent gold</td>
<td><img src="images/STATS_INFORNATIONIC/oother/gold_spent.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=83"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of spent gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=84"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of spent gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=85"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of spent gold</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=86"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">marauding</div>
<div>
<table class="midornottobemid">
<tr>
<td>Total amount of killed<br> minions</td>
<td><img src="images/STATS_INFORNATIONIC/oother/minion.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=87"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of killed minions</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=88"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of killed minions</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=89"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of killed minions</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=90"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total amount of neutral minions killed</td>
<td><img src="images/STATS_INFORNATIONIC/oother/neytral_minion.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=91"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Max amount of neutral minions killed</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=92"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Min amount of neutral minions killed</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=93"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average amount of neutral minions killed</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=94"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">similarity of time and games</div>
<div>
<table class="midornottobemid">
<tr>
<td>Total duration of games</td>
<td><img src="images/STATS_INFORNATIONIC/oother/clock_total.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=31"); $result = mysqli_fetch_array($query); echo number_format($result[0], 2, ',', ' ').' seconds <br> '.number_format($result[0]/60, 2, ',', ' ') .' minutes <br> '.number_format($result[0]/3600, 2, ',', ' ') .' hours<br> '.number_format($result[0]/(3600*24), 2, ',', ' ') .' days <br>'.number_format($result[0]/(3600*24*7), 2, ',', ' ').' weeks<br>'.number_format($result[0]/(3600*24*7*4), 2, ',', ' ').' months<br>'.number_format($result[0]/(3600*24*7*4*12), 2, ',', ' ').' years.';?></td>
</tr>
<tr>
<td>The longest game duration</td>
<td><img src="images/STATS_INFORNATIONIC/oother/clock_longest.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=32"); $result = mysqli_fetch_array($query); echo number_format($result[0], 2, ',', ' ').' seconds <br> '.number_format($result[0]/60, 2, ',', ' ') .' minutes <br> '.number_format($result[0]/3600, 2, ',', ' ') .' hours.';?></td>
</tr>
<tr>
<td>The fastest game duration</td>
<td><img src="images/STATS_INFORNATIONIC/oother/clock_fastest.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=33"); $result = mysqli_fetch_array($query); echo number_format($result[0], 2, ',', ' ').' seconds <br> '.number_format($result[0]/60, 2, ',', ' ') .' minutes <br> '.number_format($result[0]/3600, 2, ',', ' ') .' hours.';?></td>
</tr>
<tr>
<td>Average duration of games</td>
<td><img src="images/STATS_INFORNATIONIC/oother/clock_average.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=34"); $result = mysqli_fetch_array($query); echo number_format($result[0], 2, ',', ' ').' seconds <br> '.number_format($result[0]/60, 2, ',', ' ') .' minutes <br> '.number_format($result[0]/3600, 2, ',', ' ') .' hours.';?></td>
</tr>
</table>
</div>

<div class="ouuuuuultra_name_3000">a bit about damage</div>
<div>
<div class="under_ahahaha">TAKEN DAMAGE</div>
<table class="midornottobemid">
<tr>
<td>Total damage taken</td>
<td><img src="images/STATS_INFORNATIONIC/oother/Quintessences_armor.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=35"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game total damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=36"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game total damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=37"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game total damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=38"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total physical damage taken</td>
<td><img src="images/STATS_INFORNATIONIC/oother/phys_taken.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=39"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game physical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=40"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game physical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=41"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game physical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=42"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total magical damage taken</td>
<td><img src="images/STATS_INFORNATIONIC/oother/mag_taken.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=43"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game magical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=44"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game magical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=45"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game magical damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=46"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total true damage taken</td>
<td><img src="images/STATS_INFORNATIONIC/oother/true_taken.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=47"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game true damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=48"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game true damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=49"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game true damage taken by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=50"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
<div class="under_ahahaha">DAMAGE DEALT</div>
<table class="midornottobemid">
<tr>
<td>Total damage dealt</td>
<td><img src="images/STATS_INFORNATIONIC/oother/dmg_dealt.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=51"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game total damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=52"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game total damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=53"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game total damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=54"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total physical damage dealt</td>
<td><img src="images/STATS_INFORNATIONIC/oother/pdmg_dealt.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=55"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game physical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=56"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game physical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=57"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game physical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=58"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total magical damage dealt</td>
<td><img src="images/STATS_INFORNATIONIC/oother/mdmg_dealt.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=59"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game magical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=60"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game magical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=61"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game magical damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=62"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td>Total true damage dealt</td>
<td><img src="images/STATS_INFORNATIONIC/oother/tdmg_dealt.png"></td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=63"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Maximal per game true damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=64"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Minimal per game true damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=65"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
<tr>
<td colspan="2">Average per game true damage dealt by summoner</td>
<td><?PHP  $query = mysqli_query($db_euw, "SELECT value FROM total WHERE id_total=66"); $result = mysqli_fetch_array($query); echo number_format($result[0], 0, ',', ' ');?></td>
</tr>
</table>
</div>

</div>
</div>
</div>
<div class="foo_ter">
</div>
<script>
function aaaaaa() {
vimeo=document.getElementById('if_you_want_shut_me_up_ok');
butter=document.getElementsByClassName('second_omg')[0];
ooooh=document.getElementById('change_me_if_u_need');
if (vimeo.paused) {
          vimeo.play();
          butter.innerHTML="<font size='25'>STOP</font><br> DAT MUSIC,<br><font size='20'>PLZ!!!</font>";
		  ooooh.src='images/DISBALANSED_FOLDER/mute.png';
       } else {
          vimeo.pause();
          butter.innerHTML="<font size='25'>I</font><br> wanna music<br><font size='20'>BACK!</font>";
		  ooooh.src='images/DISBALANSED_FOLDER/play.png';
       }
}
</script>
</body>
</html>