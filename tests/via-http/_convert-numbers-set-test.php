<?php
/** 
 * A set of large numbers for test.
 */


// to prevent error, more than 2 billion (2พันล้าน) for 32 bit must be string and 9 quintillion (9ล้านล้านล้าน) for 64 bit.
$numbers = array(
    -9210000000, '-1000000', '-100000', '-10000', -12, '-0.1234',
    '+5.45',
    0,
    0.123456789, 0.05, 0.2, '0.20', 0.23, 0.202, 0.99, 0.2102,
    '0212', '00213',
    '1.00', 324.50, '324.50',
    1, 5, 10, 11, 12, 13, 20, 21, 30, 33,
    100, 101, 1000, 1001, 1010, 1011, 1012, 1013, 1100,
    10000, 10001, 10010, 10011, 12000, 100000, 100001, 100010, 100011, 100012, 100013, 111111,
    1234567, 87654321, 987654321, 1987654321, 
    '12345678912', 
    '123456789123', 
    '5554321987321',
    '100000000000000',// ร้อยล้านล้าน
    '100000000000000000000',
    '10000000000000000000000000', '100000000000000000000000000',
    '1000000000000000000000000000', '10000000000000000000000000000', '100000000000000000000000000000',
    '1000000000000000000000000000000',
    '1000000000000000000000000000000000',
    '10000000000000000000000000000000000',
    '100000000000000000000000000000000000',
    '1000000000000000000000000000000000000',
);