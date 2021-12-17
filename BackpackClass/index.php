<?php


class Backpack
{
    // Properties
    public $colour;
    public $size;
    public $items = [];
    public $open = false;

    // methods
    function set_colour($colour)
    {

        $this->colour = $colour;
    }
    function set_size($size)
    {
        $this->size = $size;
    }
    function openBag()
    {
        $this->open = true;
        print_r("Bag has been opened! ");
    }
    function closeBag()
    {
        $this->open = false;
        print_r("Bag has been closed! ");
    }
    function putin($item)
    {
        if ($this->open == false) {
            print_r("Sir you can't put anything into a closed bag. ");
        } else {
            array_push($this->items, $item);
            print_r($item . " has been added to your bag. ");
        }
    }
    function takeout($item)
    {
        if ($this->open == false) {
            print_r("Sir you can't take anything out of a closed bag. ");
        } else {
            if (in_array($item, $this->items)) {
                $this->items = array_diff($this->items, array($item));
                print_r($item . " has been removed from your bag. ");
            }
        }
    }
}


$bagOne = new Backpack;
$bagOne->set_colour("blue");
$bagOne->set_size("small");

$bagTwo = new Backpack;
$bagTwo->set_colour("red");
$bagTwo->set_size("medium");

$bagThree = new Backpack;
$bagThree->set_colour("green");
$bagThree->set_size("large");

$bagTwo->openBag();
$bagTwo->putin("Lunch");
$bagTwo->putin("Jacket");
$bagTwo->closeBag();
$bagTwo->openBag();
$bagTwo->takeout("Jacket");
$bagTwo->closeBag();

?>
