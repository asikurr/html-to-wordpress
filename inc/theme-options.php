<?php


//if(function_exists('vc_map')){
	add_action( 'vc_before_init', 'themx_integrateWithVC' );
	function themx_integrateWithVC() {

// ---------------------------------------------
// begin: Revolution Slider
// ---------------------------------------------

		vc_map(array(
			'name'			=> esc_html__('Revolution Slider', 'themx'),
			'description'	=> esc_html__('Place Revolution slider', 'themx'),
			'base'			=> 'slider_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'icon'			=> get_template_directory_uri(). '/assets/images/vc_logo.jpg',
			'params'		=> array(
				array(
					'param_name'	=> 'rev_slider_id',
					'type'			=> 'textfield',
					'holder' 		=> 'div',
					'group'			=> esc_html__('Slider alias', 'themx'),
					'heading'		=> esc_html__('Type your slider alias', 'themx')
					)	
			)
		));
		


// -------------------------------------------
// Themx home Easy To Start section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Easy To Start', 'themx'),
			'base'			=> 'e_to_s_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Easy To Start', 'themx'),
			'params'		=> array(
					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'descrip',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('Section Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Easy To Start Items', 'themx'),
						'param_name' 	=> 'e_to_s_group',
						'group'			=> esc_html__('Easy To Start Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(
					    

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Item Title', 'themx'),
								'param_name' 	=> 'i_title'
							),

							array(
								'type' => 'attach_image',
								'heading' => __( 'Iteam Image', 'themx' ),
								'param_name' => 'i_image',
								),					
							
							array(
								'type' 			=> 'textarea',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Iteam Description', 'themx'),
								'admin_label'	=> true,
								'param_name' 	=> 'i_desc'
							),
							
					
						)
					)
				)
		));	

// -------------------------------------------
// Themx home Counter up section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Counter Up Section', 'themx'),
			'base'			=> 'counterup_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Counter Up Section', 'themx'),
			'params'		=> array(

	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Counter Up Items', 'themx'),
						'param_name' 	=> 'counterup_group',
						'group'			=> esc_html__('Counter Up Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(
					    

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Item Title', 'themx'),
								'param_name' 	=> 'i_title'
							),

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Item Number', 'themx'),
								'param_name' 	=> 'i_number'
							),
							
					
						)
					)
				)
		));	

// -------------------------------------------
// Themx home Portfolio section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Portfolio Section', 'themx'),
			'base'			=> 'portfolio_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Portfolio Section', 'themx'),
			'params'		=> array(
					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),


				)
		));	

// -------------------------------------------
// Themx home Our Service section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Our Service Section', 'themx'),
			'base'			=> 'our_s_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Our Service Section', 'themx'),
			'params'		=> array(
					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'descrip',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('Section Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
					array(
								'type' => 'attach_image',
								'heading' => __( 'Service Right Image', 'themx' ),
								'param_name' => 's_r_image',
								),	
	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Our Service Section Group', 'themx'),
						'param_name' 	=> 'our_s_group',
						'group'			=> esc_html__('Our Service Section Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(
					    

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Service Title', 'themx'),
								'param_name' 	=> 's_title'
							),

							array(
								'type' => 'attach_image',
								'heading' => __( 'Service Image', 'themx' ),
								'param_name' => 's_image',
								),					
							
							array(
								'type' 			=> 'textarea',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Service Description', 'themx'),
								'admin_label'	=> true,
								'param_name' 	=> 's_desc'
							),
							
					
						)
					)

				        					
							
				)
		));	


// -------------------------------------------
// Themx home Testimonisl section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Testimonisl Section', 'themx'),
			'base'			=> 'testimonial_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Testimonisl Section', 'themx'),
			'params'		=> array(

// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Testimonisl Section', 'themx'),
						'param_name' 	=> 'testimonial_group',
						'group'			=> esc_html__('Testimonisl Section Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(


							array(
								'type' => 'attach_image',
								'heading' => __( 'Person Image', 'themx' ),
								'param_name' => 'p_image',
								),	

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Person Name', 'themx'),
								'param_name' 	=> 'p_name'
							),

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Person Designation', 'themx'),
								'param_name' 	=> 'p_desig'
							),				
							
							array(
								'type' 			=> 'textarea',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Person Description', 'themx'),
								'admin_label'	=> true,
								'param_name' 	=> 'p_desc'
							),

						// -------------------------------------------
						// params group Testimonial Social link
						// ---------------------------------------------
							array(
								'type' 			=> 'param_group',
								'heading'		=> esc_html__('Testimonisl link group', 'themx'),
								'param_name' 	=> 'testimonial_link_group',
								'group'			=> esc_html__('Testimonisl link Group', 'themx'),
							// Note params is mapped inside param-group:
							    'params' 			=> array(

                                   array(
										'param_name'	=> 'member_social_icon',
										'type'			=> 'iconpicker',
										'heading'		=> esc_html__('Member Social Icon', 'themx'),
										),

									array(
										'param_name'	=> 'member_social_url',
										'type'			=> 'textfield',
										'heading'		=> esc_html__('Member Social Link', 'themx'),
										),
                                 

							          )


							     )

						)
					)
				)
		));	


