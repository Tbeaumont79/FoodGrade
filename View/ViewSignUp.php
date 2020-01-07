<?php
    class ViewSignUp extends View{
        public function bodyPage() {
            ob_start() ?>
            <div style="position:absolute; margin-left:70%; margin-top:10%;">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm password</label>
                    <input type="confirmpass" class="form-control" id="exampleInputPassword1" placeholder="Confirm password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <a href="index.php?page=signUp"></a><button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <img src="img/photoplate.jpeg" width="52.5%" alt="">
            <?php $this->_htmlElement = ob_end_flush();
            return $this->_htmlElement;
        }
    }
?>