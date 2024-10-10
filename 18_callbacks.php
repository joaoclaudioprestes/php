<?php

// Callback - é uma função que é passada como argumento para outra função.
// O propósito de um callback é permitir que uma função execute outra função sob certas condições ou após a execução de uma tarefa específica.

// Exemplo 1: Callback simples usando função como parâmetro

// Função exemplo que imprime uma mensagem
function teste()
{
    echo "Função teste foi chamada.<br/>";
}

// Função que aceita uma função de callback como parâmetro
function teste2($callback)
{
    // Verifica se o argumento passado é uma função válida (callable)
    if(is_callable($callback)) {
        $callback(); // Chama a função callback
    } else {
        echo "Função não encontrada.<br/>";
    }
}

// Chama a função teste2, passando o nome da função 'teste' como string
teste2('teste'); // Saída: Função teste foi chamada.


// Exemplo 2: Callback com parâmetros

// Função que recebe um nome e uma função de callback
function testeComCallback($name, $callback)
{
    // Imprime o nome e chama a função callback
    echo "Executando teste para $name<br/>";
    $callback(); // Chama a função passada como callback
}

// Função anônima passada como callback
testeComCallback('João', function() {
    echo "Callback executado!<br/>";
}); // Saída: Executando teste para João, Callback executado!


// Exemplo 3: Usando `call_user_func`

// A função `call_user_func` chama uma função passada como string ou array
echo call_user_func('teste'); // Chama a função teste; Saída: Função teste foi chamada.

// Exemplo 4: Usando `call_user_func` com objetos

class User
{
    // Método que imprime uma mensagem com o nome passado
    public function teste($name)
    {
        echo "Teste para o usuário $name<br/>";
    }
}

$user = new User(); // Cria uma instância do objeto User

// Usando `call_user_func` para chamar um método de um objeto
call_user_func([$user, 'teste'], 'João'); // Saída: Teste para o usuário João

?>
