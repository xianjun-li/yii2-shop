<?php

use yii\db\Schema;
use yii\db\Migration;

class m141205_215425_create_shop_tables_with_foreignkeys extends Migration
{
    public function safeUp()
    {
        $this->createTable('eav_category',[
            'id'=>'pk',
            'title'=>Schema::TYPE_STRING. ' NOT NULL',
        ]);

        $this->createTable('eav_type',[
            'id'=>'pk',
            'name'=>Schema::TYPE_STRING. ' NOT NULL',
        ]);


        $this->createTable('eav_product',[
            'id'=>'pk',
            'sku'=>Schema::TYPE_STRING. ' NOT NULL',
            'title'=>Schema::TYPE_STRING. ' NOT NULL',
            'price'=>Schema::TYPE_DECIMAL,
            'category_id'=>Schema::TYPE_INTEGER,
            'type_id'=>Schema::TYPE_INTEGER,
        ]);


        $this->addForeignKey('FK_product_category','eav_product','category_id','eav_category','id','CASCADE','CASCADE');
        $this->addForeignKey('FK_product_type','eav_product','type_id','eav_type','id','CASCADE','CASCADE');



        $this->createTable('eav_enumgroup',[
            'id'=>'pk',
            'name'=>Schema::TYPE_STRING. ' NOT NULL',
        ]);

        $this->createTable('eav_enumvalue',[
            'id'=>'pk',
            'value'=>Schema::TYPE_STRING. ' NOT NULL',
        ]);

        $this->createTable('eav_enumgroup_value',[
            'id'=>'pk',
            'enumgroup_id'=>Schema::TYPE_INTEGER,
            'enumvalue_id'=>Schema::TYPE_INTEGER,
        ]);


        $this->createTable('eav_attribute',[
            'id'=>'pk',
            'title'=>Schema::TYPE_STRING. ' NOT NULL',
            'slug'=>Schema::TYPE_STRING. ' NOT NULL',
            'type_id'=>Schema::TYPE_INTEGER,
            'datatype'=>Schema::TYPE_STRING,
            'enum_group_id'=>Schema::TYPE_INTEGER,

        ]);

        $this->addForeignKey('FK_attribute_type','eav_attribute','type_id','eav_type','id','CASCADE','CASCADE');
        $this->addForeignKey('FK_attribute_enumgroup','eav_attribute','enum_group_id','eav_enumgroup','id','CASCADE','CASCADE');

        $this->createTable('eav_attribute_value',[
            'id'=>'pk',
            'product_id'=>Schema::TYPE_INTEGER,
            'attribute_id'=>Schema::TYPE_INTEGER,
            'value_text'=>Schema::TYPE_TEXT,
            'value_float'=>Schema::TYPE_FLOAT,
            'value_int'=>Schema::TYPE_INTEGER,
            'value_date'=>Schema::TYPE_DATETIME,
            'value_bool'=>Schema::TYPE_BOOLEAN,
            'value_enum_id'=>Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('FK_attribute_value_product','eav_attribute_value','product_id','eav_product','id','CASCADE','CASCADE');
        $this->addForeignKey('FK_attribute_value_attribute','eav_attribute_value','attribute_id','eav_attribute','id','CASCADE','CASCADE');

    }


    public function safeDown()
    {
        $this->dropForeignKey('FK_product_category','eav_product');
        $this->dropForeignKey('FK_product_type','eav_product');

        $this->dropForeignKey('FK_attribute_type','eav_attribute');
        $this->dropForeignKey('FK_attribute_enumgroup','eav_attribute');

        $this->dropForeignKey('FK_attribute_value_product','eav_attribute_value');
        $this->dropForeignKey('FK_attribute_value_attribute','eav_attribute_value');

        $this->dropTable('eav_category');
        $this->dropTable('eav_type');
        $this->dropTable('eav_product');

        $this->dropTable('eav_enumgroup');
        $this->dropTable('eav_enumvalue');
        $this->dropTable('eav_enumgroup_value');

        $this->dropTable('eav_attribute');
        $this->dropTable('eav_attribute_value');

    }
}
