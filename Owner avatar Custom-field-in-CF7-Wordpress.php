// Radio Button
add_action( 'wpcf7_init', 'custom_radio_job_type' );
 
function custom_radio_job_type() {
  wpcf7_add_form_tag( 'job_type_radio', 'radio_job_type_callback', array( 'name-attr' => true )); // "clock" is the type of the form-tag
}
 
function radio_job_type_callback( $tag ) {

	$atts = array();
	//$atts['name'] = 'radio_job_type';
	$atts['name'] = $tag->name;
	$atts['class'] = $tag->get_class_option().' wpcf7-radio';
	$atts['id'] = $tag->get_id_option();
	$atts = wpcf7_format_atts( $atts );

  	$html = '<div class="inline_radio">
                <input type="radio" id="zelfstandig" ' . $atts . ' value="Zelfstandig ondernemer">
                <label for="zelfstandig">Zelfstandig ondernemer</label>
            </div>';
    $html .= '<div class="inline_radio">
                <input type="radio" id="freelancer" ' . $atts . ' value="Freelancer">
                <label for="freelancer">Freelancer</label>
            </div>';

    $html .= '<div class="inline_radio">
                <input type="radio" id="loondienst" ' . $atts . ' value="loondienst">
                <label for="loondienst">loondienst</label>
            </div>';

	return $html;
}

// Usage
// [job_type_radio field name]


// Select Box
add_action( 'wpcf7_init', 'custom_select_job' );
 
function custom_select_job() {
  wpcf7_add_form_tag( 'job_select', 'select_job_callback', array( 'name-attr' => true )); // "clock" is the type of the form-tag
}
 
function select_job_callback( $tag ) {

	$atts = array();
	$atts['name'] = $tag->name;
	$atts['class'] = $tag->get_class_option().' wpcf7-select';
	$atts['id'] = $tag->get_id_option();
	$atts = wpcf7_format_atts( $atts );
	$html = '<select class="select2" ' . $atts . '><option value=""> Which Job </option></select>';
	return $html;
}

// Usage
// [select* Job id:select_jobs class:select2 include_blank ]
