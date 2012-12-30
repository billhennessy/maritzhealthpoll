<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_question extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'poll_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'number' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'text' => array(
				'type' => 'VARCHAR',
				'constraint' => 500,
			),
		));

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('question', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('question');
	}
}