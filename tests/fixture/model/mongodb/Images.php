<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\fixture\model\mongodb;

class Images extends \lithium\data\Model {

	public $belongsTo = ['Galleries'];

	public $hasMany = ['ImagesTags', 'Comments'];

	protected $_meta = ['connection' => 'test'];

	protected $_schema = [
		'_id' => ['type' => 'id'],
		'gallery' => ['type' => 'id'],
		'image' => ['type' => 'string', 'length' => 255],
		'title' => ['type' => 'string', 'length' => 50],
		'created' => ['type' => 'datetime'],
		'modified' => ['type' => 'datetime']
	];
}

?>