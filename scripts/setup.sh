#!/bin/bash
set_color="\x1B"
default="${set_color}[39m"
green="${set_color}[92m"
yellow="${set_color}[93m"

echo -e "${green}Setting up!${default}";

echo -e "${yellow}Downloading latest version of WordPress${default}";
wget -P ./tmp https://wordpress.org/latest.zip;
unzip ./tmp/latest.zip -d ./tmp;

echo -e "${yellow}Copying WordPress to current directory${default}";
cp -R ./tmp/wordpress/. ./;
rm -rf ./tmp;

echo -e "${yellow}Creating wp-config.php${default}";
mv ./wp-config-sample.php ./wp-config.php;

echo -e "${green}Finished!${default}";
