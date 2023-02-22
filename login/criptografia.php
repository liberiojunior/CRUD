<?php

$senha1= md5('1234');

$senha2 = sha1('1234');

$senha3 = password_hash('1234', PASSWORD_DEFAULT);

echo $senha1. "<br>";
echo $senha2. "<br>";
echo $senha3. "<br>";

if(md5($_POST['senha'])==$senha1)
{
    echo 'PASSWORD IS VALID" MD5<BR>';
}
else
{
    echo 'PASSWORD IS INVALID. MD5<BR>';
}

if(md5($_POST['senha'])==$senha2)
{
    echo 'PASSWORD IS VALID" SHA1<BR>';
}
else
{
    echo 'PASSWORD IS INVALID. SHA1<BR>';
}

if(md5($_POST['senha'])==$senha3)
{
    echo 'PASSWORD IS VALID" PASSWORD_HASH<BR>';
}
else
{
    echo 'PASSWORD IS INVALID. PASSWORD_HASH<BR>';
}