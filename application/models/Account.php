<?php

namespace application\models;

use application\core\Model;

	class Account extends Model {

		public function getLogin() {
			$result = $this->db->row('SELECT * FROM am');
			return $result;
		}

	}