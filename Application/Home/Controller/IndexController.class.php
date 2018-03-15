<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

       }

    /*
     * 连接多个数据库
     */
    public function showUser(){
        echo '默认的数据库数据：';
        $info = M('s_advise')->select();
        dump($info);
        echo "<br> Friends数据库的数据：";
        $user = M()->db(1,"DB_CONFIG1")->table("user_info")->find();
        dump($user);

        echo "<br> Friends数据库的数据：";
        $user2 = M()->db(2,'DB_CONFIG2')->table("s_goods")->select();
        dump($user2);

        echo "你好";
    }
}