// -------------------------------------------
// Themx home Ready To Talk section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Ready To Talk Section', 'themx'),
			'base'			=> 'ready_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Ready To Talk Section', 'themx'),
			'params'		=> array(

					array(
						'type' => 'attach_image',
						'heading' => __( 'Background Image', 'themx' ),
						'param_name' => 'b_image',
						),

					array(
						'type' => 'attach_image',
						'heading' => __( 'Logo Image', 'themx' ),
						'param_name' => 'ready_b_image',
						),

					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'descrip',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('Section Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),


					array(
						'type' 			=> 'textfield',
						'value' 		=> esc_html__('', 'themx'),
						'heading' 		=> esc_html__('Button Title', 'themx'),
						'param_name' 	=> 'bt_title'
					),	

					array(
						'type' 			=> 'textfield',
						'value' 		=> esc_html__('', 'themx'),
						'heading' 		=> esc_html__('Button link', 'themx'),
						'param_name' 	=> 'bt_link'
					),					

	 					
							
				)
		));	


// -------------------------------------------
// Themx home Latest Blog section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Latest Blog Section', 'themx'),
			'base'			=> 'recent_blog_section',
			'category'		=> esc_html__('Themx Home', 'themx'),
			'Description'	=> esc_html__('Latest Blog', 'themx'),
			'params'		=> array(

					
					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'descrip',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('Section Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
	 				
	 				array(
						'param_name'	=> 'post_p_page',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('How Many Post In Home Page', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
							
				)
		));	












// -------------------------------------------
// Themx About Us Page
// ---------------------------------------------
// -------------------------------------------
// Themx About us Banner section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('About us Banner', 'themx'),
			'base'			=> 'banner_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('About us Banner', 'themx'),
			'params'		=> array(


					array(
						'type' => 'attach_image',
						'heading' => __( 'About us Banner Image', 'themx' ),
						'param_name' => 'aboutu_b_image',
						),
					
					array(
						'param_name'	=> 'title1',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title One', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

	 				array(
						'param_name'	=> 'title2',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title Two', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
							
				)
		));	


// -------------------------------------------
// Themx About us - Model section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Model Section', 'themx'),
			'base'			=> 'model_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('Model Section', 'themx'),
			'params'		=> array(
					array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'descrip',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('Section Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),



//List image and title
						array(
							'type' => 'attach_image',
							'heading' => __( 'List Image1', 'themx' ),
							'param_name' => 'm_l_image1',
							),					
						
						array(
							'type' 			=> 'textfield',
							'value' 		=> esc_html__('', 'themx'),
							'heading' 		=> esc_html__('List Title1', 'themx'),
							'param_name' 	=> 'm_l_title1'
						),

							array(
							'type' => 'attach_image',
							'heading' => __( 'List Image2', 'themx' ),
							'param_name' => 'm_l_image2',
							),					
						
						array(
							'type' 			=> 'textfield',
							'value' 		=> esc_html__('', 'themx'),
							'heading' 		=> esc_html__('List Title2', 'themx'),
							'param_name' 	=> 'm_l_title2'
						),

							array(
							'type' => 'attach_image',
							'heading' => __( 'List Image3', 'themx' ),
							'param_name' => 'm_l_image3',
							),					
						
						array(
							'type' 			=> 'textfield',
							'value' 		=> esc_html__('', 'themx'),
							'heading' 		=> esc_html__('List Title3', 'themx'),
							'param_name' 	=> 'm_l_title3'
						),

							array(
							'type' => 'attach_image',
							'heading' => __( 'List Image4', 'themx' ),
							'param_name' => 'm_l_image4',
							),					
						
						array(
							'type' 			=> 'textfield',
							'value' 		=> esc_html__('', 'themx'),
							'heading' 		=> esc_html__('List Title4', 'themx'),
							'param_name' 	=> 'm_l_title4'
						),

	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Model Image Section Group', 'themx'),
						'param_name' 	=> 'model_img_group',
						'group'			=> esc_html__('Model Image Section Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(

							array(
								'type' => 'attach_image',
								'heading' => __( 'Model Image', 'themx' ),
								'param_name' => 'm_image',
								),					
					
						)
					)

				        
				        					
							
				)
		));	



