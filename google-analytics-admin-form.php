<?php

class google_analytics_admin_form {

  function admin_form() {
    $saved=false;
    
    if (qa_clicked('google_analytics_save_button')) {
        qa_opt('google_analytics_UA', qa_post_text('google_analytics_UA_field'));
				qa_opt('google_analytics_show_for_admin', (bool)qa_post_text('google_analytics_show_for_admin_field'));
				qa_opt('google_analytics_in_head', (bool)qa_post_text('google_analytics_in_head'));
				$saved=true;
			}
			
		return array(
			'ok' => $saved ? 'Google Analytics settings saved.' : null,
				
			'fields' => array(
        array(
          'label' => 'Enter Google UA id (should be like UA-xxxxxxx-x):',
					'value' => qa_html(qa_opt('google_analytics_UA')),
					'tags' => 'NAME="google_analytics_UA_field"',
        ),
        array(
          'label' => 'Check to exclude Super Admin visits from tracking.',
					'type' => 'checkbox',
					'value' => qa_opt('google_analytics_show_for_admin'),
					'tags' => 'NAME="google_analytics_show_for_admin_field"',
        ),
        array(
          'label' => 'Put in head (default to body)',
                                        'type' => 'checkbox',
                                        'value' => qa_opt('google_analytics_in_head'),
                                        'tags' => 'NAME="google_analytics_in_head"',
        ),
      ),
       
      'buttons' => array(
				array(
					'label' => 'Save Changes',
					'tags' => 'NAME="google_analytics_save_button"',
        ),
      ),
			
		);
			
			
  }
}
