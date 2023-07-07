<?php
$text=$Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT;
$text_array=str_split($text);
$str_sum=0;
$anim_sum=0.75;
?>
<style>
<?php if(!empty($Rich_Web_Slider_Effect_Loader)){ ?>
.center_content<?php echo $Rich_Web_Slider;?>
{
position:relative;
overflow:visible;
top:50%;
transform:translateY(-50%);
-webkit-transform:translateY(-50%);
-ms-transform:translateY(-50%);
-moz-transform:translateY(-50%);
-o-transform:translateY(-50%);
}
#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>
{
margin:0px auto !important;
background-color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_BgC;?> !important;
z-index:999;
width:<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_W;?>px;
height:0px;
box-sizing: inherit !important;
-moz-box-sizing: inherit !important;
-webkit-box-sizing: inherit !important;
overflow:hidden !important;
max-width:100% !important;
}
<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "small") { ?>
.RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?> { width:45px !important; height:45px !important; }
.loader_Navigation1<?php echo $Rich_Web_Slider;?>
{
border-top: 3px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
border-bottom: 3px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
}
.loader_Navigation2<?php echo $Rich_Web_Slider;?>
{
border-top: 3px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
border-bottom: 3px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
}
.loader_Navigation3<?php echo $Rich_Web_Slider;?>
{
border-top:12px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-bottom:12px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-right:12px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
width:50% !important;
height:50%!important;
}
<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "middle") { ?>
.RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?> { width:60px !important; height:60px !important; }
.loader_Navigation1<?php echo $Rich_Web_Slider;?>
{
border-top: 4px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
border-bottom: 4px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
}
.loader_Navigation2<?php echo $Rich_Web_Slider;?>
{
border-top: 4px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
border-bottom: 4px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
}
.loader_Navigation3<?php echo $Rich_Web_Slider;?>
{
border-top:17px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-bottom:17px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-right:17px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
width:55% !important;
height:55%!important;
}
<?php } else { ?>
.RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?> { width:80px !important; height:80px !important; }
.loader_Navigation1<?php echo $Rich_Web_Slider;?>
{
border-top: 5px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
border-bottom: 5px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T1_C;?> !important;
}
.loader_Navigation2<?php echo $Rich_Web_Slider;?>
{
border-top: 5px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
border-bottom: 5px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T2_C;?> !important;
}
.loader_Navigation3<?php echo $Rich_Web_Slider;?>
{
border-top:25px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-bottom:25px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
border-right:25px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T3_C;?> !important;
width:60% !important;
height:60%!important;
}
<?php } ?>
.RW_Loader_Frame_Navigation
{
position:relative;
left:50%;
width:80px;
height:80px;
transform:translateX(-50%);
-webkit-transform:translateX(-50%);
-ms-transform:translateX(-50%);
-moz-transform:translateX(-50%);
-o-transform:translateX(-50%);
}
.RW_Loader_Text_Navigation<?php echo $Rich_Web_Slider;?>
{
position:relative;
text-align:center;
margin-top:10px;
font-size: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS;?>px !important;
font-family:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FF;?> !important;
color: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important;
}
.loader_Navigation1,.loader_Navigation2,.loader_Navigation3,.loader_Navigation4 { position:absolute; border:5px solid
transparent; border-radius:50%; }
.loader_Navigation1<?php echo $Rich_Web_Slider;?>
{
box-sizing:border-box;
-webkit-box-sizing:border-box;
-ms-box-sizing:border-box;
-moz-box-sizing:border-box;
-o-box-sizing:border-box;
}
.loader_Navigation2<?php echo $Rich_Web_Slider;?>
{
-webkit-box-sizing:border-box;
-ms-box-sizing:border-box;
-moz-box-sizing:border-box;
-o-box-sizing:border-box;
box-sizing:border-box;
top:50%;
left:50%;
transform:translateY(-50%) translateX(-50%);
-webkit-transform:translateY(-50%) translateX(-50%);
-ms-transform:translateY(-50%) translateX(-50%);
-moz-transform:translateY(-50%) translateX(-50%);
-o-transform:translateY(-50%) translateX(-50%);
}
.loader_Navigation3<?php echo $Rich_Web_Slider;?>
{
width:60%;
height:60%;
top:50%;
left:50%;
box-sizing:border-box;
-webkit-box-sizing:border-box;
-ms-box-sizing:border-box;
-moz-box-sizing:border-box;
-o-box-sizing:border-box;
transform:translateY(-50%) translateX(-50%);
-webkit-transform:translateY(-50%) translateX(-50%);
-ms-transform:translateY(-50%) translateX(-50%);
-moz-transform:translateY(-50%) translateX(-50%);
-o-transform:translateY(-50%) translateX(-50%);
animation:clockLoadingmin 1s linear 500;
-webkit-animation:clockLoadingmin 1s linear 500;
-ms-animation:clockLoadingmin 1s linear 500;
-moz-animation:clockLoadingmin 1s linear 500;
-o-animation:clockLoadingmin 1s linear 500;
}
.loader_Navigation1
{
width:100%;
height:100%;
animation:clockLoading 1s linear 500;
-webkit-animation:clockLoading 1s linear 500;
-ms-animation:clockLoading 1s linear 500;
-moz-animation:clockLoading 1s linear 500;
-o-animation:clockLoading 1s linear 500;
}
.loader_Navigation2
{
width:80%;
height:80%;
animation:anticlockLoading 1s linear 500;
-webkit-animation:anticlockLoading 1s linear 500;
-ms-animation:anticlockLoading 1s linear 500;
-moz-animation:anticlockLoading 1s linear 500;
-o-animation:anticlockLoading 1s linear 500;
}
@keyframes clockLoading { from { transform:rotate(0deg); } to { transform:rotate(360deg); } }
@keyframes anticlockLoading { from { transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
@keyframes clockLoadingmin { from { transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
@-moz-keyframes clockLoading { from { -moz-transform:rotate(0deg); } to { -moz-transform:rotate(360deg); } }
@-moz-keyframes anticlockLoading { from { -moz-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
-moz-transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
@-moz-keyframes clockLoadingmin { from { -moz-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
-moz-transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
@-webkit-keyframes clockLoading { from { -webkit-transform:rotate(0deg); } to { -webkit-transform:rotate(360deg); } }
@-webkit-keyframes anticlockLoading { from { -webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
-webkit-transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
@-webkit-keyframes clockLoadingmin { from { -webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to {
-webkit-transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
/*Second Loader*/
.overlay-loader<?php echo $Rich_Web_Slider;?> { display: block; margin: auto; width: 97px; height: 60px; position:
relative; top: 0; left: 0; right: 0; bottom: 0; }
<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "small") { ?>
.overlay-loader<?php echo $Rich_Web_Slider;?> { height: 40px !important; }
.loader<?php echo $Rich_Web_Slider;?> { width: 49px !important; height: 49px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "middle") { ?>
.overlay-loader<?php echo $Rich_Web_Slider;?> { height: 50px !important; }
.loader<?php echo $Rich_Web_Slider;?> { width: 67px !important; height: 67px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
<?php } else { ?>
.loader<?php echo $Rich_Web_Slider;?> { width: 97px !important; height: 97px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
<?php } ?>
.loader<?php echo $Rich_Web_Slider;?>
{
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
width: 97px;
height: 97px;
animation-name: rotateAnim;
-o-animation-name: rotateAnim;
-ms-animation-name: rotateAnim;
-webkit-animation-name: rotateAnim;
-moz-animation-name: rotateAnim;
animation-duration: 0.4s;
-o-animation-duration: 0.4s;
-ms-animation-duration: 0.4s;
-webkit-animation-duration: 0.4s;
-moz-animation-duration: 0.4s;
animation-iteration-count: infinite;
-o-animation-iteration-count: infinite;
-ms-animation-iteration-count: infinite;
-webkit-animation-iteration-count: infinite;
-moz-animation-iteration-count: infinite;
animation-timing-function: linear;
-o-animation-timing-function: linear;
-ms-animation-timing-function: linear;
-webkit-animation-timing-function: linear;
-moz-animation-timing-function: linear;
}
.loader<?php echo $Rich_Web_Slider;?> div
{
width: 8px;
height: 8px;
border-radius: 50%;
border: 1px solid <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_C;?>;
position: absolute;
top: 2px;
left: 0;
right: 0;
bottom: 0;
margin: auto;
}
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(odd) { border-top: none; border-left: none; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(even) { border-bottom: none; border-right: none; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height:
12px; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height:
18px; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height:
23px; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height:
31px; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height:
39px; }
.loader<?php echo $Rich_Web_Slider;?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height:
49px; }
@keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
@-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
@-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
@-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
@-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
/*Third Loader*/
<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "small") { ?>
.windows8<?php echo $Rich_Web_Slider;?> { width: 45px !important; height:45px !important; }
.windows8<?php echo $Rich_Web_Slider;?> .wBall { width: 42px !important; height: 42px !important; }
<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "middle") { ?>
.windows8<?php echo $Rich_Web_Slider;?> { width: 60px !important; height:60px !important; }
.windows8<?php echo $Rich_Web_Slider;?> .wBall { width: 56px !important; height: 56px !important; }
<?php } else { ?>
.windows8<?php echo $Rich_Web_Slider;?> { width: 78px !important; height:78px !important; }
.windows8<?php echo $Rich_Web_Slider;?> .wBall { width: 74px !important; height: 74px !important; }
<?php } ?>
.windows8<?php echo $Rich_Web_Slider;?> { position: relative; width: 78px; height:78px; margin:auto; }
.windows8<?php echo $Rich_Web_Slider;?> .wBall
{
position: absolute;
width: 74px;
height: 74px;
opacity: 0;
transform: rotate(225deg);
-o-transform: rotate(225deg);
-ms-transform: rotate(225deg);
-webkit-transform: rotate(225deg);
-moz-transform: rotate(225deg);
animation: orbit 6.96s infinite;
-o-animation: orbit 6.96s infinite;
-ms-animation: orbit 6.96s infinite;
-webkit-animation: orbit 6.96s infinite;
-moz-animation: orbit 6.96s infinite;
}
.windows8<?php echo $Rich_Web_Slider;?> .wBall .wInnerBall
{
position: absolute;
width: 10px;
height: 10px;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_C;?>;
left:0px;
top:0px;
border-radius: 10px;
}
.windows8<?php echo $Rich_Web_Slider;?> #wBall_1
{
animation-delay: 1.52s;
-o-animation-delay: 1.52s;
-ms-animation-delay: 1.52s;
-webkit-animation-delay: 1.52s;
-moz-animation-delay: 1.52s;
}
.windows8<?php echo $Rich_Web_Slider;?> #wBall_2
{
animation-delay: 0.3s;
-o-animation-delay: 0.3s;
-ms-animation-delay: 0.3s;
-webkit-animation-delay: 0.3s;
-moz-animation-delay: 0.3s;
}
.windows8<?php echo $Rich_Web_Slider;?> #wBall_3
{
animation-delay: 0.61s;
-o-animation-delay: 0.61s;
-ms-animation-delay: 0.61s;
-webkit-animation-delay: 0.61s;
-moz-animation-delay: 0.61s;
}
.windows8<?php echo $Rich_Web_Slider;?> #wBall_4
{
animation-delay: 0.91s;
-o-animation-delay: 0.91s;
-ms-animation-delay: 0.91s;
-webkit-animation-delay: 0.91s;
-moz-animation-delay: 0.91s;
}
.windows8<?php echo $Rich_Web_Slider;?> #wBall_5
{
animation-delay: 1.22s;
-o-animation-delay: 1.22s;
-ms-animation-delay: 1.22s;
-webkit-animation-delay: 1.22s;
-moz-animation-delay: 1.22s;
}
@keyframes orbit
{
0% { opacity: 1; z-index:99; transform: rotate(180deg); animation-timing-function: ease-out; }
7% { opacity: 1; transform: rotate(300deg); animation-timing-function: linear; origin:0%; }
30% { opacity: 1; transform: rotate(410deg); animation-timing-function: ease-in-out; origin:7%; }
39% { opacity: 1; transform: rotate(645deg); animation-timing-function: linear; origin:30%; }
70% { opacity: 1; transform: rotate(770deg); animation-timing-function: ease-out; origin:39%; }
75% { opacity: 1; transform: rotate(900deg); animation-timing-function: ease-out; origin:70%; }
76% { opacity: 0; transform: rotate(900deg); }
100% { opacity: 0; transform: rotate(900deg); }
}
@-o-keyframes orbit
{
0% { opacity: 1; z-index:99; -o-transform: rotate(180deg); -o-animation-timing-function: ease-out; }
7% { opacity: 1; -o-transform: rotate(300deg); -o-animation-timing-function: linear; -o-origin:0%; }
30% { opacity: 1; -o-transform: rotate(410deg); -o-animation-timing-function: ease-in-out; -o-origin:7%; }
39% { opacity: 1; -o-transform: rotate(645deg); -o-animation-timing-function: linear; -o-origin:30%; }
70% { opacity: 1; -o-transform: rotate(770deg); -o-animation-timing-function: ease-out; -o-origin:39%; }
75% { opacity: 1; -o-transform: rotate(900deg); -o-animation-timing-function: ease-out; -o-origin:70%; }
76% { opacity: 0; -o-transform: rotate(900deg); }
100% { opacity: 0; -o-transform: rotate(900deg); }
}
@-ms-keyframes orbit
{
0% { opacity: 1; z-index:99; -ms-transform: rotate(180deg); -ms-animation-timing-function: ease-out; }
7% { opacity: 1; -ms-transform: rotate(300deg); -ms-animation-timing-function: linear; -ms-origin:0%; }
30% { opacity: 1; -ms-transform: rotate(410deg); -ms-animation-timing-function: ease-in-out; -ms-origin:7%; }
39% { opacity: 1; -ms-transform: rotate(645deg); -ms-animation-timing-function: linear; -ms-origin:30%; }
70% { opacity: 1; -ms-transform: rotate(770deg); -ms-animation-timing-function: ease-out; -ms-origin:39%; }
75% { opacity: 1; -ms-transform: rotate(900deg); -ms-animation-timing-function: ease-out; -ms-origin:70%; }
76% { opacity: 0; -ms-transform: rotate(900deg); }
100% { opacity: 0; -ms-transform: rotate(900deg); }
}
@-webkit-keyframes orbit
{
0% { opacity: 1; z-index:99; -webkit-transform: rotate(180deg); -webkit-animation-timing-function: ease-out; }
7% { opacity: 1; -webkit-transform: rotate(300deg); -webkit-animation-timing-function: linear; -webkit-origin:0%; }
30% { opacity: 1; -webkit-transform: rotate(410deg); -webkit-animation-timing-function: ease-in-out; -webkit-origin:7%;
}
39% { opacity: 1; -webkit-transform: rotate(645deg); -webkit-animation-timing-function: linear; -webkit-origin:30%; }
70% { opacity: 1; -webkit-transform: rotate(770deg); -webkit-animation-timing-function: ease-out; -webkit-origin:39%; }
75% { opacity: 1; -webkit-transform: rotate(900deg); -webkit-animation-timing-function: ease-out; -webkit-origin:70%; }
76% { opacity: 0; -webkit-transform: rotate(900deg); }
100% { opacity: 0; -webkit-transform: rotate(900deg); }
}
@-moz-keyframes orbit
{
0% { opacity: 1; z-index:99; -moz-transform: rotate(180deg); -moz-animation-timing-function: ease-out; }
7% { opacity: 1; -moz-transform: rotate(300deg); -moz-animation-timing-function: linear; -moz-origin:0%; }
30% { opacity: 1; -moz-transform: rotate(410deg); -moz-animation-timing-function: ease-in-out; -moz-origin:7%; }
39% { opacity: 1; -moz-transform: rotate(645deg); -moz-animation-timing-function: linear; -moz-origin:30%; }
70% { opacity: 1; -moz-transform: rotate(770deg); -moz-animation-timing-function: ease-out; -moz-origin:39%; }
75% { opacity: 1; -moz-transform: rotate(900deg); -moz-animation-timing-function: ease-out; -moz-origin:70%; }
76% { opacity: 0; -moz-transform:rotate(900deg); }
100% { opacity: 0; -moz-transform: rotate(900deg); }
}
/*Fourth loader*/
<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "small") { ?>
.cssload-thecube<?php echo $Rich_Web_Slider;?> { width: 30px !important; height: 30px !important; }
<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_S == "middle") { ?>
.cssload-thecube<?php echo $Rich_Web_Slider;?> { width: 40px !important; height: 40px !important; }
<?php } else { ?>
.cssload-thecube<?php echo $Rich_Web_Slider;?> { width: 50px !important; height: 50px !important; }
<?php } ?>
.cssload-thecube<?php echo $Rich_Web_Slider;?>
{
width: 50px;
height: 50px;
margin: 20px auto;
position: relative;
transform: rotateZ(45deg);
-o-transform: rotateZ(45deg);
-ms-transform: rotateZ(45deg);
-webkit-transform: rotateZ(45deg);
-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube
{
position: relative;
transform: rotateZ(45deg);
-o-transform: rotateZ(45deg);
-ms-transform: rotateZ(45deg);
-webkit-transform: rotateZ(45deg);
-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube
{
float: left;
width: 50%;
height: 50%;
position: relative;
transform: scale(1.1);
-o-transform: scale(1.1);
-ms-transform: scale(1.1);
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube:before
{
content: "";
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_C;?>;
animation: cssload-fold-thecube 2.76s infinite linear both;
-o-animation: cssload-fold-thecube 2.76s infinite linear both;
-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
transform-origin: 100% 100%;
-o-transform-origin: 100% 100%;
-ms-transform-origin: 100% 100%;
-webkit-transform-origin: 100% 100%;
-moz-transform-origin: 100% 100%;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c2
{
transform: scale(1.1) rotateZ(90deg);
-o-transform: scale(1.1) rotateZ(90deg);
-ms-transform: scale(1.1) rotateZ(90deg);
-webkit-transform: scale(1.1) rotateZ(90deg);
-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c3
{
transform: scale(1.1) rotateZ(180deg);
-o-transform: scale(1.1) rotateZ(180deg);
-ms-transform: scale(1.1) rotateZ(180deg);
-webkit-transform: scale(1.1) rotateZ(180deg);
-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c4
{
transform: scale(1.1) rotateZ(270deg);
-o-transform: scale(1.1) rotateZ(270deg);
-ms-transform: scale(1.1) rotateZ(270deg);
-webkit-transform: scale(1.1) rotateZ(270deg);
-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c2:before
{
animation-delay: 0.35s;
-o-animation-delay: 0.35s;
-ms-animation-delay: 0.35s;
-webkit-animation-delay: 0.35s;
-moz-animation-delay: 0.35s;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c3:before
{
animation-delay: 0.69s;
-o-animation-delay: 0.69s;
-ms-animation-delay: 0.69s;
-webkit-animation-delay: 0.69s;
-moz-animation-delay: 0.69s;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c4:before
{
animation-delay: 1.04s;
-o-animation-delay: 1.04s;
-ms-animation-delay: 1.04s;
-webkit-animation-delay: 1.04s;
-moz-animation-delay: 1.04s;
}
@keyframes cssload-fold-thecube
{
0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-o-keyframes cssload-fold-thecube
{
0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-ms-keyframes cssload-fold-thecube
{
0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-webkit-keyframes cssload-fold-thecube
{
0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-moz-keyframes cssload-fold-thecube
{
0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
/*First Text*/
.cssload-loader<?php echo $Rich_Web_Slider;?>
{
width: 244px;
height: 49px;
line-height: 49px;
text-align: center;
position: relative;
left: 50%;
transform: translate(-50%, 0%);
-o-transform: translate(-50%, 0%);
-ms-transform: translate(-50%, 0%);
-webkit-transform: translate(-50%, 0%);
-moz-transform: translate(-50%, 0%);
font-family: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FF;?> !important;
text-transform: none !important;
font-weight: 900;
font-size:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS;?>px !important;
color: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important;
letter-spacing: 0.2em;
margin-top:10px;
}
.cssload-loader<?php echo $Rich_Web_Slider;?>::before, .cssload-loader<?php echo $Rich_Web_Slider;?>::after
{
content: "";
display: block;
width: 15px;
height: 15px;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_BC;?> !important;
position: absolute;
animation: cssload-load 0.81s infinite alternate ease-in-out;
-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
}
.cssload-loader<?php echo $Rich_Web_Slider;?>::before { top: 0; }
.cssload-loader<?php echo $Rich_Web_Slider;?>::after { bottom: 0; }
@keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:
229px; height: 29px; width: 15px; } }
@-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:
229px; height: 29px; width: 15px; } }
@-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:
229px; height: 29px; width: 15px; } }
@-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% {
left: 229px; height: 29px; width: 15px; } }
@-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:
229px; height: 29px; width: 15px; } }
/*Second*/
#inTurnFadingTextG<?php echo $Rich_Web_Slider;?> { width:100%; margin:auto; text-align:center; }
.inTurnFadingTextG<?php echo $Rich_Web_Slider;?>
{
font-size: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS;?>px !important;
font-family:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FF;?> !important;
color: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important;
text-decoration:none;
font-weight:normal;
font-style:normal;
display:inline-block;
animation-name:bounce_inTurnFadingTextG;
-o-animation-name:bounce_inTurnFadingTextG;
-ms-animation-name:bounce_inTurnFadingTextG;
-webkit-animation-name:bounce_inTurnFadingTextG;
-moz-animation-name:bounce_inTurnFadingTextG;
animation-duration:2.09s;
-o-animation-duration:2.09s;
-ms-animation-duration:2.09s;
-webkit-animation-duration:2.09s;
-moz-animation-duration:2.09s;
animation-iteration-count:infinite;
-o-animation-iteration-count:infinite;
-ms-animation-iteration-count:infinite;
-webkit-animation-iteration-count:infinite;
-moz-animation-iteration-count:infinite;
animation-direction:normal;
-o-animation-direction:normal;
-ms-animation-direction:normal;
-webkit-animation-direction:normal;
-moz-animation-direction:normal;
}
<?php foreach($text_array as $key=>$v) { ?>
#inTurnFadingTextG<?php echo $Rich_Web_Slider;?>_<?php Print $key+1;?>
{
animation-delay:<?php Print $anim_sum;?>s !important;
-o-animation-delay:<?php Print $anim_sum;?>s !important;
-ms-animation-delay:<?php Print $anim_sum;?>s !important;
-webkit-animation-delay:<?php Print $anim_sum;?>s !important;
-moz-animation-delay:<?php Print $anim_sum;?>s !important;
}
<?php $anim_sum=$anim_sum+0.15;?>
<?php } ?>
@keyframes bounce_inTurnFadingTextG
{
0% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_AnC;?>; }
100% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important; }
}
@-o-keyframes bounce_inTurnFadingTextG
{
0% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_AnC;?>; }
100% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important; }
}
@-ms-keyframes bounce_inTurnFadingTextG
{
0% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_AnC;?>; }
100% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important; }
}
@-webkit-keyframes bounce_inTurnFadingTextG
{
0% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_AnC;?>; }
100% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important; }
}
@-moz-keyframes bounce_inTurnFadingTextG
{
0% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T2_AnC;?>; }
100% { color:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important; }
}
/*Third text*/
.cssload-preloader<?php echo $Rich_Web_Slider;?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px;
z-index: 10; }
.cssload-preloader<?php echo $Rich_Web_Slider;?> > .cssload-preloader<?php echo $Rich_Web_Slider;?>-box
{
position: relative;
display:inline-block;
margin-left:10px;
margin-top:20px;
height: 29px;
left:50%;
transform:translateX(-50%) !important;
-webkit-transform:translateX(-50%) !important;
-ms-transform:translateX(-50%) !important;
-moz-transform:translateX(-50%) !important;
-o-transform:translateX(-50%) !important;
perspective: 195px;
-o-perspective: 195px;
-ms-perspective: 195px;
-webkit-perspective: 195px;
-moz-perspective: 195px;
}
.cssload-preloader<?php echo $Rich_Web_Slider;?> .cssload-preloader<?php echo $Rich_Web_Slider;?>-box > div
{
position: relative;
width: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS*2;?>px;
height: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS*2;?>px;
background: rgb(204,204,204);
float: left;
text-align: center;
line-height: 2;
font-size: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS;?>px !important;
font-family:<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FF;?> !important;
color: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_C;?> !important;
}
<?php foreach($text_array as $key=>$v) { ?>
.cssload-preloader<?php echo $Rich_Web_Slider;?> .cssload-preloader<?php echo $Rich_Web_Slider;?>-box >
div:nth-child(<?php Print $key+1;?>) {
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
margin-right: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_FS;?>px !important;
animation: cssload-movement<?php echo $Rich_Web_Slider;?> 690ms ease <?php Print $str_sum;?>ms infinite alternate;
-o-animation: cssload-movement<?php echo $Rich_Web_Slider;?> 690ms ease <?php Print $str_sum;?>ms infinite alternate;
-ms-animation: cssload-movement<?php echo $Rich_Web_Slider;?> 690ms ease <?php Print $str_sum;?>ms infinite alternate;
-webkit-animation: cssload-movement<?php echo $Rich_Web_Slider;?> 690ms ease <?php Print $str_sum;?>ms infinite
alternate;
-moz-animation: cssload-movement<?php echo $Rich_Web_Slider;?> 690ms ease <?php Print $str_sum;?>ms infinite alternate;
}
<?php $str_sum=$str_sum+86.25;?>
<?php } ?>
@keyframes cssload-movement<?php echo $Rich_Web_Slider;?>
{
from { transform: scale(1.0) translateY(0px) rotateX(0deg); box-shadow: 0 0 0 rgba(0,0,0,0); }
to
{
transform: scale(1.5) translateY(-24px) rotateX(45deg);
box-shadow: 0 24px 39px <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?>;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
}
}
@-o-keyframes cssload-movement<?php echo $Rich_Web_Slider;?>
{
from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
to
{
-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);
-o-box-shadow: 0 24px 39px <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?>;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
}
}
@-ms-keyframes cssload-movement<?php echo $Rich_Web_Slider;?>
{
from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
to
{
-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);
-ms-box-shadow: 0 24px 39px <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?>;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
}
}
@-webkit-keyframes cssload-movement<?php echo $Rich_Web_Slider;?>
{
from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
to
{
-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);
-webkit-box-shadow: 0 24px 39px <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?>;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
}
}
@-moz-keyframes cssload-movement<?php echo $Rich_Web_Slider;?>
{
from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
to
{
-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);
-moz-box-shadow: 0 24px 39px <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?>;
background: <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T3_BgC;?> !important;
}
}
<?php } else { ?>
.center_content<?php echo $Rich_Web_Slider;?>
{
position:relative;
overflow:visible;
top:50%;
transform:translateY(-50%);
-webkit-transform:translateY(-50%);
-ms-transform:translateY(-50%);
-moz-transform:translateY(-50%);
-o-transform:translateY(-50%);
}
#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>
{
margin:20px auto !important;
background-color:transparent !important;
z-index:999;
width:500px;
height:400px;
max-width:100% !important;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> { width: 30px !important; height: 30px !important; }
.cssload-thecube<?php echo $Rich_Web_Slider;?>
{
width: 50px;
height: 50px;
margin: 20px auto;
position: relative;
transform: rotateZ(45deg);
-o-transform: rotateZ(45deg);
-ms-transform: rotateZ(45deg);
-webkit-transform: rotateZ(45deg);
-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube
{
position: relative;
transform: rotateZ(45deg);
-o-transform: rotateZ(45deg);
-ms-transform: rotateZ(45deg);
-webkit-transform: rotateZ(45deg);
-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube
{
float: left;
width: 50%;
height: 50%;
position: relative;
transform: scale(1.1);
-o-transform: scale(1.1);
-ms-transform: scale(1.1);
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-cube:before
{
content: "";
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_LBgC;?>;
animation: cssload-fold-thecube 2.76s infinite linear both;
-o-animation: cssload-fold-thecube 2.76s infinite linear both;
-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
transform-origin: 100% 100%;
-o-transform-origin: 100% 100%;
-ms-transform-origin: 100% 100%;
-webkit-transform-origin: 100% 100%;
-moz-transform-origin: 100% 100%;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c2
{
transform: scale(1.1) rotateZ(90deg);
-o-transform: scale(1.1) rotateZ(90deg);
-ms-transform: scale(1.1) rotateZ(90deg);
-webkit-transform: scale(1.1) rotateZ(90deg);
-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c3
{
transform: scale(1.1) rotateZ(180deg);
-o-transform: scale(1.1) rotateZ(180deg);
-ms-transform: scale(1.1) rotateZ(180deg);
-webkit-transform: scale(1.1) rotateZ(180deg);
-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c4
{
transform: scale(1.1) rotateZ(270deg);
-o-transform: scale(1.1) rotateZ(270deg);
-ms-transform: scale(1.1) rotateZ(270deg);
-webkit-transform: scale(1.1) rotateZ(270deg);
-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c2:before
{
animation-delay: 0.35s;
-o-animation-delay: 0.35s;
-ms-animation-delay: 0.35s;
-webkit-animation-delay: 0.35s;
-moz-animation-delay: 0.35s;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c3:before
{
animation-delay: 0.69s;
-o-animation-delay: 0.69s;
-ms-animation-delay: 0.69s;
-webkit-animation-delay: 0.69s;
-moz-animation-delay: 0.69s;
}
.cssload-thecube<?php echo $Rich_Web_Slider;?> .cssload-c4:before
{
animation-delay: 1.04s;
-o-animation-delay: 1.04s;
-ms-animation-delay: 1.04s;
-webkit-animation-delay: 1.04s;
-moz-animation-delay: 1.04s;
}
@keyframes cssload-fold-thecube
{
0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-o-keyframes cssload-fold-thecube
{
0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-ms-keyframes cssload-fold-thecube
{
0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-webkit-keyframes cssload-fold-thecube
{
0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-moz-keyframes cssload-fold-thecube
{
0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}

<?php } ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
border: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BW;?>px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BS;?> <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BC;?>
!important;
width:<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_W;?>px;
height:0px;
max-width:100%;
box-sizing:border-box !important;
-moz-box-sizing:border-box !important;
-webkit-box-sizing:border-box !important;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar
{
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TDABgC;?>;
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TDAPos;?>: 0px;
}

.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content .cn-nav-content-current h2
{
margin-top: 10px;
font-size: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TFS;?>px !important;
font-family: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TFF;?> !important;
color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TCC;?> !important;
opacity:1 !important;
letter-spacing:0px !important;
text-transform:none !important;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content h3
{
font-size: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TFS-5;?>px !important;
font-family: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TFF;?> !important;
color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TC;?> !important;
margin:0px !important;
letter-spacing:0px !important;
text-transform:none !important;
}
.cn-nav_<?php echo $Rich_Web_Slider_Manager[0]->id;?> a.cn-nav-prev span
{
background:
url(<?php echo plugin_dir_url( __DIR__ ).'Images/prev_'. $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArType .'.png';?>)
no-repeat center center;
}


.cn-nav-none_div{
display:none !important;
}
.cn-nav_<?php echo $Rich_Web_Slider_Manager[0]->id;?> a.cn-nav-next:hover,
.cn-nav_<?php echo $Rich_Web_Slider_Manager[0]->id;?> a.cn-nav-next:focus
{
color:currentColor !important;
transition:all 0s !important;
-moz-transition:all 0s !important;
-webkit-transition:all 0s !important;
}
.cn-nav_<?php echo $Rich_Web_Slider_Manager[0]->id;?> a.cn-nav-next span
{
background:
url(<?php echo plugin_dir_url( __DIR__ ).'Images/next_'. $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArType .'.png';?>)
no-repeat center center;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content div span
{
font-size: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArTextFS;?>px;
font-family: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArTextFF;?>;
color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArTextC;?>;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-prev span,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-next span
{
background-color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArBgC;?>;
-moz-border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArBR;?>px;
-webkit-border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArBR;?>px;
border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArBR;?>px;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a:hover span,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a:hover div
{
/*-moz-border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArHBR;?>px;
-webkit-border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArHBR;?>px;
border-radius: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArHBR;?>px;*/
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a:hover span
{
background-color: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArHBC;?>;
}
.cn-bar-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
background:none !important;
top:50% !important;
left:50% !important;
transform:translateY(-50%) translateX(-50%) !important;
-webkit-transform:translateY(-50%) translateX(-50%) !important;
-moz-transform:translateY(-50%) translateX(-50%) !important;
width:100%;
}
.cn-nav-content-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
width:75% !important;
left:50% !important;
transform:translateX(-50%) !important;
-webkit-transform:translateX(-50%) !important;
-moz-transform:translateX(-50%) !important;
}
.cn-nav-content-anim2_<?php echo $Rich_Web_Slider_Manager[0]->id;?> { width:100% !important; }
.cn-bar{
display: none !important;
}
.cn-bar:last-of-type{
display: inline-block !important;
}
@media screen and (max-width:500px)
{
#cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>,#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{ max-height:300px; }
}




/*Video Styles*/

.circleVIcon{
position: absolute;
top: 50%;
left: 50%;
<?php if($Rich_Web_Slider_Videos[0]->Sl_Video_Url == "" || $Rich_Web_Slider_Videos[0]->Sl_Video_Url == null || $Rich_Web_Slider_Videos[0]->Sl_Video_Url == 'undefined') { ?>
display: none;
<?php } else { ?>
display: inline;
<?php } ?>
padding: 10px 25px;
background-color: red;
border-radius: 8px;
cursor: pointer;
color: #ffffff;
font-size: 20px;
z-index: 9999;
-webkit-transform: translateY(-50%) translateX(-50%);
-ms-transform: translateY(-50%) translateX(-50%);
-moz-transform: translateY(-50%) translateX(-50%);
-o-transform: translateY(-50%) translateX(-50%);
transform: translateY(-50%) translateX(-50%);
}

.rw_iframe_circle{
position:absolute;
left: 0;
top:0;
width:100%;
height:100%;
z-index: 9999;
display: none;
border: unset;
}

.rw_icons_circle{
position: absolute;
z-index: 9999;
top:10px;
right:10px;
font-size:20px;
color:#ffffff;
cursor: pointer;
text-shadow: 0px 0px 30px #000000;
display:none;
}


/*Shadow Styles*/

.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
position: relative;
z-index: 0;
overflow: unset;
}
<?php if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 1') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 0 10px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 10px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 10px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 2') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
z-index: -1;
position: absolute;
content: "";
bottom: 15px;
left: 10px;
width: 50%;
top: 80%;
max-width:300px;
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
transform: rotate(-3deg);
-moz-transform: rotate(-3deg);
-webkit-transform: rotate(-3deg);
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
transform: rotate(3deg);
-moz-transform: rotate(3deg);
-webkit-transform: rotate(3deg);
right: 10px;
left: auto;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 3') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before
{
z-index: -1;
position: absolute;
content: "";
bottom: 15px;
left: 10px;
width: 50%;
top: 80%;
max-width:300px;
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
transform: rotate(-3deg);
-moz-transform: rotate(-3deg);
-webkit-transform: rotate(-3deg);
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 4') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
z-index: -1;
position: absolute;
content: "";
bottom: 15px;
right: 10px;
left: auto;
width: 50%;
top: 80%;
max-width:300px;
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 15px 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
transform: rotate(3deg);
-moz-transform: rotate(3deg);
-webkit-transform: rotate(3deg);
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 5') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
z-index: -1;
position: absolute;
content: "";
bottom: 25px;
left: 10px;
width: 50%;
top: 80%;
max-width:300px;
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
box-shadow: 0 35px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 35px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 35px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
transform: rotate(-8deg);
-moz-transform: rotate(-8deg);
-webkit-transform: rotate(-8deg);
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
transform: rotate(8deg);
-moz-transform: rotate(8deg);
-webkit-transform: rotate(8deg);
right: 10px;
left: auto;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 6') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
position:relative;
box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-webkit-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-moz-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
content:"";
position:absolute;
z-index:-1;
box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
top:50%;
bottom:0;
left:10px;
right:10px;
border-radius:100px / 10px;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 7') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
position:relative;
box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-webkit-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-moz-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
content:"";
position:absolute;
z-index:-1;
box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
top:0;
bottom:0;
left:10px;
right:10px;
border-radius:100px / 10px;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
right:10px;
left:auto;
transform:skew(8deg) rotate(3deg);
-moz-transform:skew(8deg) rotate(3deg);
-webkit-transform:skew(8deg) rotate(3deg);
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 8') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
position:relative;
box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-webkit-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
-moz-box-shadow:0 1px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>, 0 0 40px
<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?> inset;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
content:"";
position:absolute;
z-index:-1;
box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow:0 0 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
top:10px;
bottom:10px;
left:0;
right:0;
border-radius:100px / 10px;
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
right:10px;
left:auto;
transform:skew(8deg) rotate(3deg);
-moz-transform:skew(8deg) rotate(3deg);
-webkit-transform:skew(8deg) rotate(3deg);
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 9') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:before,
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
position:absolute;
content:"";
box-shadow:0 10px 25px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow:0 10px 25px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow:0 10px 25px 20px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
background: <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
top:40px;left:20px;bottom:50px;
width:15%;
z-index:-1;
-webkit-transform: rotate(-5deg);
-moz-transform: rotate(-5deg);
transform: rotate(-5deg);
}
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>:after
{
-webkit-transform: rotate(5deg);
-moz-transform: rotate(5deg);
transform: rotate(5deg);
right: 20px;left: auto;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 10') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 0 0 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 0 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 0 10px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 11') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 4px -4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 4px -4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 4px -4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 12') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 5px 5px 3px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 5px 5px 3px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 5px 5px 3px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 13') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 2px 2px white, 4px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 2px 2px white, 4px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 2px 2px white, 4px 4px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 14') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 8px 8px 18px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 8px 8px 18px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 8px 8px 18px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 15') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 0 8px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 8px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 8px 6px -6px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxSType == 'Type 16') { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: 0 0 18px 7px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-moz-box-shadow: 0 0 18px 7px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
-webkit-box-shadow: 0 0 18px 7px <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_BxC;?>;
}
<?php } else { ?>
.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>
{
box-shadow: none !important;
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
}
<?php }?>
</style>