<?php

/**
 * BaseCurrencyType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                     $code                                         Type: integer(4), default "0"
 * @property string                                  $currency_id                                  Type: string(3) fixed-size, primary key
 * @property string                                  $currency_name                                Type: string(70)
 * @property Doctrine_Collection|PayGradeCurrency[]  $PayGradeCurrency                             
 * @property Doctrine_Collection|EmployeeSalary[]    $EmployeeSalary                               
 *  
 * @method int                                       getCode()                                     Type: integer(4), default "0"
 * @method string                                    getCurrencyId()                               Type: string(3) fixed-size, primary key
 * @method string                                    getCurrencyName()                             Type: string(70)
 * @method Doctrine_Collection|PayGradeCurrency[]    getPayGradeCurrency()                         
 * @method Doctrine_Collection|EmployeeSalary[]      getEmployeeSalary()                           
 *  
 * @method CurrencyType                              setCode(int $val)                             Type: integer(4), default "0"
 * @method CurrencyType                              setCurrencyId(string $val)                    Type: string(3) fixed-size, primary key
 * @method CurrencyType                              setCurrencyName(string $val)                  Type: string(70)
 * @method CurrencyType                              setPayGradeCurrency(Doctrine_Collection $val) 
 * @method CurrencyType                              setEmployeeSalary(Doctrine_Collection $val)   
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCurrencyType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_currency_type');
        $this->hasColumn('code', 'integer', 4, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('currency_id', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'primary' => true,
             'length' => 3,
             ));
        $this->hasColumn('currency_name', 'string', 70, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 70,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PayGradeCurrency', array(
             'local' => 'currency_id',
             'foreign' => 'currency_id'));

        $this->hasMany('EmployeeSalary', array(
             'local' => 'currency_id',
             'foreign' => 'currencyCode'));
    }
    
    
}
