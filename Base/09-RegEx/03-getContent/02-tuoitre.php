<?php
    $content = file_get_contents('https://congnghe.tuoitre.vn/');


    $pattern = '#class="box_home_newhight clear".*src="(.*)".*class="title fr".*>.*href="(.*)".*>(.*)<.*class="hight_newsapo">(.*)<#imsU';
    preg_match_all($pattern, $content, $data);
    $result  = [];
    foreach($data as $key => $value) {
       $result[$key]['image'] = $data[1][$key];
       $result[$key]['link'] =  'https://tuoitre.vn'.$data[2][$key];
       $result[$key]['title'] = trim($data[3][$key]);
       $result[$key]['description'] = $data[4][$key];
    }

    echo '<pre>';
    print_r($result);
    echo '</pre>';
   
