<?php

use yii\db\Migration;

/**
 * Class m240411_082856_init_rbac
 */
class m240411_082856_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $createCustomer = $auth->createPermission('createCustomer');
        $createCustomer->description = 'Create a customer';
        $auth->add($createCustomer);

        $updateCustomer = $auth->createPermission('updateCustomer');
        $updateCustomer->description = 'Update customer';
        $auth->add($updateCustomer);

        $deleteCustomer = $auth->createPermission('deleteCustomer');
        $deleteCustomer->description = 'Delete a customer';
        $auth->add($deleteCustomer);

        $listCustomer = $auth->createPermission('listCustomer');
        $listCustomer->description = 'List customer';
        $auth->add($listCustomer);

        $viewCustomer = $auth->createPermission('viewCustomer');
        $viewCustomer->description = 'View customer';
        $auth->add($viewCustomer);

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->addChild($admin, $createCustomer);
        $auth->addChild($admin, $updateCustomer);
        $auth->addChild($admin, $deleteCustomer);
        $auth->addChild($admin, $listCustomer);
        $auth->addChild($admin, $viewCustomer);

        $moderator = $auth->createRole('moderator');
        $auth->add($moderator);

        $auth->addChild($moderator, $listCustomer);
        $auth->addChild($moderator, $viewCustomer);

        $auth->assign($moderator, 3);
        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240411_082856_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
