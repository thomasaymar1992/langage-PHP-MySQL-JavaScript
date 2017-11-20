<?php
require "../../view/header/v_header.php";


if(isset($_SESSION['connecte'])) {
    require "../../view/menu/v_menuconnecte.php";
    require "../../view/aideEnLigne/v_Aide.php";
}
else
{
    require "../../view/menu/v_menunonconnecte.php";
    require "../../view/aideEnLigne/v_Aide.php";

}