// -------------------------------------------
// Themx About us - More about us section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('More about us Section', 'themx'),
			'base'			=> 'more_about_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('More about us Section', 'themx'),
			'params'		=> array(

						array(
							'type' => 'attach_image',
							'heading' => __( 'Image1', 'themx' ),
							'param_name' => 'm_a_image1',
							),	
						array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('More about Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),				

	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('More about Group iteam', 'themx'),
						'param_name' 	=> 'm_a_group',
						'group'			=> esc_html__('More about Group iteam', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(

							array(
								'type' => 'attach_image',
								'heading' => __( 'Iteam Image', 'themx' ),
								'param_name' => 'm_a_img',
								),					
							array(
							'param_name'	=> 'title1',
							'type'			=> 'textfield',
							'heading'		=> esc_html__('More about Title1', 'themx'),
							'value'			=> esc_html__('', 'themx')
							),

							array(
							'param_name'	=> 'title2',
							'type'			=> 'textfield',
							'heading'		=> esc_html__('More about Title2', 'themx'),
							'value'			=> esc_html__('', 'themx')
							),
							array(
							'param_name'	=> 'des',
							'type'			=> 'textarea',
							'heading'		=> esc_html__('More about Description', 'themx'),
							'value'			=> esc_html__('', 'themx')
							),			
						)
					)

				        
				        					
							
				)
		));	



// -------------------------------------------
// Themx About us - More about 2nd section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('More about us 2nd Section', 'themx'),
			'base'			=> 'more_about_2_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('More about us 2nd Section', 'themx'),
			'params'		=> array(

						array(
							'type' => 'attach_image',
							'heading' => __( 'Image2', 'themx' ),
							'param_name' => 'm_a_image2',
							),	
						array(
						'param_name'	=> 'title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Our Skill Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),				

	
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Our Skill Group iteam', 'themx'),
						'param_name' 	=> 'our_skl_group',
						'group'			=> esc_html__('Our Skill Group iteam', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(

							array(
							'param_name'	=> 'skill_type',
							'type'			=> 'textfield',
							'heading'		=> esc_html__('Skill Type Title', 'themx'),
							'value'			=> esc_html__('', 'themx')
							),

							array(
							'param_name'	=> 'skill_percentage',
							'type'			=> 'textfield',
							'heading'		=> esc_html__('Give Skill Percentage number', 'themx'),
							'value'			=> esc_html__('', 'themx')
							),
		
						)
					)

				        
				        					
							
				)
		));	


// -------------------------------------------
// Themx About us Team section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Team Section', 'themx'),
			'base'			=> 'team_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('Team Section', 'themx'),
			'params'		=> array(


					array(
						'type' 			=> 'textfield',
						'value' 		=> esc_html__('', 'themx'),
						'heading' 		=> esc_html__('Section Title', 'themx'),
						'param_name' 	=> 'title'
					),


					array(
						'type' 			=> 'textfield',
						'value' 		=> esc_html__('', 'themx'),
						'heading' 		=> esc_html__('Team Name', 'themx'),
						'param_name' 	=> 'team_name'
					),
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Team Group', 'themx'),
						'param_name' 	=> 'team_group',
						'group'			=> esc_html__('Team Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(


							array(
								'type' => 'attach_image',
								'heading' => __( 'Person Image', 'themx' ),
								'param_name' => 'p_image',
								),	

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Person Name', 'themx'),
								'param_name' 	=> 'p_name'
							),

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Person Designation', 'themx'),
								'param_name' 	=> 'p_desig'
							),				

						// -------------------------------------------
						// params group Testimonial Social link
						// ---------------------------------------------
							array(
								'type' 			=> 'param_group',
								'heading'		=> esc_html__('Team Social link group', 'themx'),
								'param_name' 	=> 'team_social_link_group',
								'group'			=> esc_html__('Team Social link Group', 'themx'),
							// Note params is mapped inside param-group:
							    'params' 			=> array(

                                   array(
										'param_name'	=> 'member_social_icon',
										'type'			=> 'iconpicker',
										'heading'		=> esc_html__('Member Social Icon', 'themx'),
										),

									array(
										'param_name'	=> 'member_social_url',
										'type'			=> 'textfield',
										'heading'		=> esc_html__('Member Social Link', 'themx'),
										),
                                 

							          )


							     )

						)
					)
				)
		));	

