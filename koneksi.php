<?php
	class koneksi {
		private $server = "localhost";
		private $username = "id4994258_root";
		private $password = "bismillah";
		private $db = "id4994258_tugas";

		function getKoneksi() {
			return new mysqli($this->server, $this->username,$this->password,$this->db);
		}
	}
?>