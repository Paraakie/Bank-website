<?php
namespace agilman\a2\controller;

use agilman\a2\model\{AccountModel, AccountCollectionModel};
use agilman\a2\view\View;

/**
 * Class AccountController
 *
 * @package agilman/a2
 * @author  Andrew Gilman <a.gilman@massey.ac.nz>
 */
class AccountController extends Controller
{
    /**
     * Account Index action
     */
    public function showAccounts()
    {
        session_start();
        if(isset($_SESSION['userName'])) {
            $collection = new AccountCollectionModel();
            $accounts = $collection->getAccounts();
            $view = new View('userHome');
            echo $view->addData('userName', $_SESSION['userName'])->render();
            //echo $view->addData('accounts', $accounts)->render();
        } else {
            header('Refresh: 3; URL=/');
            echo "<p align=center style=color:red;>Please login...<br> Redirecting back to login page</p>";
        }
    }
    /**
     * Account Create action
     */
    public function createAction()
    {
        $account = new AccountModel();
        $names = ['Bob','Mary','Jon','Peter','Grace'];
        shuffle($names);
        $account->setName($names[0]); // will come from Form data
        $account->save();
        $id = $account->getId();
        $view = new View('accountCreated');
        echo $view->addData('accountId', $id)->render();
    }

    /**
     * Account Delete action
     *
     * @param int $id Account id to be deleted
     */
    public function deleteAction($id)
    {
        (new AccountModel())->load($id)->delete();
        $view = new View('accountDeleted');
        echo $view->addData('accountId', $id)->render();
    }
    /**
     * Account Update action
     *
     * @param int $id Account id to be updated
     */
    public function updateAction($id)
    {
        $account = (new AccountModel())->load($id);
        $account->setName('Joe')->save(); // new name will come from Form data
    }
}
