FROM="./"
TO="/home/r7774329/public_html/hirofumi090.com"

lftp <<EOF
open -u 'hirotake@hirotakeakesi.work','Takesue090!' "www1002.onamae.ne.jp"

set ssl:check-hostname false
mirror \
--dry-run \
--reverse \
$FROM \
$TO \
exit \
EOF
