<?php
    // $dumpFileName目录要有可写权限
    $DbHost = '127.0.0.1';
    $DbUser = 'root';
    $DbPwd  = 'root';
    $DbName = 'jgxys';
    $fileName = $DbName . '_MySQL_data_backup_' . date('YmdHis') . '.sql';
    $dumpFileName= "D:/phpStudy/PHPTutorial/WWW/".$fileName;
    exec("D:/phpStudy/PHPTutorial/MySQL/bin/mysqldump -u$DbUser -p$DbPwd $DbName > $dumpFileName");