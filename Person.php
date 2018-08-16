<?php

/********抽象类 trait interface*************/
abstract class Animal{
    //动物抽象类
    //谁吃了什么
    abstract protected function eat($who, $food);
    abstract protected function move($who, $action);
    abstract protected function sleep($who);
    protected function look($who, $what){
        echo $who.'look'.$what;
        print("\r\n");
    }
}

trait Action{
    public function look(){
        echo 'I can look trait!!!!!!';
        print("\r\n");
    }

    public function drink(){
        echo 'I can drink trait!!!!!!';
        print("\r\n");
    }
}
//接口
interface Eat{
    public function sing($who, $songs);

    public function drink();
}


class Person extends Animal implements Eat{
    use Action;
    //必须实现抽象类中的所有抽象方法
    //必须实现接口中的所有方法
    //trait方法会覆盖抽象类中定义的非抽象方法or也可可以替类实现抽象类和接口中的方法
    protected function eat($who, $food){
        echo $who.'eat'.$food;
        print("\r\n");
    }

    protected function move($who, $action){
        echo $who.'move'.$action;
        print("\r\n");
    }

    public function sing($who, $songs){
        echo $who.'sing'.$songs;
        print("\r\n");
    }

    public function run($who){
        $this->eat($who, '苹果');
        $this->move($who, '健步如飞');
        $this->sing($who, '小星星');
        $this->look($who, '妹子');
        $this->drink();
    }
}

$app = new Person();
$app->run('小咩咩');
