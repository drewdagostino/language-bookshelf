<?php
/* Widget Test cases generated on: 2012-01-24 12:14:28 : 1327425268*/
App::uses('Widget', 'Model');

/**
 * Widget Test Case
 *
 */
class WidgetTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.widget');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Widget = ClassRegistry::init('Widget');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Widget);

		parent::tearDown();
	}

}
