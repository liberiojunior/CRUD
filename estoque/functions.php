<?php
require_once('../config.php');
require_once(DBAPI);
$estoques = null;
$estoque = null;
/**
 * Listagem de Clientes
 */
function index() {
    global $estoques;
    $estoques = find_all('estoque');
}
?>
<?php
/**
 * Cadastro de Clientes
 */
function add() {
    if (!empty($_POST['estoque'])) {
        $today =
            date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $estoque = $_POST['estoque'];
        $estoque['modified'] = $estoque['created'] = $today->format("Y-m-d H:i:s");
        save('estoque', $estoque);
        header('location: index.php');
    }
}
?>
<?php
/**
 * Atualizacao/Edicao de Cliente
 */
function edit() {
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['estoque'])) {
            $estoque = $_POST['estoque'];
            $estoque['modified'] = $now->format("Y-m-d H:i:s");
            update('estoque', $id, $estoque);
            header('location: index.php');
        } else {
            global $estoque;
            $estoque = find('estoque', $id);
        }
    } else {
        header('location: index.php');
    }
}
?>
<?php
/**
 * Visualização de um Cliente
 */
function view($id = null) {
    global $estoque;
    $estoque = find('estoque', $id);
}
?>

<?php
/**
 * Exclusão de um Cliente
 */
function delete($id = null) {
    global $estoque;
    $estoque = remove('estoque', $id);
    header('location: index.php');
}

function clear_messages()
{
    unset($_SESSION['message']);
    unset($_SESSION['type']);
}
?>