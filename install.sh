#!/bin/bash
WP_THEMES=/var/lib/wordpress/wp-content/themes

mkdir -pv $WP_THEMES/kinkajou
cp -rv * $WP_THEMES/kinkajou/

