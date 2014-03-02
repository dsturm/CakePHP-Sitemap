<?php
/**
 * All Sitemap plugin tests
 */
class AllSitemapTest extends CakeTestCase {

/**
 * Suite define the tests for this plugin
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Sitemap test');

		$path = CakePlugin::path('Sitemap') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}

}
