<?php if(!empty($Rich_Web_Slider_Effect_Loader)){ ?>
<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>"
    style="<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
    <div class="center_content<?php echo $Rich_Web_Slider;?>">
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T == "Type 1") { ?>
        <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?>">
            <div class="loader_Navigation1 loader_Navigation1<?php echo $Rich_Web_Slider;?>" id="loader_Navigation1">
            </div>
            <div class="loader_Navigation2 loader_Navigation2<?php echo $Rich_Web_Slider;?>" id="loader_Navigation2">
            </div>
            <div class="loader_Navigation3 loader_Navigation3<?php echo $Rich_Web_Slider;?>" id="loader_Navigation3">
            </div>
            <div class="loader_Navigation4" id="loader_Navigation4"></div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T == "Type 2") { ?>
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
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T == "Type 3") { ?>
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
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_L_T == "Type 4") { ?>
        <div class="cssload-thecube<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_Show == "true") { ?>
        <?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T == "Type 1") { ?>
        <div class="cssload-loader<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT;?></div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T == "Type 2") { ?>
        <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>">
            <?php foreach($text_array as $key=>$v){ ?>
            <div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>_<?php Print $key+1;?>"
                class="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>"><?php Print $v;?></div>
            <?php } ?>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T == "Type 3") { ?>
        <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>">
            <div class="cssload-preloader<?php echo $Rich_Web_Slider;?>-box">
                <?php foreach($text_array as $key=>$v){ ?>
                <div><?php Print $v;?></div>
                <?php } ?>
            </div>
        </div>
        <?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT_T == "Type 4") { ?>
        <div class="RW_Loader_Text_Navigation<?php echo $Rich_Web_Slider;?>">
            <?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_CircleSl_LT;?>
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



<script id="barTmpl" type="text/x-jquery-tmpl">
    <div class="cn-bar cn-bar_<?php echo $Rich_Web_Slider_Manager[0]->id;?>">
						<div class="cn-nav cn-nav_<?php echo $Rich_Web_Slider_Manager[0]->id;?>">
							<a href="#" class="cn-nav-prev">
								<?php if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArText=='true'){ ?>
									<span><?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArLeft;?></span>
								<?php }?>
								<div style="background-image:url(${prevSource});"></div> 
							</a>
							<a href="#" class="cn-nav-next">
								<?php if($Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArText=='true'){ ?>
									<span><?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArRight;?></span>
								<?php }?>
								<div style="background-image:url(${nextSource});"></div>
							</a>
						</div>
						<div class="cn-nav-content cn-nav-content_<?php echo $Rich_Web_Slider_Manager[0]->id;?>">
							<div class="cn-nav-content-prev">
								<span id='pCl'><?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArLeft;?></span>
								<h3>${prevTitle}</h3>
							</div>
							<div class="cn-nav-content-current">
								<h2>${currentTitle}</h2>
							</div>
							<div class="cn-nav-content-next">
								<span id='nCl'><?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_ArRight;?></span>
								<h3>${nextTitle}</h3>
							</div>
						</div>
					</div>
				</script>
<div class="wrapper wrapper<?php echo $Rich_Web_Slider_Manager[0]->id;?>" style="display:none;">
    <div id="cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>"
        class="cn-slideshow cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>">
        <i class="circleVIcon rich_web rich_web-play"></i>
        <div class="cn-images cn-images_<?php echo $Rich_Web_Slider_Manager[0]->id;?>">
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
            <?php if($i=='0'){ ?>
            <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined"){  ?>
            <img class="rw_circle_img rw_circle_img<?php echo $Rich_Web_Slider_Manager[0]->id;?>"
                onclick="rw_circle_video_cl<?php echo $Rich_Web_Slider;?>('<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>',this)"
                data-video="<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>" src="<?php echo $link_vImg_sl;?>"
                alt="image<?php echo $i;?>"
                title="<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?>"
                data-thumb="<?php echo $link_vImg_sl;?>" style="display:block;width:100%;height:100%;" />
            <?php } else { ?>
            <img class="rw_circle_img rw_circle_img<?php echo $Rich_Web_Slider_Manager[0]->id;?>" onclick=""
                data-video="<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>" src="<?php echo $link_vImg_sl;?>"
                alt="image<?php echo $i;?>"
                title="<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?>"
                data-thumb="<?php echo $link_vImg_sl;?>" style="display:block;width:100%;height:100%;" />
            <?php } ?>
            <?php } else { ?>
            <?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined"){  ?>
            <img class="rw_circle_img rw_circle_img<?php echo $Rich_Web_Slider_Manager[0]->id;?>"
                data-video="<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>"
                onclick="rw_circle_video_cl<?php echo $Rich_Web_Slider;?>('<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>',this)"
                src="<?php echo $link_vImg_sl;?>" alt="image<?php echo $i;?>"
                title="<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?>"
                data-thumb="<?php echo $link_vImg_sl;?>" style='width:100%;height:100%;' />
            <?php } else { ?>
            <img class="rw_circle_img rw_circle_img<?php echo $Rich_Web_Slider_Manager[0]->id;?>"
                data-video="<?php echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; ?>" onclick=""
                src="<?php echo $link_vImg_sl;?>" alt="image<?php echo $i;?>"
                title="<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?>"
                data-thumb="<?php echo $link_vImg_sl;?>" style='width:100%;height:100%;' />
            <?php } ?>
            <?php }?>
            <?php } ?>
        </div>
        <iframe src="" class="rw_iframe_circle" style="display: none;" webkitAllowFullScreen mozallowfullscreen
            allowFullScreen></iframe>
        <i class="rw_icons_circle rich_web rich_web-times"></i>
    </div>
</div>
<input type='text' style='display:none;' class='respSLWidth_<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_W;?>' />
<input type='text' style='display:none;' class='respSLHeight_<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_H;?>' />
<input type='text' style='display:none;' class='respSLTitleFS_<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
    value='<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_CT_TFS-5;?>' />