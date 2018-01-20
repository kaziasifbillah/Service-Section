<?php

vc_map( array(
      "name" => __( "Asif service box", "my-text-domain" ),
      "base" => "asif_service_box",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",            
            "description" => __( "", "stock_aminulhchy" )
         ),
         array(
            "type" => "textarea",
            "heading" => __( "Content", "my-text-domain" ),
            "param_name" => "desc",            
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Link type", "my-text-domain" ),
            "param_name" => "type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array (
                'Link to page' => 1,
                'External link' => 2,
            ),
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Link to page", "my-text-domain" ),
            "param_name" => "link_to_page",
            "value" => asif_toolkit_get_page_as_list(),
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "type",
                'value' => array("1"),
            )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "External Link", "my-text-domain" ),
            "param_name" => "external_link",
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "type",
                'value' => array("2"),
            )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Link Text", "my-text-domain" ),
            "param_name" => "link_text",
            "std" => __( "See more", "my-text-domain" ),
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Icon type", "my-text-domain" ),
            "param_name" => "icon_type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array (
                'Upload' => 1,
                'FontAwesome icon' => 2,
            ),
            "description" => __( "", "my-text-domain" ),         
          ),
         array(
            "type" => "attach_image",
            "heading" => __( "Upload icon", "my-text-domain" ),
            "param_name" => "upload_icon",
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "icon_type",
                'value' => array("1"),
            )
         ),
         array(
            "type" => "iconpicker",
            "heading" => __( "Choose icon", "my-text-domain" ),
            "param_name" => "choose_icon",
            "description" => __( "", "my-text-domain" ),
            "dependency" => array (
                'element' => "icon_type",
                'value' => array("2"),
            )
         ),
         array(
            "type" => "attach_image",
            "heading" => __( "Box Background", "my-text-domain" ),
            "param_name" => "box_background",
            "description" => __( "", "my-text-domain" ),
         ),
      )
   ) );
