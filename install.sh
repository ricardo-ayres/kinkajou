#!/bin/bash
WP_THEMES=/var/www/e00m/wp-content/themes

case $(hostname) in
    e00m)
        DEST=$WP_THEMES
        ;;
    *)
        DEST=e00m.duckdns.org:$WP_THEMES
        ;;
esac

pushd ..
rsync -rv --exclude '.git' --exclude 'install.sh' kinkajou $DEST
popd
