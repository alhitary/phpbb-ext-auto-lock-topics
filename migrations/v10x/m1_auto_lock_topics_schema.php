<?php

/**
 * Auto-lock Topics Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

namespace alfredoramos\autolocktopics\migrations\v10x;

use phpbb\db\migration\migration;

class m1_auto_lock_topics_schema extends migration {
	
	public function update_schema() {
		return [
			'add_columns'	=> [
				FORUMS_TABLE => [
					'enable_auto_lock'	=> ['BOOL', 0],
					'auto_lock_flags'	=> ['USINT', 0],
					'auto_lock_next'	=> ['TIMESTAMP', 0],
					'auto_lock_days'	=> ['USINT', 90],
					'auto_lock_frequency'	=> ['USINT', 7]
				]
			]
		];
	}
	
	public function revert_schema() {
		return [
			'drop_columns'	=> [
				FORUMS_TABLE	=> [
					'enable_auto_lock',
					'auto_lock_flags',
					'auto_lock_next',
					'auto_lock_days',
					'auto_lock_frequency'
				]
			]
		];
	}
	
}