// -------------------------------------------
// Themx About us Patner section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Our Patner Section', 'themx'),
			'base'			=> 'our_patner_section',
			'category'		=> esc_html__('Themx About', 'themx'),
			'Description'	=> esc_html__('Our Patner Section', 'themx'),
			'params'		=> array(

// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Our Patner Group', 'themx'),
						'param_name' 	=> 'patner_group',
						'group'			=> esc_html__('Our Patner Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(


							array(
								'type' => 'attach_image',
								'heading' => __( 'Patner Image', 'themx' ),
								'param_name' => 'p_image',
								),	

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Patner Link', 'themx'),
								'param_name' 	=> 'p_link'
							),

									

						)
					)
				)
		));	






// -------------------------------------------
// Themx Blog Page
// ---------------------------------------------
// -------------------------------------------
// Themx Blog Banner section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Blog One Banner', 'themx'),
			'base'			=> 'blog_banner_section',
			'category'		=> esc_html__('Themx Blog', 'themx'),
			'Description'	=> esc_html__('Blog Banner', 'themx'),
			'params'		=> array(


					array(
						'type' => 'attach_image',
						'heading' => __( 'Blog one Banner Image', 'themx' ),
						'param_name' => 'b_o_image',
						),
					
					array(
						'param_name'	=> 'title1',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title One', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

	 				array(
						'param_name'	=> 'title2',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title Two', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
							
				)
		));	


// -------------------------------------------
// Themx Blog Post section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Blog Post', 'themx'),
			'base'			=> 'blog_post_section',
			'category'		=> esc_html__('Themx Blog', 'themx'),
			'Description'	=> esc_html__('Blog Post', 'themx'),
			'params'		=> array(

					array(
						'param_name'	=> 'post_number',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Give Blog Post Number', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

				)
		));	




// -------------------------------------------
// Themx Blog single Page
// ---------------------------------------------
// -------------------------------------------
// Themx Blog single page Banner section
// ---------------------------------------------						














