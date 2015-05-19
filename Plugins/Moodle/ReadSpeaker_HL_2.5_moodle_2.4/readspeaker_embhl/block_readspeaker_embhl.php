<?php
class block_readspeaker_embhl extends block_base {
	public function init() {
		$this->title   = get_string('readspeakerembhl', 'block_readspeaker_embhl');
	}
	public function get_content() {
		global $CFG;
		if ($this->content !== NULL) {
			return $this->content;
		}
		$protocol = (!empty($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$slink = (!empty($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] == 443) ? "sf1-" : "f1.";
		$region = (!empty($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] == 443) ? "" : ".eu";

		$pageURL = $protocol.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$encodedURL=urlencode($pageURL);

		$dr_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', dirname(__FILE__))).'/docreader/proxy.php';

		$this->content         =  new stdClass;
		$this->content->text   = '<script type="text/javascript">window.rsConf = {general: {usePost: true}}; window.rsDocReaderConf = {proxypath: "'.$dr_path.'"}</script><script src="'.$protocol.$slink.'eu.readspeaker.com/script/'.get_config('readspeaker_embhl', 'cid').'/ReadSpeaker.js?pids=embhl,dr&amp;skin=ReadSpeakerCompactSkin" type="text/javascript"></script>
		<div id="readspeaker_button1" class="rs_skip rsbtn rs_preserve">
		<a accesskey="L" class="rsbtn_play" title="Listen to this page using ReadSpeaker" href="'.$protocol.'app'.$region.'.readspeaker.com/cgi-bin/rsent?customerid='.get_config('readspeaker_embhl', 'cid').'&amp;lang='.get_config('readspeaker_embhl', 'lang').'&amp;readid='.get_config('readspeaker_embhl', 'readid').'&amp;url='.$encodedURL.'">
		<span class="rsbtn_left rsimg rspart"><span class="rsbtn_text"><span>Listen</span></span></span>
        <span class="rsbtn_right rsimg rsplay rspart"></span>
		</a>
		</div>';
		
		return $this->content;
	}
	public function instance_allow_config() {
		return true;
	}
	
	function has_config() {
		return true;
	}
	
	public function instance_allow_multiple() {
		return true;
	}
	
	function applicable_formats() {
        return array('all' => true, 'tag' => false);
    }
	
	function specialization() {
		$this->title = 'ReadSpeaker Embedded Highlighting';		
	}
}
?>  