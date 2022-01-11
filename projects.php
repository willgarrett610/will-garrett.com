<?php
    require_once('sql.php');
    $server = "localhost";
    $user = $GLOBALS['sql_user'];
    $pass = $GLOBALS['sql_pass'];
    $db = "zerentha_willgarrett";

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM projects");
    $stmt->execute();
    $results = $stmt->get_result();

    $projects = array();

    if ($results->num_rows > 0) {
        while($row = $results->fetch_object()) {
            $project = $row;

            $stmt1 = $conn->prepare("SELECT * FROM `languages` WHERE `id` IN (SELECT `language_id` as `id` from `language_project` WHERE `project_id`=?)");
            $stmt1->bind_param("i", $row->id);
            $stmt1->execute();
            $results1 = $stmt1->get_result();

            $languages = array();

            if ($results1->num_rows > 0) {
                while($row1 = $results1->fetch_object()) {
                    $languages[] = $row1;
                }
            }

            $project->languages = $languages;
            $projects[] = $project;
        }
    }

    echo json_encode($projects);
?>