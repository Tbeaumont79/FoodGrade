<?php
class View
{

    protected $_htmlElement;
    public function __construct()
    {
        $this->_htmlElement = '';
    }

    public function headerPage()
    {
        ob_start() ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="style/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>FoodGrade</title>
        </head>

        <body>
            <nav class="navbar navbar-dark bg-dark" style="height:100px;">
                <a href="/index.php?page=index" class="header-logo"><img width="100px" src="img/foodgrade.png" /></a>
                <div class="mr-4">
                    <a class="text-white mr-4" href="/index.php?page=contact">Contact</a>
                    <?php
                            if (!isset($_SESSION['user'])) {
                                ?>
                        <a class="text-white mr-4"  href="/index.php?page=signIn">SignIn</a>
                        <a class="text-white mr-4" href="/index.php?page=signUp">SignUp</a>
                    <?php } ?>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <a class="text-white mr-4" href="/index.php?page=logout">Logout</a>
                    <?php } ?>
                </div>
            </nav>
            <div id="container">

            <?php $this->_htmlElement = ob_end_flush();
                    return $this->_htmlElement;
                }

                public function bodyPage()
                { }

                public function footerPage()
                {
                    ob_start() ?>
            </div>
        </body>

        </html>
<?php $this->_htmlElement = ob_end_flush();
        return $this->_htmlElement;
    }

    public function buildPage()
    {
        $this->_htmlElement = $this->headerPage();
        $this->_htmlElement .= $this->bodyPage();
        $this->_htmlElement .= $this->footerPage();
    }
}
?>