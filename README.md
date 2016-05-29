symfony2_stock_AL
=================

A Symfony 2.8 project, Doctrine, and twig.


The project is composed of 3 Entities:

* Product : A product is related to its unique inventory
* Inventory : An inventory is related to a single product and multiples Inventory Operations
* InventoryOperation : An Inventory operation is an action of adding or removing products from the inventory

the Business logic is located in: 
* src/AppBundle/

The views are located in:
* app/Resources/views/

The static files are located in:
* web/

The Mysql dump is: symfony_inventory.sql


The Inventory price of a product is updated based on the price of the last products added in the inventory.


Since it's a simple application I made the Delete actions over GET requests.


I have still put quite a lot of code in the controllers. It seems that Managers can be used and then transform the Manager as a Service but I kept it this way since it is a small application.


# Instructions:

- First, Click on "Product" in the Top bar menu -> click on "Add new Product" -> Create a new Product [By default an inventory of a product is quantity 0 and price 0]
- To Add inventory for a product click on "IN"
- To Remove inventory for a product click on "OUT"
- The list of Operation "IN" and "OUT" are under the Operation Section.
