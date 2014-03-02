<?php
App::uses('SitemapBehavior', 'Sitemap.Model/Behavior');

/**
 * SitemapBehavior Test Case
 *
 */
class SitemapBehaviorTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sitemap = new SitemapBehavior();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sitemap);

		parent::tearDown();
	}

/**
 * testBuildUrl method
 *
 * @return void
 */
	public function testBuildUrl() {
		$this->markTestIncomplete("testBuildUrl incomplete");
	}

/**
 * testGenerateSitemapData method
 *
 * @return void
 */
	public function testGenerateSitemapData() {
		$this->markTestIncomplete("testGenerateSitemapData incomplete");
	}

}
