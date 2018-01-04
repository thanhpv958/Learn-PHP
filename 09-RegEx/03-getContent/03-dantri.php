<?php
    $content = file_get_contents('http://dantri.com.vn/the-thao.htm');
    $pattern = '#class="mt3 clearfix eplcheck">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">(.*)</div>#imsU';
    preg_match_all($pattern,$content,$data);
    $result = [];
    foreach($data as $key => $value) {
       $result[$key]['image'] = $data[1][$key];
       $result[$key]['title'] = $data[2][$key];
       $result[$key]['description'] = $data[3][$key];
    }
    foreach($result as $key => $value) {
        echo '<pre>';
        print_r($value['image']);
        echo '</pre>';
    }
   
    