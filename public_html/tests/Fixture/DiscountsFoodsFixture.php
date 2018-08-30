<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiscountsFoodsFixture
 *
 */
class DiscountsFoodsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'food_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discounts_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_discounts' => ['type' => 'index', 'columns' => ['discounts_id'], 'length' => []],
            'FK_discounts_foods' => ['type' => 'index', 'columns' => ['food_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_discounts' => ['type' => 'foreign', 'columns' => ['discounts_id'], 'references' => ['discounts', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'FK_discounts_foods' => ['type' => 'foreign', 'columns' => ['food_id'], 'references' => ['foods', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'food_id' => 1,
            'discounts_id' => 1,
            'created' => '2018-06-01 03:22:57',
            'modified' => '2018-06-01 03:22:57'
        ],
    ];
}
