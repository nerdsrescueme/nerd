<?php
// This class was automatically generated by build task
// You can change it manually, but it will be overwritten on next build
// @codingStandardsIgnoreFile

use Codeception\Maybe;
use Codeception\Module\Unit;
use Codeception\Module\Filesystem;

/**
 * Inherited methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void amTesting($method)
 * @method void amTestingMethod($method)
 * @method void testMethod($signature)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($role)
*/

class IntegratorGuy extends \Codeception\AbstractGuy
{
    
    /**
     * Registers a class/method which will be tested.
     * When you run 'execute' this method will be invoked.
     * Please, note that it also updates the feature section of the scenario.
     *
     * For non-static methods:
     *
     * ``` php
     * <?php
     * $I->testMethod('ClassName.MethodName'); // I will need ClassName instance for this
     * ```
     *
     * For static methods:
     *
     * ``` php
     * <?php
     * $I->testMethod('ClassName::MethodName');
     * ```
     *
     * @param $signature
     * @see Unit::testMethod()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function testMethod($signature) {
        $this->scenario->action('testMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Adds a stub to the internal registry.
     * Use this command if you need to convert this stub to a mock.
     * Without adding the stub to registry you can't trace it's method invocations.
     *
     * @param $instance
     * @see Unit::haveFakeClass()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function haveFakeClass($instance) {
        $this->scenario->action('haveFakeClass', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Alias for haveFakeClass
     *
     * @alias haveFakeClass
     * @param $instance
     * @see Unit::haveStub()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function haveStub($instance) {
        $this->scenario->action('haveStub', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Execute The tested method on an object (a stub can be passed).
     * First argument is an object, the rest are supposed to be parameters passed to method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->wantTo('authenticate user');
     * $I->testMethod('User.authenticate');
     * $user = new User();
     * $I->executeTestedMethodOn($user, 'Davert','qwerty');
     * // This line $user->authenticate('Davert','qwerty') was called.
     * $I->seeResultEquals(true);
     * ?>
     * ```
     *
     * For static methods use 'executeTestedMethodWith'.
     *
     * @param $object
     * @see Unit::executeTestedMethodOn()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function executeTestedMethodOn($object) {
        $this->scenario->action('executeTestedMethodOn', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes the tested static method with parameters provided.
     *
     * ```
     * <?php
     * $I->testMethod('User::validateName');
     * $I->executeTestedMethodWith('davert',true);
     * // This line User::validate('davert', true); was called
     * ?>
     * ```
     * For a non-static method use 'executeTestedMethodOn'
     *
     * @param $params
     * @throws \Codeception\Exception\Module
     * @see Unit::executeTestedMethodWith()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function executeTestedMethodWith($params) {
        $this->scenario->action('executeTestedMethodWith', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes the method which is being tested.
     * If the method is not static, the class instance should be provided.
     *
     * If a method is static 'executeTestedWith' will be called.
     * If a method is not static 'executeTestedOn' will be called.
     * See those methods for the full reference
     *
     * @throws \InvalidArgumentException
     * @see Unit::executeTestedMethod()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function executeTestedMethod() {
        $this->scenario->action('executeTestedMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes a code block. The result of execution will be stored.
     * Parameter should be a valid Closure. The returned value can be checked with seeResult actions.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $user = new User();
     * $I->execute(function() use ($user) {
     *      $user->setName('Davert');
     *      return $user->getName();
     * });
     * $I->seeResultEquals('Davert');
     * ?>
     * ```
     *
     * You can use native PHPUnit asserts in the executed code. 
     * These can be either static methods of the 'PHPUnit_Framework_assert' class,
     * or functions taken from 'PHPUnit/Framework/Assert/Functions.php'. They start with 'assert_' prefix.
     * You should manually include this file, as these functions may conflict with functions in your code.
     *
     * Example:
     *
     * ``` php
     * <?php
     * require_once 'PHPUnit/Framework/Assert/Functions.php';
     *
     * $user = new User();
     * $I->execute(function() use ($user) {
     *      $user->setName('Davert');
     *      assertEquals('Davert', $user->getName());
     * });
     * ```
     *
     * @param \Closure $code
     * @see Unit::execute()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function execute($code) {
        $this->scenario->action('execute', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes a method of an object.
     * Additional parameters can be provided.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // to execute $user->getName()
     * $I->executeMethod($user,'getName');
     *
     * // to execute $user->setName('davert');
     * $I->executeMethod($user,'setName', 'davert');
     *
     * // or more parameters
     * $I->executeMethod($user, 'setNameAndAge', 'davert', '30');
     *
     * ?>
     * ```
     *
     * @param $object
     * @param $method
     * @see Unit::executeMethod()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function executeMethod($object, $method) {
        $this->scenario->action('executeMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Updates multiple properties of the selected object.
     * Can update even private and protected properties.
     * 
     * Properties to be updated and their values are passed in the second parameter as an array:
     * array('theProperty'     => 'some value',
     *      ('anotherProperty' => 'another value')
     *
     * @param $obj
     * @param array $values
     * @see Unit::changeProperties()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function changeProperties($obj, $values = null) {
        $this->scenario->action('changeProperties', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Updates a single property of the selected object
     * Can update even private and protected properties.
     *
     * @param $obj
     * @param $property
     * @param $value
     * @see Unit::changeProperty()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function changeProperty($obj, $property, $value) {
        $this->scenario->action('changeProperty', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     *
     * @see Unit::seeExceptionThrown()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeExceptionThrown($classname, $message = null) {
        $this->scenario->assertion('seeExceptionThrown', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that a method of a stub was invoked after the last execution.
     * Requires a stub as the first parameter, the method name as the second.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->testMethod('UserService.create');
     * $I->haveStub($user = Stub::make('Model\User'));*
     * $service = new UserService($user);
     * $I->executeTestedMethodOn($service);
     * // we expect $user->save was invoked.
     * $I->seeMethodInvoked($user, 'save');
     * ?>
     * ```
     *
     * This method dynamically creates a mock from a stub.
     *
     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodInvoked()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that a method of a stub was invoked *only once* after the last execution.
     * Requires a stub as the first parameter, a method name as the second.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Look for 'seeMethodInvoked' to see the example.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodInvokedOnce()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodInvokedOnce($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvokedOnce', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that a method of a stub *was not invoked* after the last execution.
     * Requires a stub as the first parameter, a method name as the second.
     * Optionally pass the arguments which are expected by the executed method.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodNotInvoked()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodNotInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodNotInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that a method of a stub was invoked *multiple times* after the last execution.
     * Requires a stub as the first parameter, a method name as the second and the expected number of executions.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Look for 'seeMethodInvoked' to see the example.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param $times
     * @param array $params
     * @see Unit::seeMethodInvokedMultipleTimes()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodInvokedMultipleTimes($mock, $method, $times, $params = null) {
        $this->scenario->assertion('seeMethodInvokedMultipleTimes', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Asserts that the last result from the tested method is equal to value
     *
     * @param $value
     * @see Unit::seeResultEquals()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeResultEquals($value) {
        $this->scenario->assertion('seeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     *
     * @see Unit::seeResultContains()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeResultContains($value) {
        $this->scenario->assertion('seeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the result of the last execution doesn't contain a value.
     *
     * @param $value
     * @see Unit::dontSeeResultContains()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeResultContains($value) {
        $this->scenario->action('dontSeeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the result of the last execution is not equal to a value.
     *
     * @param $value
     * @see Unit::dontSeeResultEquals()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeResultEquals($value) {
        $this->scenario->action('dontSeeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the result of the last execution is empty.
     * @see Unit::seeEmptyResult()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeEmptyResult() {
        $this->scenario->assertion('seeEmptyResult', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the result of the last execution is a specific type.
     * Either 'int', 'bool', 'string', 'array', 'float', 'null', 'resource', 'scalar' can be passed for simple types.
     * Otherwise the parameter must be a class and the result must be an instance of that class.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->execute(function() { return new User });
     * $I->seeResultIs('User');
     * ?>
     * ```
     *
     * @param $type
     * @see Unit::seeResultIs()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeResultIs($type) {
        $this->scenario->assertion('seeResultIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the property of an object equals the value provided.
     * Can check even protected or private properties.
     *
     * Bear in mind that testing non-public properties is not a good practice.
     * Use it only if you have no other way to test it.
     *
     * @param $object
     * @param $property
     * @param $value
     * @see Unit::seePropertyEquals()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seePropertyEquals($object, $property, $value) {
        $this->scenario->assertion('seePropertyEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that the property is a passed type.
     * Either 'int', 'bool', 'string', 'array', 'float', 'null', 'resource', 'scalar' can be passed for simple types.
     * Otherwise the parameter must be a class and the property must be an instance of that class.
     *
     * Bear in mind that testing non-public properties is not a good practice.
     * Use it only if you have no other way to test it.
     *
     * @param $object
     * @param $property
     * @param $type
     * @see Unit::seePropertyIs()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seePropertyIs($object, $property, $type) {
        $this->scenario->assertion('seePropertyIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes a method and checks that the result is equal to a value.
     * Good for testing values taken from getters.
     *
     * Example:
     *
     * ``` php
     * $I->testMethod('User.setName');
     * $user = new User();
     * $I->executeTestedMethodOn($user, 'davert');
     * $I->seeMethodReturns($user,'getName','davert');
     *
     * ```
     *     *
     * @param $object
     * @param $method
     * @param $value
     * @param array $params
     * @see Unit::seeMethodReturns()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes a method and checks that the result is NOT equal to a value.
     * Good for testing values taken from getters.
     *
     * Look for 'seeMethodReturns' for example.
     *
     * @param $object
     * @param $method
     * @param $value
     * @param array $params
     * @see Unit::seeMethodNotReturns()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeMethodNotReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodNotReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Enters a directory In local filesystem.
     * Project root directory is used by default
     *
     * @param $path
     * @see Filesystem::amInPath()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function amInPath($path) {
        $this->scenario->condition('amInPath', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Opens a file and stores it's content.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $filename
     * @see Filesystem::openFile()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function openFile($filename) {
        $this->scenario->action('openFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes a file
     *
     * ``` php
     * <?php
     * $I->deleteFile('composer.lock');
     * ?>
     * ```
     *
     * @param $filename
     * @see Filesystem::deleteFile()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteFile($filename) {
        $this->scenario->action('deleteFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes directory with all subdirectories
     *
     * ``` php
     * <?php
     * $I->deleteDir('vendor');
     * ?>
     * ```
     *
     * @param $dirname
     * @see Filesystem::deleteDir()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteDir($dirname) {
        $this->scenario->action('deleteDir', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Copies directory with all contents
     *
     * ``` php
     * <?php
     * $I->copyDir('vendor','old_vendor');
     * ?>
     * ```
     *
     * @param $src
     * @param $dst
     * @see Filesystem::copyDir()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function copyDir($src, $dst) {
        $this->scenario->action('copyDir', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see Filesystem::seeInThisFile()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInThisFile($text) {
        $this->scenario->assertion('seeInThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see Filesystem::dontSeeInThisFile()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInThisFile($text) {
        $this->scenario->action('dontSeeInThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes a file
     * @see Filesystem::deleteThisFile()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteThisFile() {
        $this->scenario->action('deleteThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param $filename
     * @param string $path
     * @see Filesystem::seeFileFound()
     *
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeFileFound($filename, $path = null) {
        $this->scenario->assertion('seeFileFound', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

