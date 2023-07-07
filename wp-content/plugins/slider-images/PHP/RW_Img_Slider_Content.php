<?php if(!empty($Rich_Web_Slider_Effect_Loader)) { ?>
				<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>" style="<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
					<div class="center_content<?php echo $Rich_Web_Slider;?>">
						<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_L_Show == "true") { ?>
							<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo $Rich_Web_Slider;?>">
									<div class="loader_Navigation1 loader_Navigation1<?php echo $Rich_Web_Slider;?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?php echo $Rich_Web_Slider;?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?php echo $Rich_Web_Slider;?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_L_T == "Type 2") { ?>
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
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_L_T == "Type 3") { ?>
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
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?php echo $Rich_Web_Slider;?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT_Show == "true") { ?>
							<?php if($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?php echo $Rich_Web_Slider;?>"><?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT;?></div>
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>_<?php Print $key+1;?>" class="inTurnFadingTextG<?php echo $Rich_Web_Slider;?>"><?php Print $v;?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?php echo $Rich_Web_Slider;?>">
									<div class="cssload-preloader<?php echo $Rich_Web_Slider;?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v;?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?php echo $Rich_Web_Slider;?>">
									<?php echo $Rich_Web_Slider_Effect_Loader[0]->Rich_Web_ContSl_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			<?php } else { ?>
				<div id="RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>" >
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
				<div class="main main_<?php echo $Rich_Web_Slider_Manager[0]->id;?>" style="display:none;" >
					<div class="page_container">
						<div id="immersive_slider_<?php echo $Rich_Web_Slider_Manager[0]->id;?>" style='background:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BgC;?>;box-shadow:0px 0px 30px <?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BSC;?>;opacity:1;border-top:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BW;?>px solid <?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BC;?>;border-bottom:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BW;?>px solid <?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BC;?>;border-radius:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_BR;?>px;'>
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
								<div class="slide slide_<?php echo $Rich_Web_Slider_Manager[0]->id;?>" data-blurred="<?php echo $link_vImg_sl;?>">
									<div class="image ImCS" onclick='popupFunc<?php echo $Rich_Web_Slider_Manager[0]->id;?>("<?php echo $link_vImg_sl;?>","<?php  if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined") { echo $Rich_Web_Slider_Videos[$i]->Sl_Video_Url; }else{ echo ''; } ?>")'>
										
										<img class='imFiltBl<?php echo $Rich_Web_Slider_Manager[0]->id;?>' src="<?php echo $link_vImg_sl;?>" alt="Slider <?php echo $i+1;?>"/>
										<?php if($Rich_Web_Slider_Effect[0]->rich_CS_Video_DC=='on'){ ?>
											<?php if($Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== '' && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== null && $Rich_Web_Slider_Videos[$i]->Sl_Video_Url !== "undefined") { ?>
												<i class='plIcContent rich_web rich_web-play'></i>
											<?php } ?>
										<?php } ?>
									</div>
									<div class="content CSHD">
										<h2 class='CSHeader' style='margin:0px;display:<?php echo $rich_CS_Video_TShow;?>;color:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_TC;?>;font-size:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_TFS;?>;font-family:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_TFF;?>;text-align:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_TTA;?>;'><?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->SL_Img_Title);?></h2>
										<?php if($rich_CS_Video_DShow == 'block'){ ?>
											<?php echo html_entity_decode($Rich_Web_Slider_Images[$i]->Sl_Img_Description);?>
										<?php }?>
									</div>
									<?php if($Rich_Web_Slider_Images[$i]->Sl_Link_Url !== '' && $Rich_Web_Slider_Images[$i]->Sl_Link_Url !== null){ ?>
									<div class='linkDCS'>
										<a href='<?php echo $Rich_Web_Slider_Images[$i]->Sl_Link_Url;?>' target='<?php echo $Rich_Web_Slider_Images[$i]->Sl_Link_NewTab;?>' class='CSLink CSLink_<?php echo $i;?>' style='font-family:<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_LFF;?>;'><?php echo $Rich_Web_Slider_Effect[0]->rich_CS_LT;?></a>
									</div>
									<?php } ?>
								</div>
							<?php } ?>
							<i class='is-prev is-prev<?php echo $Rich_Web_Slider_Manager[0]->id;?> CSIcon <?php echo $Rich_PS_Left_Icon;?>'></i>
							<i class='is-next is-next<?php echo $Rich_Web_Slider_Manager[0]->id;?> CSIcon <?php echo $Rich_PS_Right_Icon;?>'></i>
						</div>
					</div>
				</div>
				<input type='text' style='display:none;' class='SDuration<?php echo $Rich_Web_Slider_Manager[0]->id;?>'      value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_SD;?>'>
				<input type='text' style='display:none;' class='SShowCS<?php echo $Rich_Web_Slider_Manager[0]->id;?>'        value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_H;?>'>
				<input type='text' style='display:none;' class='AnimationType_<?php echo $Rich_Web_Slider_Manager[0]->id;?>' value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_AT;?>'>
				<input type='text' style='display:none;' class='ContWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>'      value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_W;?>'>
				<input type='text' style='display:none;' class='ContHeight<?php echo $Rich_Web_Slider_Manager[0]->id;?>'     value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Cont_H;?>'>
				<input type='text' style='display:none;' class='ContHeader<?php echo $Rich_Web_Slider_Manager[0]->id;?>'     value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_TFS;?>'>
				<input type='text' style='display:none;' class='ContLinkCS<?php echo $Rich_Web_Slider_Manager[0]->id;?>'     value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_LFS;?>'>
				<input type='text' style='display:none;' class='ContIconsCS<?php echo $Rich_Web_Slider_Manager[0]->id;?>'    value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_AFS;?>'>
				<input type='text' style='display:none;' class='PopupShow<?php echo $Rich_Web_Slider_Manager[0]->id;?>'    value='<?php echo $Rich_Web_Slider_Effect[0]->rich_CS_Video_DC;?>'>