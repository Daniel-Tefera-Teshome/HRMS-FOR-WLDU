<?php
include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from applicant where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = '../uploads/'.$data['filename'];

    if(file_exists($file)){
        /////////////////////////////////////////////////
        // All Comments can be removed it works properly i commented it for mine purpose
        //////////////////////////////////////////////////
        //header('Content-Description: '. $data['description']);
        //header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'].'; filename="'.basename($file).'"');
        //header('Expires: '.$data['expires']);
        //header('Cache-Control: '.$data['cache']);
        //header('Pragma: '.$data['pragma']);
        ////////////////////////////////////////////////////////////
        // if those below lines are removed video will not be played
        header('Content-Length: '.filesize($file));
        readfile($file);
        exit;
    }
}