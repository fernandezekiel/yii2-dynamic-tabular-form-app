<?php
/* @var $scenario Codeception\Scenario */
use tests\codeception\_pages\ReceiptPage;

$I = new AcceptanceTester($scenario);

$I->wantTo('test create');
ReceiptPage::openBy($I);
$I->click('Create Receipt');
$I->fillField('input[name="Receipt[title]"]', 'Sandwich');
$I->click('Add row');
$I->wait(3);
$I->click('Add row');
$I->wait(3);
$I->fillField('input[name="ReceiptDetail[1][item_name]"]', 'Ham');
$I->fillField('input[name="ReceiptDetail[0][item_name]"]', 'Bread');
$I->click('Add row');
$I->wait(3);
$I->fillField('input[name="ReceiptDetail[2][item_name]"]', 'Lettuce');
$I->click('Add row');
$I->wait(3);
$I->fillField('input[name="ReceiptDetail[3][item_name]"]', 'Truffles');
$I->wait(3);

//deleting an entry
$I->amGoingTo('Remove truffles');
//using XPath here
$I->click('//*[@id="w0"]/div[5]/div[2]/button');
$I->click('Create');
$I->wait(3);
$I->see('Sandwich');
$I->wait(3);

$I->see('Sandwich');
$I->see('Ham');
$I->see('Bread');
$I->see('Lettuce');
$I->dontSee('Truffles');

$I->wantTo('Test update');
$I->click('Update');

$I->amGoingTo('Replace Lettuce with tomatoes');
$I->fillField('input[name="ReceiptDetail[2][item_name]"]', 'Tomatoes');
$I->amGoingTo('Add bacon');
$I->click('Add row');
$I->wait(3);
$I->fillField('input[name="ReceiptDetail[3][item_name]"]', 'Bacon');
$I->amGoingTo('Remove Bread');
$I->click('//*[@id="w0"]/div[2]/div[2]/button');

$I->click('Update');
$I->wait(3);
$I->amGoingTo('We should end up with these items: Ham, Tomatoes, Bacon');
$I->see('Sandwich');
$I->see('Ham');
$I->see('Tomatoes');
$I->see('Bacon');
$I->dontSee('Bread');

$I->amGoingTo('Delete sandwich');
$I->click('Delete');
$I->acceptPopup();
$I->wait(3);
$I->see('Create Receipt');
