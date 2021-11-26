<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m211126_145657_create_status_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
          if ($this->db->driverName === 'mysql') {
              $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
          }

          $this->createTable('{{%status}}', [
              'id' => Schema::TYPE_PK,
              'message' => Schema::TYPE_TEXT.' NOT NULL DEFAULT ""',
              'permissions' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
              'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
              'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
          ], $tableOptions);
    }

    public function down()
    {
        echo "m150804_035107_create_status_table cannot be reverted.\n";

        return false;
    }
}
