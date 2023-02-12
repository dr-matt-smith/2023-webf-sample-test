<?php
namespace TudublinTest;

use Tudublin\ShoppingList;
use PHPUnit\Framework\TestCase;

class Type4_MainLogicTest extends TestCase
{

    //--------------------------------------------
    // type 4 tests = TYPE_4_MainLogic
    //--------------------------------------------

    public function test_13_TYPE_4_MainLogic_ItemAddedToListWhenValidItemName()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $myList->addToList('apples');
        $expectedResult = [
            'bread', 'eggs', 'milk', 'apples'
        ];

        // Act
        $result = $myList->getList();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

}
