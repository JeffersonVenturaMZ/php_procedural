<?php
// COOKIE
// nome do cookie, valor do cookie, validade do cookie
setcookie('user', 'jefferson ventura', time()+3600);
setcookie('email', 'jefferson@gmail.com', time()-3600);
setcookie('ultima_pesquisa', 'jogos cooperativos', time()+3600);

echo $_COOKIE['ultima_pesquisa'];