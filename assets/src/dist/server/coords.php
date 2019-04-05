<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');

    $markAddress = 'г. Рязань, ул. Есенина, д. 1А';
    $markBaloonContent = '';
    $markHintContent = '';
    $markIconContent = '';
    $result['markAddress'] = $markAddress;
    $result['markBaloonContent'] = $markBaloonContent;
    $result['markHintContent'] = $markHintContent;
    $result['markIconContent'] = $markIconContent;

   echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>