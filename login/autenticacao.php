<?php


function find( $table = null, $email = null, $senha = null)
{
    $database = open_database();
    $found = null;
    try
    {
        if ($email)
        {
            $sql = "SELECT * FROM " . $table . " WHERE email = " . $email . "AND senha =" . $senha;
            $result = $database->query($sql);
            if ($result->num_rows > 0)
            {
                $found = $result->fetch_assoc();
            }
        }
        else
        {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            if ($result->num_rows > 0)
            {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    }
    catch (Exception $e)
    {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}

function find_all( $table )
{
    return find($table);
}




?>