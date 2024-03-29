<?php

/**
 * BaseaSearchUsage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $document_id
 * @property integer $word_id
 * @property float $weight
 * @property aSearchDocument $Document
 * @property aSearchWord $Word
 * 
 * @method integer         getDocumentId()  Returns the current record's "document_id" value
 * @method integer         getWordId()      Returns the current record's "word_id" value
 * @method float           getWeight()      Returns the current record's "weight" value
 * @method aSearchDocument getDocument()    Returns the current record's "Document" value
 * @method aSearchWord     getWord()        Returns the current record's "Word" value
 * @method aSearchUsage    setDocumentId()  Sets the current record's "document_id" value
 * @method aSearchUsage    setWordId()      Sets the current record's "word_id" value
 * @method aSearchUsage    setWeight()      Sets the current record's "weight" value
 * @method aSearchUsage    setDocument()    Sets the current record's "Document" value
 * @method aSearchUsage    setWord()        Sets the current record's "Word" value
 * 
 * @package    pprl
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaSearchUsage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_search_usage');
        $this->hasColumn('document_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('word_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('weight', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aSearchDocument as Document', array(
             'local' => 'document_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('aSearchWord as Word', array(
             'local' => 'word_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}