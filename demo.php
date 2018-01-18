<?php
require_once 'ExcelInstance.php';
$data = [[0 => 'zhangsan',1 => 2,2 => 2,3 => '50%',4 => '50%'],[0 => '总计',1 => 2,2 => 2,3 => '50%',4 => '50%']];
$title = ['', '交易人员', '稽查结果统计（真/待确认）','稽查结果统计（假）','占比（真/待确认）', '占比（假）',];
$colum = ['', '一月', '二月', '三月'];
$Excel = new Excel();
$Excel->setColumnTitle($colum)->setRowTitle($title)->loadTableData($data)->output();