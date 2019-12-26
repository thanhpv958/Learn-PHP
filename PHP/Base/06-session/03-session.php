<?php
    session_start();
    session_unset();
    // $courses = [
    //     ['name' => 'Wordpress', 'time' => 120 ],
    //     ['name' => 'Drupal', 'time' => 100]
    // ];

    // $_SESSION['courses'] = $courses;

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    

    $_SESSION['func'] = '<?php
                            function checkNum($num) {
                                return ($num % 2 == 0) ? "So chan" : "So le";
                            }
                        ?>';
    

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    eval('?>' . $_SESSION['func']);

    echo checkNum(2);

