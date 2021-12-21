<?php

/**
 * BaseEmployeeEducation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                $id                          Type: integer, primary key
 * @property int                $empNumber                   Type: integer
 * @property int                $educationId                 Type: integer
 * @property string             $institute                   Type: string(100)
 * @property string             $major                       Type: string(100)
 * @property float              $year                        Type: decimal(4)
 * @property string             $score                       Type: string(25)
 * @property string             $startDate                   Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @property string             $endDate                     Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @property Employee           $Employee                    
 * @property Education          $Education                   
 *  
 * @method int                  getId()                      Type: integer, primary key
 * @method int                  getEmpnumber()               Type: integer
 * @method int                  getEducationid()             Type: integer
 * @method string               getInstitute()               Type: string(100)
 * @method string               getMajor()                   Type: string(100)
 * @method float                getYear()                    Type: decimal(4)
 * @method string               getScore()                   Type: string(25)
 * @method string               getStartdate()               Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @method string               getEnddate()                 Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @method Employee             getEmployee()                
 * @method Education            getEducation()               
 *  
 * @method EmployeeEducation    setId(int $val)              Type: integer, primary key
 * @method EmployeeEducation    setEmpnumber(int $val)       Type: integer
 * @method EmployeeEducation    setEducationid(int $val)     Type: integer
 * @method EmployeeEducation    setInstitute(string $val)    Type: string(100)
 * @method EmployeeEducation    setMajor(string $val)        Type: string(100)
 * @method EmployeeEducation    setYear(float $val)          Type: decimal(4)
 * @method EmployeeEducation    setScore(string $val)        Type: string(25)
 * @method EmployeeEducation    setStartdate(string $val)    Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @method EmployeeEducation    setEnddate(string $val)      Type: date, Date in ISO-8601 format (YYYY-MM-DD)
 * @method EmployeeEducation    setEmployee(Employee $val)   
 * @method EmployeeEducation    setEducation(Education $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmployeeEducation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_education');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('emp_number as empNumber', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('education_id as educationId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('institute', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('major', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('year', 'decimal', 4, array(
             'type' => 'decimal',
             'length' => 4,
             ));
        $this->hasColumn('score', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('start_date as startDate', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('end_date as endDate', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Employee', array(
             'local' => 'empNumber',
             'foreign' => 'empNumber'));

        $this->hasOne('Education', array(
             'local' => 'educationId',
             'foreign' => 'id'));
    }
}