// -------------------------------------------
// Themx Contact Us Page
// ---------------------------------------------
// -------------------------------------------
// Themx Contact us Banner section
// ---------------------------------------------						
	vc_map(array(
			'name'			=> esc_html__('Contact us Banner', 'themx'),
			'base'			=> 'c_banner_section',
			'category'		=> esc_html__('Themx Contact', 'themx'),
			'Description'	=> esc_html__('Contact us Banner', 'themx'),
			'params'		=> array(


					array(
						'type' => 'attach_image',
						'heading' => __( 'About us Banner Image', 'themx' ),
						'param_name' => 'c_b_image',
						),
					
					array(
						'param_name'	=> 'title1',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title One', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

	 				array(
						'param_name'	=> 'title2',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Section Title Two', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
							
				)
		));	


// -------------------------------------------
// Themx Contact section
// -------------------------------------------					
	vc_map(array(
			'name'			=> esc_html__('Contact Section', 'themx'),
			'base'			=> 'contact_section',
			'category'		=> esc_html__('Themx Contact', 'themx'),
			'Description'	=> esc_html__('Contact Section', 'themx'),
			'params'		=> array(


					array(
						'param_name'	=> 'email_tit',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Email Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'email_link',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Email Link', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

					array(
						'param_name'	=> 'email_add',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Email Address', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),

	 				array(
						'param_name'	=> 'num_titl',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Number Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),	 				
	 				array(
						'param_name'	=> 'num_1',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Number 1', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),	 				
	 				array(
						'param_name'	=> 'num_2',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Number 2', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
								 				
					array(
						'param_name'	=> 'location_title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Location Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
					array(
						'param_name'	=> 'location_des',
						'type'			=> 'textarea',
						'heading'		=> esc_html__('location Description', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
					array(
						'param_name'	=> 'social_title',
						'type'			=> 'textfield',
						'heading'		=> esc_html__('Social Title', 'themx'),
						'value'			=> esc_html__('', 'themx')
						),
					//cf7
					array(
					'param_name'	=> 'content',
					'type'			=> 'textarea_html',
					'holder'		=> 'div',
					'class' 		=> '',
					'description'	=> esc_html__('(Shortcode form Contact form)', 'themx'),
					'group'   		=> esc_html__( 'Form Shortcode', 'themx' ),
					),
				
// -------------------------------------------
// params group
// ---------------------------------------------
					array(
						'type' 			=> 'param_group',
						'heading'		=> esc_html__('Social Group', 'themx'),
						'param_name' 	=> 'social_group',
						'group'			=> esc_html__('Social Group', 'themx'),
					// Note params is mapped inside param-group:
					    'params' 			=> array(

							array(
								'type' => 'textfield',
								'heading' => __( 'Social Profile', 'themx' ),
								'param_name' => 's_text',
								),	

							array(
								'type' 			=> 'textfield',
								'value' 		=> esc_html__('', 'themx'),
								'heading' 		=> esc_html__('Social Link', 'themx'),
								'param_name' 	=> 's_link'
							),

									

						)
					)

							
				)
		));	


// ------------------------------------------------
// Contact us page  Google Map
//------------------------------------------------			
	vc_map(
		array(
			'name'	=> __( 'Google Map', 'themx' ),
			'description'	=> __( 'Edit Google Map', 'themx' ),
			'base' => 'contact_google_map',
			'category'	=> __( 'Themx Contact', 'themx' ),
			'admin_enqueue_js' => array(get_template_directory_uri().'/assets/js/gmaps.js'),
			//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
			'icon'			=> get_template_directory_uri(). '/assets/images/favicon.ico',
			'params' => array(
				array(
					'param_name'	=> 'map_center_lat',
					'type'			=> 'textfield',
					'heading'		=> __( '(It should be \'Country Name\' of center/main branch.)<br><br>Latitude', 'themx' ),
					'group'			=> __( 'Map Center', 'themx' ),
					'value'			=> 1.3581617,
					),
				array(
					'param_name'	=> 'map_center_lan',
					'type'			=> 'textfield',
					'heading'		=> __( 'Longitude', 'themx' ),
					'group'			=> __( 'Map Center', 'themx' ),
					'value'			=> 103.9090659,
					),
				array(
					'param_name'	=> 'map_zoom',
					'type'			=> 'textfield',
					'heading'		=> __( 'Map Zoom Position', 'themx' ),
					'group'			=> __( 'Map Center', 'themx' ),
					'value'			=> 13,
					),
				// params group
				array(
					'type' => 'param_group',
					'value' => '',
					'heading'		=> __( 'Add New Branch', 'themx' ),
					'param_name' => 'branch_group_group',
					'group'			=> __( 'Add Branches', 'themx' ),
					'params' => array(
						
						array(
							'param_name'	=> 'google_branch_title',
							'type'			=> 'textfield',
							'heading'		=> __( 'Place Name', 'themx' ),
							'value'			=> 'Paya Lebar Air Base (QPG)',
							),
						array(
							'param_name'	=> 'google_branch_lat',
							'type'			=> 'textfield',
							'heading'		=> __( 'Latitude', 'themx' ),
							'value'			=> '1.3581617',
							),
						array(
							'param_name'	=> 'google_branch_lan',
							'type'			=> 'textfield',
							'heading'		=> __( 'Longitude', 'themx' ),
							'value'			=> '103.9090659',
							),
						array(
							'param_name'	=> 'google_branch_icon_image',
							'type'			=> 'attach_image',
							'heading'		=> __( 'Location Indicator', 'themx' ),
							)
					)
				),
				//end group
				array(
					'param_name'	=> 'map_text_color',
					'type'			=> 'colorpicker',
					'value'			=> '#5F5028',
					'heading'		=> __( 'Text Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_water_color',
					'type'			=> 'colorpicker',
					'value'			=> '#9bc6ff',
					'heading'		=> __( 'Water Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_landscape_color',
					'type'			=> 'colorpicker',
					'value'			=> '#F0EDE5',
					'heading'		=> __( 'Landscape Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_highway_color',
					'type'			=> 'colorpicker',
					'value'			=> '#F0C07A',
					'heading'		=> __( 'Highway Road Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_localroad_color',
					'type'			=> 'colorpicker',
					'value'			=> '#ffffff',
					'heading'		=> __( 'Local Road Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_park_color',
					'type'			=> 'colorpicker',
					'value'			=> '#bfe587',
					'heading'		=> __( 'Park/Lake Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_transit_color',
					'type'			=> 'colorpicker',
					'value'			=> '#EAEAEA',
					'heading'		=> __( 'Transit Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
				array(
					'param_name'	=> 'map_geo_stroke_color',
					'type'			=> 'colorpicker',
					'value'			=> '#676767',
					'heading'		=> __( 'Geometry Stroke Color', 'themx' ),
					'group'			=> __( 'Color Changing Options', 'themx' ),
					),
			)
		)
	);	
	










	}

?>