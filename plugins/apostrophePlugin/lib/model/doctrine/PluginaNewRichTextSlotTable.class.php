<?php
/**
 * 
 * PluginaNewRichTextSlotTable
 * This class has been auto-generated by the Doctrine ORM Framework
 * @package    apostrophePlugin
 * @subpackage    model
 * @author     P'unk Avenue <apostrophe@punkave.com>
 */
class PluginaNewRichTextSlotTable extends aSlotTable
{

  /**
   * 
   * Returns an instance of this class.
   * @return object PluginaNewRichTextSlotTable
   */
  public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginaNewRichTextSlot');
    }
}