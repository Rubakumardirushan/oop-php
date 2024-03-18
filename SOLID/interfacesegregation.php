<?php
interface swim{
    public function swim();
}

interface fly{
    public function fly();
}
interface walk{
    public function walk();
}
class Bird implements fly,walk{
    public function fly(){
        echo "Bird can fly".PHP_EOL;
    }
    public function walk(){
        echo "Bird can walk".PHP_EOL;
    }
}
// this is a good example of interface segregation principle because the bird class has to implement the fly and walk method
class Duck implements fly,walk,swim{
    public function fly(){
        echo "Duck can fly".PHP_EOL;
    }
    public function walk(){
        echo "Duck can walk".PHP_EOL;
    }
    public function swim(){
        echo "Duck can swim".PHP_EOL;
    }
}
// this is a good example of interface segregation principle because the bird class has to implement the fly and walk method and the duck class has to implement the fly,walk and swim method
class lion implements walk ,swim,fly{
    public function walk(){
        echo "Lion can walk".PHP_EOL;
    }
    public function swim(){
        echo "Lion can swim".PHP_EOL;
    }
    public function fly(){
        echo "Lion can fly".PHP_EOL;
    }
}
// this lion class violates the interface segregation principle because it has to implement the swim and fly method which is not necessary for the lion class

$bird= new Bird();
$bird->fly();
$bird->walk();
$duck= new Duck();
$duck->fly();
$duck->walk();
$duck->swim();
$lion= new lion();
$lion->walk();// this will work
$lion->swim();// this will give an error because the lion class does not have the swim method
$lion->fly();// this will give an error because the lion class does not have the fly method


?>