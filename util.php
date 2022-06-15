<?php
    class Util{
        //method for sanitizing inputs
        public function testInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //method for displaying success and error message
        public function showMessage($type, $message){
            return '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
            <strong>' . $message . '</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
?>