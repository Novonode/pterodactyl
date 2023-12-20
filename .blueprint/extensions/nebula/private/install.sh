#!/bin/bash

if [[ $BLUEPRINT_DEVELOPER == true ]]; then 
  echo "[NEBULA] Installation script skipped as you are building Nebula with developer commands, not installing it."
  exit 1
fi

printf "\n"
s=0.1
a=0.2
b=0.4
c=0.6
d=0.8
r="\x1b[0m\x1b[35;1m"
w="\x1b[0m\x1b[37m"
wb="\x1b[0m\x1b[37;1m"

sleep $s;printf "\r\x1b[35;1m${r}_#### ### ### ########## ######."
sleep $s;printf "\r\x1b[35;1m${w}T${wb}${r}_### ### ### ########## ######."
sleep $s;printf "\r\x1b[35;1m${w}T${wb}h${r}_## ### ### ########## ######."
sleep $s;printf "\r\x1b[35;1mT${w}h${wb}a${r}_# ### ### ########## ######."
sleep $s;printf "\r\x1b[35;1mTh${w}a${wb}n${r}_ ### ### ########## ######."
sleep $s;printf "\r\x1b[35;1mTha${w}n${wb}k ${r}_## ### ########## ######."
sleep $s;printf "\r\x1b[35;1mThan${w}k ${wb}y${r}_# ### ########## ######."
sleep $s;printf "\r\x1b[35;1mThank${w} y${wb}o${r}_ ### ########## ######."
sleep $s;printf "\r\x1b[35;1mThank y${w}o${wb}u${r} ${r}_## ########## ######."
sleep $s;printf "\r\x1b[35;1mThank yo${w}u${r} f${r}_# ########## ######."
sleep $s;printf "\r\x1b[35;1mThank you fo${r}_ ########## ######."
sleep $s;printf "\r\x1b[35;1mThank you for ${r}_######### ######."
sleep $s;printf "\r\x1b[35;1mThank you for p${r}_######## ######."
sleep $s;printf "\r\x1b[35;1mThank you for pu${r}_####### ######."
sleep $s;printf "\r\x1b[35;1mThank you for pur${r}_###### ######."
sleep $s;printf "\r\x1b[35;1mThank you for purc${r}_##### ######."
sleep $s;printf "\r\x1b[35;1mThank you for purch${r}_#### ######."
sleep $s;printf "\r\x1b[35;1mThank you for purcha${r}_### ######."
sleep $s;printf "\r\x1b[35;1mThank you for purchas${r}_## ######."
sleep $s;printf "\r\x1b[35;1mThank you for purchasi${r}_# ######."
sleep $s;printf "\r\x1b[35;1mThank you for purchasin${r}_ ######."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing ${r}_#####."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing N${r}_####."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing Ne${r}_###."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing Neb${r}_##."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing Nebu${r}_#."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing Nebul${r}_."
sleep $s;printf "\r\x1b[35;1mThank you for purchasing Nebula."
sleep 1

echo -e "\n";sleep $a
echo -e  "\x1b[0m\x1b[35m  ,d88b.d88b, ";sleep $b
echo -e  "\x1b[0m\x1b[35m  88888888888 ";sleep $c
echo -e "\x1b[0m\x1b[35m  \`Y8888888Y' ";sleep $a
echo -e "\x1b[0m\x1b[35m    \`Y888Y'   ";sleep $a
echo -e "\x1b[0m\x1b[35m      \`Y'     ";sleep $d

echo -e "\n";sleep $c

echo -e "Nebula is \x1b[35;1mnot free software\x1b[0m\x1b[35m!";sleep $s
echo -e "Redistributing or downloading Nebula for free without written consent is considered \x1b[35;1mpiracy\x1b[0m\x1b[35m and is \x1b[35;1millegal\x1b[0m\x1b[35m in most states and countries.";sleep $s 
echo ""
printf "\x1b[0m\x1b[35;3m(..)\x1b[0m\x1b[35m";sleep 2.5;
printf "\r\x1b[0m\x1b[35;1;3m(press enter to continue)\x1b[0m\x1b[35m";read r

echo -e "\n";sleep $b

echo -e "Questions need \x1b[35;1manswers\x1b[0m\x1b[35m!";sleep $s
echo -e "Feel free to contact me when you experience problems, have any concerns or need help. Find my contact information on \x1b[35;1mprpl.wtf\x1b[0m";sleep $s
echo ""
printf "\x1b[0m\x1b[35;3m(..)\x1b[0m\x1b[35m";sleep 2.5;
printf "\r\x1b[0m\x1b[35;1;3m(press enter to continue)\x1b[0m\x1b[35m";read r