<?php
    class ViewIndex extends View{
        public function bodyPage() {
            ob_start() ?>
            
            <?php $this->_htmlElement = ob_end_flush();
            return $this->_htmlElement;
        }
    }
?>