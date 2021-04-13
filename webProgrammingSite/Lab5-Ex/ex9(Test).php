<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        class Page {
            private $page;
            private $title;
            private $year;
            private $copyright;

            function __construct($title, $year, $copyright){
                $this->title = $title;
                $this->year = $year;
                $this->copyright = $copyright;
                $this->addHeader(); 
            }

            private function addHeader() {
                $header = '<div class="header"> '.$this->title.' </div>';
                $this->page .= $header ;
            }

            public function addContent($content) {
                $contentHTML = '<div class="body"> '.$content.' </div>';
                $this->page .= $contentHTML;
                $this->addFooter();
            }

            private function addFooter() {
                $footer = '<footer style="height: 50px; display: flex; align-items: center; justify-content:center;">
                  <div>'.$this->copyright.' - '.$this->year.'</div>
                </footer>
                ';
                $this->page .= $footer;
            }

            public function get() {
                return ($this->page);
            }
        }

        // $page = new Page("hello", "2020", "Copyright");
        // $page->addContent("Hello New Page");
        // echo $page->get();
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
    </div>
</body>
</html>