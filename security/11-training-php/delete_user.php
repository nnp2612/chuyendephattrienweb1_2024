<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);//Delete existing user
}
header('location: list_users.php');
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
session_start();
if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF token không hợp lệ, không thể thực hiện hành động.");
}
?>
<form method="POST" action="delete_user.php">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <input type="submit" value="Xóa user">
    
</form>
