<?php
    include("./oc-config.php");
    include("./actions/api.php");
    include("./actions/dispatchActions.php");
    session_start();

    // TODO: Verify user has permission to be on this page

    if (empty($_SESSION['logged_in']))
    {
        header('Location: ./index.php');
        die("Not logged in");
    }
    else
    {
      $name = $_SESSION['name'];
    }

    if(isset($_SESSION['dispatch']))
    {

      if ($_SESSION['dispatch'] == 'YES')
      {
    setDispatcher("2");
      }
    }
    else
    {
      die("You do not have permission to be here. Request access to dispatch through your administration.");
    }

?>