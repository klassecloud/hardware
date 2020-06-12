#!/bin/sh
mysql -u root -p <<EOF
DROP DATABASE devices;
EOF
