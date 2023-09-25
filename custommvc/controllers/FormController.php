<?php
require_once 'models/FormModel.php';

class FormController {
    private $formModel;

    public function __construct() {
        $this->formModel = new FormModel();
    }

    public function showForm() {
        include 'views/form.php';
    }

    public function submitForm() {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['name'];
            $instructor = $_POST['instructor'];
            $description = $_POST['description'];
            $this->formModel->insertData($_POST);

            header('Location: index.php?action=view');
			exit;
        }
    }

    public function viewForm() {
        $formData = $this->formModel->getData();
        include 'views/view.php';
    }

    public function __destruct() {
        $this->formModel->closeConnection();
    }
}
?>
