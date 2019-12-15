<?php
    class ViewInstallDb extends View {
        public function bodyPage() {
            ob_start() ?>
            <h1>Installing the Db</h1>
            <?php $this->_htmlElement = ob_end_flush();
            return $this->_htmlElement;
        }
    }
?>