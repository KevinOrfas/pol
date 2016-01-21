path=`dirname $0`
cd $path
if [ ! -d bower_components ];then
    bower install susy --save
fi
if [ ! -d node_modules ];then
    sudo npm install
fi
grunt
