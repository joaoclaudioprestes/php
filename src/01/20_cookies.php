<?php
// Cookie - são variáveis que ficam salvas no computador do usuário, e não no servidor
setcookie("name", "João Prestes", time() + 3600); // Nome do cookie, valor do cookie, tempo de vida do cookie em segundos (1 hora)

echo $_COOKIE["name"]; // João Prestes