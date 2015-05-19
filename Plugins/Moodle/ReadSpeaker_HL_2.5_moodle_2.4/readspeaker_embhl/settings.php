<?php

$settings->add(new admin_setting_heading(
            'headerconfig',
            get_string('headerconfig', 'block_readspeaker_embhl'),
            get_string('descconfig', 'block_readspeaker_embhl')
        ));
		
$settings->add(new admin_setting_configtext(
			'readspeaker_embhl/cid', 
			get_string('customerid', 'block_readspeaker_embhl'), 
			get_string('desccustomerid', 'block_readspeaker_embhl'), 
			'0000', 
			PARAM_INT
		));
		
$settings->add(new admin_setting_configtext(
			'readspeaker_embhl/readid',
			get_string('readid', 'block_readspeaker_embhl'),
			get_string('descreadid', 'block_readspeaker_embhl'),
			'12345',
			PARAM_RAW
		));
		
$settings->add(new admin_setting_configselect(
			'readspeaker_embhl/lang', 
			get_string('lang', 'block_readspeaker_embhl'), 
			get_string('desclang', 'block_readspeaker_embhl'), 
			'en_us', 
			array(
				'ar_ar' => 'Arabic',
				'eu_es' => 'Basque',
				'ca_es' => 'Catalan',
				'zh_cn' => 'Chinese (Mandarin)',
				'da_dk' => 'Danish',
				'nl_nl' => 'Dutch',
				'fy_nl' => 'Dutch (Frisian)',
				'en_au' => 'English (Australian)',
				'en_us' => 'English (American)',
				'en_uk' => 'English (UK)',
				'fo_fo' => 'Faroese',
				'fi_fi' => 'Finnish',
				'fr_fr' => 'French',
				'gl_es' => 'Galician',
				'de_de' => 'German',
				'hi_in' => 'Hindi',
				'it_it' => 'Italian',
				'ja_jp' => 'Japanese',
				'es_es' => 'Spanish (Castilian)',
				'es_us' => 'Spanish (American)',
				'no_nb' => 'Norwegian (Bokm&aring;l)',
				'pt_pt' => 'Portuguese',
				'ru_ru' => 'Russian',
				'sv_se' => 'Swedish',
				'tr_tr' => 'Turkish',
			)
		));