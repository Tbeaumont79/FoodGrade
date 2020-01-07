<?php
    require_once 'View/View.php';
    require_once 'View/ViewIndex.php';
    require_once 'View/ViewInstallDb.php';
    require_once 'View/ViewSignIn.php';
    require_once 'View/ViewSignUp.php';
    require_once 'lib/debug.php';
    require_once 'lib/installDb.php';
    require_once 'lib/DataUserRecord.php';
    require_once 'lib/connectToDb.php';
    require_once 'lib/SqlStatement/SqlStatement.php';
    require_once 'lib/SqlStatement/SqlStatementSignUp.php';
    die('3');
    require_once 'Modele/ActionInstallDb.php';
    die('4');
    require_once 'Modele/ActionSignUp.php';
    require_once 'Ctrl/Ctrl.php';
    require_once 'Ctrl/CtrlInstallDb.php';
    require_once 'Ctrl/CtrlSignIn.php';
    require_once 'Ctrl/CtrlSignUp.php';
    require_once 'Ctrl/CtrlIndex.php';

    $ctrl = Ctrl::routes();
    $ctrl->start();
    echo $ctrl->getView();
?>