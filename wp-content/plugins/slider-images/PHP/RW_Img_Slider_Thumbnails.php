<?php if(!empty($Rich_Web_Slider_Effect_Loader)){ ?>
<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>"
    style="<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
    <div class="center_content<?php echo $Rich_Web_Slider;?>">
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_L_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_L_T == "Type 1") { ?>
        <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?>">
            <div class="loader_Navigation1 loader_Navigation1<?php echo $Rich_Web_Slider;?>" id="loader_Navigation1">
            </div>
            <div class="loader_Navigation2 loader_Navigation2<?php echo $Rich_Web_Slider;?>" id="loader_Navigation2">
            </div>
            <div class="loader_Navigation3 loader_Navigation3<?php echo $Rich_Web_Slider;?>" id="loader_Navigation3">
            </div>
            <div class="loader_Navigation4" id="loader_Navigation4"></div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_L_T == "Type 2") { ?>
        <div class="overlay-loader<?php echo $Rich_Web_Slider;?>">
            <div class="loader<?php echo $Rich_Web_Slider;?>">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_L_T == "Type 3") { ?>
        <div class="windows8<?php echo $Rich_Web_Slider;?>">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_L_T == "Type 4") { ?>
        <div class="cssload-thecube<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT_T == "Type 1") { ?>
        <div class="cssload-loader<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT;?></div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT_T == "Type 2") { ?>
        <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>">
            <?php foreach($text_array as $key=>$v){ ?>
            <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>_<?php Print $key+1;?>"
                class="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>"><?php Print $v;?></div>
            <?php } ?>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT_T == "Type 3") { ?>
        <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>-box">
                <?php foreach($text_array as $key=>$v){ ?>
                <div><?php Print $v;?></div>
                <?php } ?>
            </div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT_T == "Type 4") { ?>
        <div class="RW_Loader_Text_Navigation<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ThSl_LT;?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<?php } else { ?>
<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>">
    <div class="center_content<?php echo $Rich_Web_Slider;?>">
        <div class="cssload-thecube<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
</div>
<?php } ?>
<ul id="RichWeb_TSL_slider<?php echo $Rich_Web_Slider_Manager[0]->id;?>" style='opacity:1;display:none;'>
    <?php for($i=0;$i<count($Rich_Web_Slider_Images);$i++){ 
						if(strpos($Rich_Web_Slider_Images[$i]->Sl_Img_Url, 'youtube') > 0)
						{
							$rest_vImg_url = substr($Rich_Web_Slider_Images[$i]->Sl_Img_Url, 0, -13);
							$link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
							if (!@fopen("$link_vImg_sl",'r')) { $link_vImg_sl = $Rich_Web_Slider_Images[$i]->Sl_Img_Url; }
						}
						else
						{
							$link_vImg_sl = $Rich_Web_Slider_Images[$i]->Sl_Img_Url;
						}
					 ?>
    <li style='padding:0px;background:none;'
        onclick="creatPopup<?php echo $Rich_Web_Slider_Manager[0]->id;?>('<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>',<?php echo $i; ?>)">
        <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined") { ?>
        <i class='vIcContent rich_web rich_web-play'></i>
        <?php } ?>
        <img class='contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>' src="<?php echo $link_vImg_sl;?>"
            title="<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?>"
            data-video="<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url;?>">
    </li>
    <?php }?>
</ul>
<input type='text' style='display:none;' class='slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_W;?>'>
<input type='text' style='display:none;' class='slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_H;?>'>
<input type='text' style='display:none;' class='countImgs<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo count($Rich_Web_Slider_Images);?>'>
<input type='text' style='display:none;' class='arrW<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Arr_S;?>'>
<input type='text' style='display:none;' class='imgSmW<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Nav_W;?>'>
<input type='text' style='display:none;' class='imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Nav_H;?>'>
<input type='text' style='display:none;' class='autPLW<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_SS_W;?>'>
<input type='text' style='display:none;' class='autPLH<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_SS_H;?>'>
<input type='text' style='display:none;' class='slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_CM;?>'>

<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Loop;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_PH;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_AP;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_TA;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Nav_Show;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_SS_Show;?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Arr_Show;?>'>