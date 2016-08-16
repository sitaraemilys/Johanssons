<?php

###################################################################
#1. How would you call revertString function to revert your string?
###################################################################

class Test
{
    public function revertString($string)
    {
        return strrev($string);
    }

    revertString("Hello World");
}

###########################################
#2. How would you return an array of items?
###########################################

class Test
{
    public function returnArray($arguments)
    {
      $array=array($arguments);
      echo $array;
    }

}

############################################################################################
#2. How would you return all products from the DB and prefix a string to each product title?
############################################################################################

class Test
{
    public function yourCodeGoesHere()
    {
        $db = Core_Database_Connection::getInstance(Core_Database_Connection::DB_DRIVER_MYSQL);
        $db->connect();

        $query = "SELECT title FROM products WHERE published = '1'";
        $db->query($query);
        $db->disconnect();

        // Display your code here
    }

}
