<?php
    $fils = scandir ('task2');
    $hachArr = array();
    //echo hash_file('sha3-256', "task2/file_00.data");
    foreach ($fils as $fItem) {
        if (is_readable("task2/".$fItem) and $fItem <> "." and $fItem <> "..") { 
            $hachedFile = hash_file('sha3-256', "task2/".$fItem);
            array_push($hachArr, $hachedFile); 
        }
    }
    asort($hachArr);
    $sepHash = implode("", $hachArr).'ruslanshitik@yandex.by';
    echo hash('sha3-256',$sepHash);
    //echo hash('sha3-256','РНС'); //delete
?>