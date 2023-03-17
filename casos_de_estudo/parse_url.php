<?php

$url = 'https://www.google.com';
print_r(parse_url($url));
echo '<br>';

$url2 = 'https://www.google.com/users/';
print_r(parse_url($url2));
echo '<br>';

$url3 = 'https://www.google.com/users/?userId=1989';
print_r(parse_url($url3));
echo '<br>';