#!/bin/bash

pushd ..
rm kinkajou.zip
7z -x@kinkajou/xclude a kinkajou.zip kinkajou
popd
