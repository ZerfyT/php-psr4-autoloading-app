<?php

namespace Services;

use Services\MyInterface;

class MyClass implements MyInterface
{


    public function foo()
    {
        echo <<<'HTML'
        <h1>This is Foo</h1>
        HTML;
        // error_log('my-class');
        // throw new \Exception('foo');
    }

    public function heredocNowDoc()
    {
        echo <<<HTML
            <h1 style="color: red;">This is Heredoc Nowdoc</h1>
        HTML;
    }

    public function jsonEncodeAndDecode()
    {
        $stdOne = new Student('Nipun', 22);
        $stdOneJson = json_encode($stdOne);
        echo $stdOneJson;
        echo '<br>';
        echo gettype($stdOneJson);
        echo '<br>';

        // Associative Array
        $stdTwo = json_decode($stdOneJson, true);
        echo gettype($stdTwo);
        echo '<br>';
        echo $stdTwo['name'];
        echo '<br>';
        echo $stdTwo['age'];
        echo '<br>';

        // Object
        $stdThree = json_decode($stdOneJson);
        echo gettype($stdThree);
        echo '<br>';
        echo $stdThree->name;
        echo '<br>';
        echo $stdThree->age;
        echo '<br>';
        
        // Is Countable
        echo 'Is Countable: ' . is_countable($stdThree) . '<br>';
    }


    public function pickCard(Suit $suit)
    {
        switch ($suit) {
            case Suit::HEARTS:
                echo 'Heart';
                break;
            case Suit::DIAMONDS:
                echo 'Diamond';
                break;
            case Suit::CLUBS:
                echo 'Club';
                break;
            case Suit::SPADES:
                echo 'Spades';
                break;
            default:
                echo 'Unknown';
        }
    }

    public function neverReturn(): never
    {
        throw new \Exception('Never Return');
    }

}

class Student {

    
    public function __construct(public string $name, public int $age)
    {
        
    }
}

enum Suit {
    case HEARTS;
    case DIAMONDS;
    case CLUBS;
    case SPADES;
}