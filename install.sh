#!/bin/bash
WP_THEMES=/var/www/e00m/wp-content/themes

case $@ in
    *remote*)
        pushd ..
        rsync -rv kinkajou e00m.duckdns.org:$WP_THEMES
        popd
    ;;
    *)
        mkdir -pv $WP_THEMES/kinkajou
        cp -rv * $WP_THEMES/kinkajou/
    ;;
esac
