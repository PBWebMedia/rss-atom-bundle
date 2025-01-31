<?php

namespace Debril\RssAtomBundle\Provider;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-25 at 23:47:50.
 */
class MockProviderTest extends TestCase
{
    /**
     * @var MockProvider
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new MockProvider();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Debril\RssAtomBundle\Provider\MockProvider::getFeed
     */
    public function testGetContent()
    {
        $request = new Request(['id' => 'some-id']);
        $feed = $this->object->getFeed($request);

        $this->assertInstanceOf('FeedIo\FeedInterface', $feed);
    }

    /**
     * @covers Debril\RssAtomBundle\Provider\MockProvider::getFeed
     * @expectedException \Debril\RssAtomBundle\Exception\FeedException\FeedNotFoundException
     */
    public function testGet404()
    {
        $request = new Request(['id' => 'not-found']);
        $feed = $this->object->getFeed($request);

        $this->object->getFeed($request);
    }
}
