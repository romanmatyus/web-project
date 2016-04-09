<?php

namespace App\Presenters;

use Nette;
use Ublaboo\DataGrid\DataGrid;
use Ublaboo\DataGrid\DataSource\ArrayDataSource;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
	protected function createComponentGrid($name)
	{
		$grid = new DataGrid($this, $name);
		$grid->setDataSource(new ArrayDataSource([
			1 => [
				'id' => 1,
				'name' => 'Test 1',
			],
			2 => [
				'id' => 2,
				'name' => 'Test 2',
			],
			3 => [
				'id' => 3,
				'name' => 'Test 3',
			],
		]));
		$grid->setItemsDetail(TRUE, 'id');
		$grid->setItemsDetail(__DIR__ . '/templates/Homepage/grid_item_detail.latte');
		$grid->addColumnNumber('id', 'ID');
		$grid->addColumnText('name', 'Name');
		return $grid;
	}
}
