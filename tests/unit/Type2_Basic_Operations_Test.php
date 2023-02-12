<?php
namespace TudublinTest;

use Tudublin\ShoppingList;
use PHPUnit\Framework\TestCase;

class Type2_BasicOperationsTest extends TestCase
{

    //--------------------------------------------
    // type 2 tests = TYPE_2_BasicOperations
    //--------------------------------------------

    public function test_06_TYPE_2_BasicOperations_ListEmptyAfterAllItemsRemoved()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $myList->removeAllItems();
        $expectedResult = [];

        // Act
        $result = $myList->getList();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_07_TYPE_2_BasicOperations_GetDefaultFirstItem()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 'bread';

        // Act
        $result = $myList->getFirstItem();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
