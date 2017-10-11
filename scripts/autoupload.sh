#!/bin/bash

basedir=$HOME/collect/share/
watch_dirs="img wallpaper"
#declare -A files

cp=scp
dist=linode:/home/admin/web/pureblog/static/share/
url=http://mrsu.me/static/share/

if [ -f ${bashdir}run.pid ] && kill -0 `cat ${basedir}run.pid` 2>/dev/null; then
    echo "进程已经启动"
    exit 1
fi
echo $$ > ${basedir}run.pid

function upload_file() {
    local dir=$1
    local file=$2
    local path="$dir$file"
    local retry=0

    echo "copy $path"
    md5=`md5sum $path | cut -d ' ' -f 1`
    fileurl="$url$path"
    $cp "$path" "$dist$dir"
    echo `date '+%Y-%m-%d %H:%M:%S'` $fileurl >> urls.txt
}

cd $basedir
inotifywait -mq -e create,move $watch_dirs 2>/dev/null | while read dir event file; do
    if echo $event | grep -i "create\|moved_to" > /dev/null; then
        upload_file $dir $file &
    fi
done
