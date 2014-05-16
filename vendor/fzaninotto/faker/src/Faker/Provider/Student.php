<?php

namespace Faker\Provider;

class Student extends \Faker\Provider\Base
{
   protected static $formats = array(
        "{{lastName}} {{firstName}} {{middleName}}",
        "{{firstName}} {{middleName}} {{lastName}}"
    );

   protected static $firstName = array("Mark", "Adam", "Kelvin", "Martin", "Cedric", "Keanna", "Ivy");
   protected static $lastName = array("Clark", "Stewart", "Ligue", "Calcaben", "Indoyon", "Celada", "Cagoco");
   protected static $middleName = array("Smith", 'Williams');
   protected static $courseid = array('1', '2');

   public static function firstName() {
    return static::randomElement(static::$firstName);
   }

   public static function middleName() {
    return static::randomElement(static::$middleName);
   }

   public static function lastName() {
    return static::randomElement(static::$lastName);
   }

   public static function courseId() {
    return static::randomElement(static::$courseid);
   }
}
