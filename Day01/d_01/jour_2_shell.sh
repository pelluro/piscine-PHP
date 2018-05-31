#!/usr/bin/env bash

#*------------------------------------*\
#    ex 00
#*------------------------------------*/
cd ../ex00;
a=`./hw.php`
res=`echo -e "Hello Word\n"`
if  [[ "$a" !=  "$res" ]]
then
        echo `ls`
fi
cd ..


#*------------------------------------*\
#    ex 01
#*------------------------------------*/
cd ex01;
a=`./mlx.php`
b=`./mlx.php | wc -c`
c=`cat mlx.php | wc -c`
res=`echo -e "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX\n"`
if  [[ "$a" !=  "$res" ]] || ((b != 1001)) || ((c >= 99))
then
        echo `ls`
fi
cd ..

##*------------------------------------*\
##    ex 02
##*------------------------------------*/
#cd ex02;
##a=`./oddeven.php`
#./oddeven.php << F
#42
#23
#23.
#23..
#23aa
#adsf
#aa55
#0
#F
#cd ..

##*------------------------------------*\
##    ex 03
##*------------------------------------*/
#cd d_01
#echo ;echo "ex03 ============================="
#php test_1.php | cat -e
#cd ..
#

##*------------------------------------*\
##    ex 04
##*------------------------------------*/
#
#cd ex04
#echo ;echo "ex04 ============================="
#php aff_param.php | cat -e
#php aff_param.php 55 22 | cat -e
#php aff_param.php 55 22 a g aann  dafsd gqerg w qjfq eqwfqwenvy qlklqwjr hqwhr cxqew ewh cqewcr teqrkhchrtecqekwhrx qwliukcr hqwilu | cat -e
#php aff_param.php super super super | cat -e
#php aff_param.php "super super super" | cat -e
#cd ..


##*------------------------------------*\
##    ex 05
##*------------------------------------*/
#cd ex05
#echo ;echo "ex05 ============================="
#php epur_str.php | cat -e
#php epur_str.php "    55    " | cat -e
#php epur_str.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e
#php epur_str.php "    " | cat -e
#php epur_str.php "  a a " | cat -e
#cd ..


##*------------------------------------*\
##    ex 06
##*------------------------------------*/
#cd ex06
#echo ;echo "ex06 ============================="
#php ssap.php | cat -e
#echo ++++++++++
#php ssap.php "    55    " | cat -e
#echo ++++++++++
#php ssap.php "    55 dsfadsf  asdf     adsf      adsfasdf   ads  " | cat -e
#echo ++++++++++
#php ssap.php "    " | cat -e
#echo ++++++++++
#php ssap.php "  a a " | cat -e
#echo ++++++++++
#php ssap.php  foo bar "yo man" "A moi compte, deux mots" Xibul | cat -e
#
#cd ..

##*------------------------------------*\
##    ex 07
##*------------------------------------*/
#cd ex07
#echo ;echo "ex07 ============================="
#php rostring.php  | cat -e
#php rostring.php "    2   1  " | cat -e
#php rostring.php "    3 1  2  " | cat -e
#php rostring.php "  1  " | cat -e
#php rostring.php "  2 dsfh adsfhjaksdf              jdjklsjkadfs          ioerwfioefrwj        jadsjkfl      1  " | cat -e

#cd ..

##*------------------------------------*\
##    ex 08
##*------------------------------------*/
#cd d_01
#echo ;echo "ex08 ============================="
#php test_2.php
#cd ..
#
#
##*------------------------------------*\
##    ex 09
##*------------------------------------*/
#cd ex09
#echo ;echo "ex09 ============================="
##php ssap2.php p toto tutu 4234 "_hop XXX" '##' "1948372 AhAhAh"
#php ssap2.php
#echo
#php ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2 test test super super
#echo
#php ssap2.php %D a3 a1 "4?  d" _4 b- a00 00+ ab 420 0A2 test 0 00 00000 00 test super super
#echo
#php ssap2.php 00 00 0000 0
#echo
#php ssap2.php "0000 00000 00 0 00000 00 0 00 0000 000 0 0"
#echo
#php ssap2.php %D a3 a1 "4?  d" _4 a+ ab 420 0A2
#cd ..


#*------------------------------------*\
#    ex 10
#*------------------------------------*/
cd ex10
echo ;echo "ex10 ============================="
php do_op.php
php do_op.php 4
php do_op.php 4 8
php do_op.php 21 + 21
php do_op.php 43 - 1
php do_op.php 1764 / 42
php do_op.php 1 "*" 42
php do_op.php 1807 % 42
cd ..

#*------------------------------------*\
#    ex 11
#*------------------------------------*/
cd ex11
echo ;echo "ex11 ============================="

php do_op.php
php do_op.php 4
php do_op.php 4 8
php do_op.php 21 + 21
php do_op.php 43 - 1
php do_op.php 1764 / 42
php do_op.php 1 "*" 42
php do_op.php 1807 % 42

cd ..