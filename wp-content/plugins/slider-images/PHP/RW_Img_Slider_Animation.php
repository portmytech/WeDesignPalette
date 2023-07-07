<?php if(!empty($Rich_Web_Slider_Effect_Loader)){ ?>
<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>"
    style="<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
    <div class="center_content<?php echo $Rich_Web_Slider;?>">
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_L_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_L_T == "Type 1") { ?>
        <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?>">
            <div class="loader_Navigation1 loader_Navigation1<?php echo $Rich_Web_Slider;?>" id="loader_Navigation1">
            </div>
            <div class="loader_Navigation2 loader_Navigation2<?php echo $Rich_Web_Slider;?>" id="loader_Navigation2">
            </div>
            <div class="loader_Navigation3 loader_Navigation3<?php echo $Rich_Web_Slider;?>" id="loader_Navigation3">
            </div>
            <div class="loader_Navigation4" id="loader_Navigation4"></div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_L_T == "Type 2") { ?>
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
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_L_T == "Type 3") { ?>
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
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_L_T == "Type 4") { ?>
        <div class="cssload-thecube<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT_T == "Type 1") { ?>
        <div class="cssload-loader<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT;?></div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT_T == "Type 2") { ?>
        <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>">
            <?php foreach($text_array as $key=>$v){ ?>
            <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>_<?php Print $key+1;?>"
                class="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>"><?php Print $v;?></div>
            <?php } ?>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT_T == "Type 3") { ?>
        <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>-box">
                <?php foreach($text_array as $key=>$v){ ?>
                <div><?php Print $v;?></div>
                <?php } ?>
            </div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT_T == "Type 4") { ?>
        <div class="RW_Loader_Text_Navigation<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_AnimSl_LT;?>
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
<div class="cd-slider-wrapper cd-slider-wrapper<?php echo $Rich_Web_Slider;?>" style="display:none;">
    <ul class="cd-slider cd-slider<?php echo $Rich_Web_Slider;?>">
        <i class="rw_delIc_animation rich_web rich_web-times"></i>
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
        <li style="padding:0px;margin:0px;"
            class="visible RW_Im_An_Sl RW_Im_An_Sl<?php echo $Rich_Web_Slider;?> RW_Im_An_Sl<?php echo $Rich_Web_Slider;?><?php echo $i+1;?>">
            <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined"){  ?>
            <div class="cd-svg-wrapper"
                onclick="rw_anim_video_cl<?php echo $Rich_Web_Slider;?>('<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>',this)">
                <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined") { ?>
                <iframe class='rw_animation_video<?php $Rich_Web_Slider; ?> rw_animation_video' src=''
                    webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i
                    class='plIc plIc_animation rich_web rich_web-play'></i>
                <?php } ?>
                <img class="<?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined"){ echo "pointer"; } ?> RW_ANMSL_Image RW_ANMSL_Image<?php echo $Rich_Web_Slider;?>"
                    src="<?php echo $link_vImg_sl;?>" />
            </div>
            <?php } else { ?>
            <div class="cd-svg-wrapper" onclick="">
                <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined") { ?>
                <iframe class='rw_animation_video<?php $Rich_Web_Slider; ?> rw_animation_video' src=''
                    webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i
                    class='plIc plIc_animation rich_web rich_web-play'></i>
                <?php } ?>
                <img class="<?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined"){ echo "pointer"; } ?> RW_ANMSL_Image RW_ANMSL_Image<?php echo $Rich_Web_Slider;?>"
                    src="<?php echo $link_vImg_sl;?>" />
            </div>
            <?php } ?>
        </li>
        <?php if($Rich_Web_Slider_Images[$i]->SL_Img_Title == ""){ ?>
        <div style="opacity:0"
            class="RW_Title RW_Title<?php echo $Rich_Web_Slider;?> RW_Title_Ef<?php echo $Rich_Web_Slider;?><?php echo $i+1;?>">
            <?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?></div>
        <?php } else { ?>
        <div style="opacity:1"
            class="RW_Title RW_Title<?php echo $Rich_Web_Slider;?> RW_Title_Ef<?php echo $Rich_Web_Slider;?><?php echo $i+1;?>">
            <?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?></div>
        <?php } ?>
        <?php } ?>
    </ul>
    <ul class="cd-slider-navigation cd-slider-navigation<?php echo $Rich_Web_Slider;?>">
        <?php if($Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_T_ShC=="Icon"){ ?>
        <li style="padding:0px;margin:0px;" class="RW_Right_Anim_Sl"><i
                class="next-slide RW_CL_N RW_CL_N<?php echo $Rich_Web_Slider;?> RW_CL RW_CL<?php echo $Rich_Web_Slider;?> <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_Ic_T;?>-right"></i>
        </li>
        <li style="padding:0px;margin:0px;" class="RW_Left_Anim_Sl"><i
                class="prev-slide RW_CL_P RW_CL_P<?php echo $Rich_Web_Slider;?> RW_CL RW_CL<?php echo $Rich_Web_Slider;?> <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_Ic_T;?>-left"></i>
        </li>
        <?php }else if($Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_T_ShC=="Image"){ ?>
        <li style="padding:0px;" class="RW_Right_Anim_Sl"><img
                src="<?php echo plugin_dir_url( __DIR__ ).'Images/icon-'. $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_T_Sh .'-'. $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_T_Sh .'.png'?>"
                class="next-slide RW_CL_N RW_CL_N<?php echo $Rich_Web_Slider;?> RW_CL RW_CL<?php echo $Rich_Web_Slider;?>">
        </li>
        <li style="padding:0px;margin:0px;" class="RW_Left_Anim_Sl"><img
                src="<?php echo plugin_dir_url( __DIR__ ).'Images/icon-'. $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_T_Sh .'.png'?>"
                class="prev-slide RW_CL_P RW_CL_P<?php echo $Rich_Web_Slider;?> RW_CL RW_CL<?php echo $Rich_Web_Slider;?>">
        </li>
        <?php } ?>
    </ul>
    <div class="cd-slider-controls cd-slider-controls<?php echo $Rich_Web_Slider;?>" style="display:none;">
        <?php for($i=0;$i<count($Rich_Web_Slider_Images);$i++){ ?>
        <?php if($i==0){ ?>
        <li style="padding:0px;margin:0px;" class="selected"><a class="RW_Thumb<?php echo $Rich_Web_Slider;?>" href="#0"
                name="<?php echo $i+1;?>"><em>Item <?php echo $i+1;?></em></a></li>
        <?php }else{ ?>
        <li style="padding:0px;margin:0px;"><a class="RW_Thumb<?php echo $Rich_Web_Slider;?>" href="#0"
                name="<?php echo $i+1;?>"><em>Item <?php echo $i+1;?></em></a></li>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<input type="text" style="display:none" class="CountShort<?php echo $Rich_Web_Slider;?>"
    value="<?php echo count($Rich_Web_Slider_Images);?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_H<?php echo $Rich_Web_Slider;?>"
    value="<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_H;?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_ET<?php echo $Rich_Web_Slider;?>"
    value="<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_ET;?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_SSh<?php echo $Rich_Web_Slider;?>"
    value="<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_SSh;?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_SShChT<?php echo $Rich_Web_Slider;?>"
    value="<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_AnSL_SShChT;?>">