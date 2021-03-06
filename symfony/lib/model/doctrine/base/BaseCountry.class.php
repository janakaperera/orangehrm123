<?php

/**
 * BaseCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string                          $cou_code                                      Type: string(2) fixed-size, primary key
 * @property string                          $name                                          Type: string(80)
 * @property string                          $cou_name                                      Type: string(80)
 * @property string                          $iso3                                          Type: string(3) fixed-size
 * @property int                             $numcode                                       Type: integer(2)
 * @property Doctrine_Collection|Location[]  $Location                                      
 * @property OperationalCountry              $OperationalCountry                            
 * @property Doctrine_Collection|Employee[]  $Employee                                      
 *  
 * @method string                            getCouCode()                                   Type: string(2) fixed-size, primary key
 * @method string                            getName()                                      Type: string(80)
 * @method string                            getCouName()                                   Type: string(80)
 * @method string                            getIso3()                                      Type: string(3) fixed-size
 * @method int                               getNumcode()                                   Type: integer(2)
 * @method Doctrine_Collection|Location[]    getLocation()                                  
 * @method OperationalCountry                getOperationalCountry()                        
 * @method Doctrine_Collection|Employee[]    getEmployee()                                  
 *  
 * @method Country                           setCouCode(string $val)                        Type: string(2) fixed-size, primary key
 * @method Country                           setName(string $val)                           Type: string(80)
 * @method Country                           setCouName(string $val)                        Type: string(80)
 * @method Country                           setIso3(string $val)                           Type: string(3) fixed-size
 * @method Country                           setNumcode(int $val)                           Type: integer(2)
 * @method Country                           setLocation(Doctrine_Collection $val)          
 * @method Country                           setOperationalCountry(OperationalCountry $val) 
 * @method Country                           setEmployee(Doctrine_Collection $val)          
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_country');
        $this->hasColumn('cou_code', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'primary' => true,
             'length' => 2,
             ));
        $this->hasColumn('name', 'string', 80, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 80,
             ));
        $this->hasColumn('cou_name', 'string', 80, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 80,
             ));
        $this->hasColumn('iso3', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'length' => 3,
             ));
        $this->hasColumn('numcode', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Location', array(
             'local' => 'cou_code',
             'foreign' => 'country_code'));

        $this->hasOne('OperationalCountry', array(
             'local' => 'cou_code',
             'foreign' => 'country_code'));

        $this->hasMany('Employee', array(
             'local' => 'cou_code',
             'foreign' => 'coun_code'));
    }
   
}
