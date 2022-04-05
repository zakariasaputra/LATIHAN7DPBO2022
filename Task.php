<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Get data, sorting kolom yang dipilih
	function getSortedTask($column) {
		// Query mysql "SELECT ORDER BY" data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY $column";
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Add data
	function addTask() {
		// Tampung semua var form
		$name = $_POST['tname'];
		$deadline = $_POST['tdeadline'];
		$detail = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];

		// Query mysql insert data ke tb_to_do
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td,
				priority_td, deadline_td, status_td) VALUES ('$name',
				'$detail', '$subject', '$priority', '$deadline', 'Belum')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Update data : "Belum" ke "Sudah".
	function updateTask() {
		// Tampung var form
		$id = $_GET['id_status'];

		// Query mysql update data ke tb_to_do.
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Delete data
	function deleteTask() {
		// Tampung var form
		$id = $_GET['id_hapus'];

		// Query mysql delete data ke tb_to_do.
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}
}

?>