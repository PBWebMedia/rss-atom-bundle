<?php

namespace Debril\RssAtomBundle\Protocol\Parser;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-26 at 23:48:58.
 */
class ItemTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Item
     */
    protected $object;

    const title = "Hello World";
    const id = 1;
    const link = 'http://example.com/rss';
    const summary = 'Lorem Ipsum...';
    const description = 'a description';
    const author = 'Contributor';
    const comments = 'http://linktothecomments.com';
    const contentType = 'text';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Item();

        $this->object->setTitle(self::title);
        $this->object->setPublicId(self::id);
        $this->object->setLink(self::link);
        $this->object->setSummary(self::summary);
        $this->object->setUpdated(new \DateTime());
        $this->object->setDescription(self::description);
        $this->object->setAuthor(self::author);
        $this->object->setComment(self::comments);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getTitle
     * @todo   Implement testGetTitle().
     */
    public function testGetTitle()
    {
        $this->assertEquals(self::title, $this->object->getTitle());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setTitle
     * @todo   Implement testSetTitle().
     */
    public function testSetTitle()
    {
        $newTitle = "A brand new title";

        $this->object->setTitle($newTitle);
        $this->assertEquals($newTitle, $this->object->getTitle());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getSummary
     * @todo   Implement testGetSummary().
     */
    public function testGetSummary()
    {
        $this->assertEquals(self::summary, $this->object->getSummary());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setSummary
     * @todo   Implement testSetSummary().
     */
    public function testSetSummary()
    {
        $newSummary = 'a brand new summary';

        $this->object->setSummary($newSummary);
        $this->assertEquals($newSummary, $this->object->getSummary());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getUpdated
     * @todo   Implement testGetUpdated().
     */
    public function testGetUpdated()
    {
        $this->assertInstanceOf("\DateTime", $this->object->getUpdated());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setUpdated
     * @todo   Implement testSetUpdated().
     */
    public function testSetUpdated()
    {
        $date = \DateTime::createFromFormat('j-M-Y', '15-Feb-2013');

        $this->object->setUpdated($date);

        $this->assertEquals($date, $this->object->getUpdated());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getLink
     */
    public function testGetLink()
    {
        $this->assertEquals(self::link, $this->object->getLink());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setLink
     */
    public function testSetLink()
    {
        $newLink = 'http://example.com/atom';

        $this->object->setLink($newLink);

        $this->assertEquals($newLink, $this->object->getLink());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getDescription
     */
    public function testGetDescription()
    {
        $this->assertEquals(self::description, $this->object->getDescription());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setDescription
     */
    public function testSetDescription()
    {
        $newDescription = 'A brand new description';

        $this->object->setDescription($newDescription);

        $this->assertEquals($newDescription, $this->object->getDescription());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getAuthor
     */
    public function testGetAuthor()
    {
        $this->assertEquals(self::author, $this->object->getAuthor());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setAuthor
     */
    public function testSetAuthor()
    {
        $newAuthor = 'New Contributor';

        $this->object->setAuthor($newAuthor);

        $this->assertEquals($newAuthor, $this->object->getAuthor());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getComment
     */
    public function testGetComment()
    {
        $this->assertEquals(self::comments, $this->object->getComment());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setComment
     */
    public function testSetComment()
    {
        $newComment = 'http://newlinktothecomments.net';

        $this->object->setComment($newComment);

        $this->assertEquals($newComment, $this->object->getComment());
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::setPublicId
     * @covers Debril\RssAtomBundle\Protocol\Parser\Item::getPublicId
     */
    public function testSetPublicId()
    {
        $id = uniqid();
        $this->object->setPublicId($id);

        $this->assertEquals($id, $this->object->getPublicId());
    }

    public function testAddMedia()
    {
        $media = new Media;
        $media->setType('audio/mpeg');
        
        $this->object->addMedia($media);
        $this->assertAttributeContainsOnly($media, 'medias', $this->object);
    }
    
    public function testGetMedias()
    {
        $this->object->addMedia(new Media);
        $iterator = $this->object->getMedias();
        
        $this->assertInstanceOf('\ArrayIterator', $iterator);
        $count = 0;
        
        foreach ( $iterator as $media ) {
            $count++;
            $this->assertInstanceOf('\Debril\RssAtomBundle\Protocol\Parser\Media', $media);
        }
        
        $this->assertEquals(1, $count);
    }

}
