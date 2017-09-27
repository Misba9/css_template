 if( -1 != navigator.userAgent.
				indexOf ("MSIE") )
				{
    				document.write("");
				}
			else
				{

inc_corners_js =
'	<script type="text/javascript" src="js/jquery.corner.js'
+ '"></script>\n	<script type="text/javascript">\n		$(functio'
+ 'n() {\n			$("#mission").corner("10px");\n			$("h3.more a")'
+ '.corner("10px");\n			$("blockquote.testimonial").corner("'
+ '10px");\n			$("ul#twitter_update_list li").corner("10px")'
+ ';\n		});\n	</script>';

// end_var_declaration
document.write(inc_corners_js);

				}