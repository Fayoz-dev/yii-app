<?php

use yii\db\Migration;

/**
 * Class m240408_213615_init_shopping_db
 */
class m240408_213615_init_shopping_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $sql = "
     
CREATE TABLE `customer` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `address` text,
  `phone` varchar(255)
);

CREATE TABLE `category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `PID` int,
  `name` varchar(255),
  `description` text
);

CREATE TABLE `product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `category_id` int,
  `description` text,
  `price` int
);

CREATE TABLE `product_image` (
  `product_id` int,
  `image` varchar(255),
  `order` int
);

CREATE TABLE `order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int,
  `customer_id` int,
  `status` varchar(255),
  `created_at` datetime
);

CREATE TABLE `order_items` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int,
  `product_id` int,
  `quantity` int
);

CREATE TABLE `card` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int,
  `quantity` int,
  `user_id` int
);

ALTER TABLE `customer` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `product` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `product_image` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `order` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `order` ADD FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

      " ;

      $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240408_213615_init_shopping_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240408_213615_init_shopping_db cannot be reverted.\n";

        return false;
    }
    */
}
