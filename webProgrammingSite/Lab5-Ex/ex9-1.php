<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Exercise 9's title
		</title>
		<style>
      .header {
          width: 100%;
          height: 50px;
          font-size: 30px;
          background-color: #7986cb;
          text-align:center;
      }
      .body {
        min-height: 85vh;
        text-align: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      footer {
          width: 100%;
          background-color: #7986cb;
          color: white;
          text-align: center;
      }
      textarea {
          display: block;
          padding: 0.375rem 0.75rem;
          font-weight: 400;
          line-height: 1.5;
          border: 1px solid #ced4da;
          appearance: none;
          border-radius: 0.25rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          margin-bottom: 20px;
          min-height: 300px;
      }
      input {
         display: block;
          padding: 0.375rem 0.75rem;
          font-weight: 400;
          line-height: 1.5;
          border: 1px solid #ced4da;
          appearance: none;
          border-radius: 0.25rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          margin-bottom: 20px;
      }
      label {
          margin-bottom: 8px;
          display: block;
      }
      .name_input {
          width: calc(100% - 48px);
      }
    </style>
	</head>
	<body>
		<?php
			class Page{
				private $page;
				private $title;
				private $year;
				private $copyright;
				
				function __construct($title, $year, $copyright){
					$this->title = $title;
					$this->year = $year;
					$this->copyright = $copyright;
					
				}

				private function addHeader() {
					$header = '<header> <h2>'.$this->title.'<h2> </header>';
					$this->page .= $header ;
				}

				public function addContent($content) {
					$this->addHeader(); 
					$bodyContent = '<body> '.$content.' </body>';
					$this->page .= $bodyContent;
					$this->addFooter();
				}

				private function addFooter() {
					$footer = '<footer><div>'.$this->copyright.' - '.$this->year.'</div></footer>';
					$this->page .= $footer;
				}

				public function get() {
					return ($this->page);
				}
			}
		?>
		
		<div style="display: flex; align-items: flex-start;">
		<?php
			if (array_key_exists("start", $_GET)){
				$title = $_GET["title"];
				$copyright = $_GET["copyright"];
				$year = $_GET["year"];
				$content = $_GET["content"];
			} else { 
				$title = '';
				$copyright = '';
				$year = '';
				$content = '';
			}
		?>
        <form action="" method="GET">
          <div>
              <div style="margin-bottom: 20px;">
                <label label>Enter title of page</label>
                <?php  
                      print('<input type="text" name="title" required value="'. $title .'"></input>');
                ?>
              </div>
              <div style="margin-bottom: 20px;">
                <label label>Enter copyright of page</label>
                <?php  
                      print('<input type="text" name="copyright" required value="'. $copyright .'"></input>');
                ?>
              </div>
              <div style="margin-bottom: 20px;">
                <label label>Enter year of page</label>
                <?php  
                      print('<input type="number" name="year" required value="'. $year .'"></input>');
                ?>
              </div>
              <div style="margin-bottom: 20px;">
                <label label>Enter content of page</label>
                <?php  
                      print('<textarea type="text" name="content" required>'. $content .'</textarea>');
                ?>
              </div>
              <div>
                <input type="submit" name="start" value="Submit" style="width: 100%;"></input>
			  	<input type="reset" value="Clear" style="width: 100%";>
              </div>
          </div>
        </form>
        <div style="flex: 1; margin-left: 30px; border: 1px solid #333;">
          <?php
            $page = new Page($title, $year, $content);
            $page->addContent($content);
            echo $page->get();
          ?>
		</div>
	</body>
</html>