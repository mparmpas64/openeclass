<?php
                if (!session_id()) { session_start(); }
        $dbname="TMA102";
        session_register("dbname");
        include("../../modules/course_home/course_home.php");
        ?>