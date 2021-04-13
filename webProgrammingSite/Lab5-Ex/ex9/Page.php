<?php
	class Page{
		private $page;
		private $title;
		private $year;
		private $copyright;
		
//		public function __construct(){			
//		}
		public function __construct($title, $year, $copyright){
			$this->title = $title;
			$this->year = $year;
			$this->copyright = $copyright;
		}
		
		private function addHeader(){
			print "<h2>".$this->title."</h2>";
		}
		public function setHeader1(){
			$this->addHeader();
		}
		public function setHeader2($string){
			$this->title = $string;
			$this->addHeader();
		}
		
		
		public function addContent($string){
			print "<div><p>".$string."</p></div>";
		}
		
		private function addFooter(){
			print "<hr/><footer><p>".$this->copyright.", ".$this->year."</p></footer>";
		}
		public function setFooter1(){
			$this->addFooter();
		}
		public function setFooter2($number, $string){
			$this->year = $number;
			$this->copyright = $string;
			$this->addFooter();
		}
		
		public function __get($name){
		 	echo "Getting ".$name."...\n";
			$trace = debug_backtrace();
			trigger_error('Undefined property via __get(): ' . $name . ' in ' . $trace[0]['file'] . ' online ' . $trace[0]['line']
					, E_USER_NOTICE);
			return null;
		}
	}
?>