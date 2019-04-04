<?php
/**
 * Created by PhpStorm.
 * User: maohaoting
 * Date: 2019/4/4
 * Time: 13:21
 */
$time=time();
$year=date('Y',$time);
$month=date('m',$time);
$day=date('d',$time);

class hello {
    public function index() {
        return 'hello world!';
    }
}
$hello = new hello();
echo $hello->index();