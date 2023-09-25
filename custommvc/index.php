<?php
// index.php
$action = isset($_GET['action']) ? $_GET['action'] : 'showForm';
$id = isset($_GET['id']) ? $_GET['id'] : null;

include 'controllers/FormController.php';

$formController = new FormController();

switch ($action) {
    case 'showForm':
        $formController->showForm();
        break;
    case 'submit':
        $formController->submitForm();
        break;
    case 'view':
        $formController->viewForm();
        break;
    case 'edit':
        $formController->editForm($id);
        break;
    case 'delete':
        $formController->deleteForm($id);
        break;
    default:
        $formController->showForm();
        break;
}
?>
