<?php

	class site 
	{
		private $header;
		private $main;
		private $footer;
		
		public function addHeader($header) 
		{
			$this->header = $header;
		}
		
		public function addMain($main) 
		{
			$this->main = $main;
		}
		
		public function addFooter($footer) 
		{
			$this->footer = $footer;
		}
		
		public function display($content, $title) 
		{
			global $page;
			include $this->header;
			include $this->main;			
			include $this->footer;
		}
	}
?>
