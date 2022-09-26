<?php
if (isset($_SESSION['error'])) {
    if ($_SESSION['error'] == 'edit-project') {
        $error = '<h5 class="text-danger">Error editing project: id already exist.</h5>';
    } else if ($_SESSION['error'] == 'edit-emplyee') {
        $error = '<h5 class="text-danger">Error editing emplyee: id already exist. </h5>';
    }
    session_destroy();
}
