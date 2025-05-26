# 🚀 REVISÃO RÁPIDA - PROVA PHP

## 📋 ÍNDICE RÁPIDO

1. [🔧 XAMPP & Banco](#xampp--banco-passo-a-passo)
2. [🏫 Problemas nos PCs da Faculdade](#problemas-nos-pcs-da-faculdade)
3. [📝 Sintaxe Básica](#sintaxe-básica)
4. [🔄 Estruturas](#estruturas)
5. [📊 Arrays](#arrays)
6. [⚙️ Funções](#funções)
7. [📋 Formulários](#formulários)
8. [🔐 Sessões](#sessões)
9. [💾 Banco de Dados](#banco-de-dados)
10. [🚨 Erros Comuns](#erros-comuns-ctrlf-aqui)
11. [✅ Checklist](#checklist)

---

## 🔧 XAMPP & Banco (PASSO A PASSO)

### 🚀 **PASSO 1: Ligar o XAMPP**

1. Abra o **XAMPP Control Panel**
2. Clique em **"Start"** no **Apache** ✅
3. Clique em **"Start"** no **MySQL** ✅
4. Se der erro, mude a porta do MySQL para **3307**

### 🔍 **PASSO 2: Descobrir a porta do MySQL**

```php
// Cole isso em um arquivo .php para descobrir a porta:
<?php
// Testa porta 3306
$teste1 = new mysqli("localhost:3306", "root", "");
if (!$teste1->connect_error) {
    echo "✅ Sua porta é: 3306";
} else {
    // Testa porta 3307
    $teste2 = new mysqli("localhost:3307", "root", "");
    if (!$teste2->connect_error) {
        echo "✅ Sua porta é: 3307";
    } else {
        echo "❌ MySQL não está funcionando";
    }
}
?>
```

### 🎯 **PASSO 3: Conexão Básica (COPIE E COLE)**

```php
<?php
// MODELO PADRÃO - sempre use este:
$banco = new mysqli("localhost:3307", "root", "", "nome_do_banco");

// SEMPRE verificar se conectou:
if ($banco->connect_error) {
    die("❌ Erro na conexão: " . $banco->connect_error);
}

echo "✅ Conectado com sucesso!";
?>
```

### 📝 **PASSO 4: Entendendo cada parte**

```php
$banco = new mysqli("HOST", "USUÁRIO", "SENHA", "BANCO");
//                    ↓        ↓        ↓        ↓
//               localhost   root      ""    meu_banco
//               :3307    (padrão)  (vazio)  (nome que você criou)
```

### 🏗️ **PASSO 5: Criar banco de dados**

```sql
-- No phpMyAdmin ou MySQL, execute:
CREATE DATABASE meu_banco;
USE meu_banco;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

-- Inserir dados de teste:
INSERT INTO usuarios (usuario, senha) VALUES ('admin', '123');
```

### ⚡ **CÓDIGOS PRONTOS PARA COPIAR**

#### 🔗 **Conexão Simples (sem banco específico)**

```php
<?php
$banco = new mysqli("localhost:3307", "root", "");
if ($banco->connect_error) {
    die("Erro: " . $banco->connect_error);
}
echo "Conectado!";
?>
```

#### 🔗 **Conexão com Banco Específico**

```php
<?php
$banco = new mysqli("localhost:3307", "root", "", "meu_banco");
if ($banco->connect_error) {
    die("Erro: " . $banco->connect_error);
}
echo "Conectado ao banco 'meu_banco'!";
?>
```

#### 🔗 **Conexão Completa com Teste**

```php
<?php
// Tenta conectar
$banco = new mysqli("localhost:3307", "root", "", "meu_banco");

// Verifica se deu erro
if ($banco->connect_error) {
    echo "❌ ERRO: " . $banco->connect_error;
    echo "<br>🔧 Verifique se:";
    echo "<br>- XAMPP está ligado";
    echo "<br>- MySQL está rodando";
    echo "<br>- A porta está correta (3306 ou 3307)";
    echo "<br>- O banco 'meu_banco' existe";
    die();
}

echo "✅ Conectado com sucesso!";
echo "<br>📊 Banco: " . $banco->server_info;
?>
```

### 🚨 **ERROS MAIS COMUNS E SOLUÇÕES**

#### ❌ **"Connection refused"**

```php
// PROBLEMA: Porta errada ou MySQL parado
// SOLUÇÃO: Verificar porta e ligar MySQL no XAMPP

// Teste as duas portas:
$banco = new mysqli("localhost:3306", "root", "", ""); // Porta 3306
// OU
$banco = new mysqli("localhost:3307", "root", "", ""); // Porta 3307
```

#### ❌ **"Unknown database"**

```php
// PROBLEMA: Banco não existe
// SOLUÇÃO: Criar o banco primeiro

// 1. Conecte sem especificar banco:
$banco = new mysqli("localhost:3307", "root", "");

// 2. Crie o banco:
$banco->query("CREATE DATABASE meu_banco");

// 3. Agora conecte com o banco:
$banco = new mysqli("localhost:3307", "root", "", "meu_banco");
```

#### ❌ **"Access denied"**

```php
// PROBLEMA: Usuário ou senha errados
// SOLUÇÃO: No XAMPP, sempre use:

$banco = new mysqli("localhost:3307", "root", "", "banco");
//                                    ↑      ↑
//                                 usuário senha
//                                 (root)  (vazio)
```

### 🏫 **PROBLEMAS NOS PCs DA FACULDADE**

#### 🚨 **Problema: "Localhost não funciona" ou "Connection refused"**

##### ⚡ **SOLUÇÃO RÁPIDA - Descobrir o IP correto:**

```php
// Cole isso para descobrir qual IP usar:
<?php
echo "🔍 Testando conexões...<br>";

// Testa localhost
$teste1 = @new mysqli("localhost:3307", "root", "");
if (!$teste1->connect_error) {
    echo "✅ Use: localhost:3307<br>";
} else {
    // Testa 127.0.0.1
    $teste2 = @new mysqli("127.0.0.1:3307", "root", "");
    if (!$teste2->connect_error) {
        echo "✅ Use: 127.0.0.1:3307<br>";
    } else {
        // Testa IP da máquina
        $ip = $_SERVER['SERVER_ADDR'] ?? 'localhost';
        $teste3 = @new mysqli("$ip:3307", "root", "");
        if (!$teste3->connect_error) {
            echo "✅ Use: $ip:3307<br>";
        } else {
            echo "❌ Nenhuma conexão funcionou<br>";
            echo "🔧 Siga os passos abaixo...<br>";
        }
    }
}
?>
```

#### 🔧 **CONFIGURAÇÕES PARA CORRIGIR**

##### **1. Arquivo: `C:\xampp\mysql\bin\my.ini`**

```ini
# Procure por estas linhas e altere:

[mysqld]
port = 3307
bind-address = 0.0.0.0
# OU se não funcionar:
bind-address = 127.0.0.1

# Se não existir, adicione:
skip-networking = 0
```

##### **2. Arquivo: `C:\xampp\apache\conf\httpd.conf`**

```apache
# Procure por:
Listen 80

# Se der conflito, mude para:
Listen 8080
# Ou qualquer porta livre (8081, 8082, etc.)
```

##### **3. Arquivo: `C:\xampp\phpMyAdmin\config.inc.php`**

```php
// Procure por:
$cfg['Servers'][$i]['host'] = 'localhost';

// Mude para:
$cfg['Servers'][$i]['host'] = '127.0.0.1';
// OU para o IP que funcionou no teste acima
```

#### 🆘 **SOLUÇÕES DE EMERGÊNCIA**

##### **Solução 1: Forçar IP específico**

```php
// Se localhost não funcionar, teste estes IPs:
$ips = ["127.0.0.1", "localhost", "::1"];
$banco = null;

foreach ($ips as $ip) {
    $teste = @new mysqli("$ip:3307", "root", "", "banco");
    if (!$teste->connect_error) {
        $banco = $teste;
        echo "✅ Conectado com: $ip";
        break;
    }
}

if (!$banco) {
    die("❌ Nenhum IP funcionou!");
}
```

##### **Solução 2: Múltiplas portas**

```php
// Testa várias portas automaticamente:
$portas = [3306, 3307, 3308, 3309];
$banco = null;

foreach ($portas as $porta) {
    $teste = @new mysqli("localhost:$porta", "root", "", "banco");
    if (!$teste->connect_error) {
        $banco = $teste;
        echo "✅ Conectado na porta: $porta";
        break;
    }
}

if (!$banco) {
    die("❌ Nenhuma porta funcionou!");
}
```

##### **Solução 3: Conexão universal (COPIE ESTA!)**

```php
// Esta função testa tudo automaticamente:
function conectarBanco($nome_banco = "") {
    $hosts = ["localhost", "127.0.0.1", "::1"];
    $portas = [3306, 3307, 3308];

    foreach ($hosts as $host) {
        foreach ($portas as $porta) {
            $teste = @new mysqli("$host:$porta", "root", "", $nome_banco);
            if (!$teste->connect_error) {
                echo "✅ Conectado: $host:$porta<br>";
                return $teste;
            }
        }
    }

    die("❌ Não foi possível conectar!");
}

// Use assim:
$banco = conectarBanco("meu_banco");
```

#### 🔥 **COMANDOS PARA REINICIAR XAMPP**

##### **No Windows (Prompt como Administrador):**

```cmd
# Parar serviços:
net stop apache2.4
net stop mysql

# Iniciar serviços:
net start apache2.4
net start mysql

# OU reiniciar XAMPP:
taskkill /f /im xampp-control.exe
# Depois abrir XAMPP novamente
```

#### 🎯 **CÓDIGO FINAL PARA A PROVA**

```php
// COLE ESTE CÓDIGO - FUNCIONA EM QUALQUER PC:
<?php
session_start();

// Função que sempre conecta:
function conectar($banco = "") {
    $configs = [
        ["localhost:3307", "root", "", $banco],
        ["127.0.0.1:3307", "root", "", $banco],
        ["localhost:3306", "root", "", $banco],
        ["127.0.0.1:3306", "root", "", $banco]
    ];

    foreach ($configs as $config) {
        $teste = @new mysqli($config[0], $config[1], $config[2], $config[3]);
        if (!$teste->connect_error) {
            return $teste;
        }
    }

    die("Erro: Não foi possível conectar ao banco!");
}

// Use assim:
$banco = conectar("nome_do_banco");
echo "✅ Conectado!";
?>
```

### 🎯 **DICA DE OURO PARA A PROVA**

```php
// SEMPRE cole este código no início dos seus arquivos:
<?php
session_start(); // Se usar sessões

// Conexão padrão que sempre funciona:
$banco = new mysqli("localhost:3307", "root", "", "nome_do_banco");

// Verificação obrigatória:
if ($banco->connect_error) {
    die("Erro na conexão: " . $banco->connect_error);
}

// Agora pode usar $banco em todo o arquivo!
?>
```

---

## 📝 Sintaxe Básica

### Variáveis e Tipos

```php
<?php
$nome = "João";           // String
$idade = 25;              // Integer
$salario = 2500.50;       // Float
$ativo = true;            // Boolean

// Mostrar na tela
echo "Olá $nome!";                    // Com interpolação
echo "Salário: " . $salario;          // Com concatenação
echo "Idade: {$idade} anos";          // Com chaves
?>
```

### Verificar se Existe

```php
// SEMPRE use isso para GET/POST
$nome = $_GET["nome"] ?? "Padrão";
$idade = $_POST["idade"] ?? 0;

// Ou assim
if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
}
```

---

## 🔄 Estruturas

### IF/ELSE

```php
<?php
$idade = 18;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

// Múltiplas condições
if ($idade < 18) {
    echo "Menor";
} elseif ($idade < 60) {
    echo "Adulto";
} else {
    echo "Idoso";
}
?>
```

### FOR e WHILE

```php
<?php
// FOR - quando sabe quantas vezes
for ($i = 0; $i < 10; $i++) {
    echo "Número: $i<br>";
}

// WHILE - enquanto condição for verdadeira
$contador = 0;
while ($contador < 5) {
    echo "Contador: $contador<br>";
    $contador++;
}
?>
```

---

## 📊 Arrays

### Array Simples

```php
<?php
$frutas = ["Maçã", "Banana", "Laranja"];

// Acessar
echo $frutas[0]; // Maçã

// Percorrer
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
```

### Array Associativo

```php
<?php
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "Curitiba"
];

// Acessar
echo $pessoa["nome"]; // João

// Percorrer
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor<br>";
}
?>
```

### Array de Arrays

```php
<?php
$alunos = [
    ["nome" => "Ana", "nota" => 8.5],
    ["nome" => "Bruno", "nota" => 7.0],
    ["nome" => "Carlos", "nota" => 9.0]
];

foreach ($alunos as $aluno) {
    echo $aluno["nome"] . ": " . $aluno["nota"] . "<br>";
}
?>
```

---

## ⚙️ Funções

### Função Simples

```php
<?php
function saudar($nome) {
    return "Olá, $nome!";
}

echo saudar("Maria"); // Olá, Maria!
?>
```

### Função com Múltiplos Parâmetros

```php
<?php
function calcularMedia($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}

$media = calcularMedia(8, 7, 9);
echo "Média: $media";
?>
```

### Função com Valor Padrão

```php
<?php
function cumprimentar($nome = "Visitante") {
    return "Bem-vindo, $nome!";
}

echo cumprimentar();        // Bem-vindo, Visitante!
echo cumprimentar("João");  // Bem-vindo, João!
?>
```

---

## 📋 Formulários

### HTML Básico

```html
<form method="get">
  Nome: <input type="text" name="nome" /> Idade:
  <input type="number" name="idade" />
  <input type="submit" value="Enviar" />
</form>

<form method="post">
  Usuário: <input type="text" name="usuario" /> Senha:
  <input type="password" name="senha" />
  <input type="submit" value="Login" />
</form>
```

### Processar Formulário

```php
<?php
// GET
$nome = $_GET["nome"] ?? "";
$idade = $_GET["idade"] ?? 0;

// POST
$usuario = $_POST["usuario"] ?? "";
$senha = $_POST["senha"] ?? "";

// Verificar se foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Processar dados
    if (!empty($usuario) && !empty($senha)) {
        echo "Dados recebidos!";
    } else {
        echo "Preencha todos os campos!";
    }
}
?>
```

### Validação Simples

```php
<?php
$peso = $_GET["peso"] ?? 0;
$altura = $_GET["altura"] ?? 0;

if ($peso > 0 && $altura > 0) {
    $imc = $peso / ($altura ** 2);
    echo "IMC: " . number_format($imc, 2);
} else {
    echo "Valores inválidos!";
}
?>
```

---

## 🔐 Sessões

### Iniciar Sessão

```php
<?php
session_start(); // SEMPRE no início do arquivo

// Definir variável
$_SESSION["usuario"] = "admin";
$_SESSION["id"] = 123;

// Ler variável
$usuario = $_SESSION["usuario"] ?? null;
?>
```

### Sistema de Login

```php
<?php
session_start();

// Verificar se já está logado
if (isset($_SESSION["usuario"])) {
    echo "Bem-vindo, " . $_SESSION["usuario"];
} else {
    // Processar login
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if ($usuario === "admin" && $senha === "123") {
        $_SESSION["usuario"] = $usuario;
        header("Location: dashboard.php");
        exit;
    }
}
?>
```

### Logout

```php
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
```

### Proteger Página

```php
<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}

echo "Área restrita para: " . $_SESSION["usuario"];
?>
```

---

## 💾 Banco de Dados

### Conectar

```php
<?php
$banco = new mysqli("localhost:3307", "root", "", "nome_banco");

if ($banco->connect_error) {
    die("Erro: " . $banco->connect_error);
}
?>
```

### SELECT (Buscar)

```php
<?php
function buscarUsuario($usuario) {
    global $banco;

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $banco->query($sql);

    if ($resultado->num_rows > 0) {
        return $resultado->fetch_object();
    }
    return null;
}

$user = buscarUsuario("admin");
if ($user) {
    echo "Nome: " . $user->nome;
}
?>
```

### INSERT (Adicionar)

```php
<?php
function adicionarTarefa($texto) {
    global $banco;

    $sql = "INSERT INTO tarefas (texto) VALUES ('$texto')";
    return $banco->query($sql);
}

if (adicionarTarefa("Estudar PHP")) {
    echo "Tarefa adicionada!";
}
?>
```

### UPDATE (Atualizar)

```php
<?php
function atualizarTarefa($id, $novo_texto) {
    global $banco;

    $sql = "UPDATE tarefas SET texto='$novo_texto' WHERE id='$id'";
    return $banco->query($sql);
}
?>
```

### DELETE (Excluir)

```php
<?php
function excluirTarefa($id) {
    global $banco;

    $sql = "DELETE FROM tarefas WHERE id='$id'";
    return $banco->query($sql);
}
?>
```

### Login com Banco

```php
<?php
function fazerLogin($usuario, $senha) {
    global $banco;

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $banco->query($sql);

    if ($resultado->num_rows > 0) {
        $user = $resultado->fetch_object();
        if ($senha == $user->senha) {
            $_SESSION["usuario"] = $usuario;
            $_SESSION["id"] = $user->id;
            return true;
        }
    }
    return false;
}
?>
```

---

## 🚨 Erros Comuns (CTRL+F aqui!)

### 🔍 **"session_start()"** ou **"Cannot send session"**

**Mensagem:** `Warning: session_start(): Cannot send session cookie`

```php
// ❌ ERRO
$_SESSION["usuario"] = "admin";

// ✅ CORRETO
session_start(); // SEMPRE no início!
$_SESSION["usuario"] = "admin";
```

### 🔍 **"headers already sent"** ou **"Cannot modify header"**

**Mensagem:** `Warning: Cannot modify header information - headers already sent`

```php
// ❌ ERRO
echo "Algo";
header("Location: pagina.php");

// ✅ CORRETO
header("Location: pagina.php");
exit; // SEMPRE usar exit!
```

### 🔍 **"Undefined index"** ou **"Undefined variable"**

**Mensagem:** `Notice: Undefined index: nome` ou `Notice: Undefined variable: nome`

```php
// ❌ ERRO
echo $_GET["nome"];
$resultado = $variavel_inexistente;

// ✅ CORRETO
echo $_GET["nome"] ?? "Padrão";
$resultado = $variavel ?? "valor_padrao";
```

### 🔍 **"Call to a member function"** ou **"fetch_object()"**

**Mensagem:** `Fatal error: Call to a member function fetch_object() on boolean`

```php
// ❌ ERRO
$resultado = $banco->query($sql);
$user = $resultado->fetch_object(); // Erro se query falhou!

// ✅ CORRETO
$resultado = $banco->query($sql);
if ($resultado && $resultado->num_rows > 0) {
    $user = $resultado->fetch_object();
}
```

### 🔍 **"Undefined variable: banco"** em função

**Mensagem:** `Notice: Undefined variable: banco`

```php
// ❌ ERRO
function buscar() {
    $sql = "SELECT * FROM tabela";
    $banco->query($sql); // Erro!
}

// ✅ CORRETO
function buscar() {
    global $banco; // Adicionar esta linha!
    $sql = "SELECT * FROM tabela";
    $banco->query($sql);
}
```

### 🔍 **"Connection refused"** ou **"Can't connect"**

**Mensagem:** `mysqli::__construct(): (HY000/2002): Connection refused`

```php
// ❌ ERRO (porta errada)
$banco = new mysqli("localhost", "root", "", "banco");

// ✅ CORRETO (verificar porta)
$banco = new mysqli("localhost:3307", "root", "", "banco");
// OU
$banco = new mysqli("localhost:3306", "root", "", "banco");
```

### 🔍 **"Parse error"** ou **"syntax error"**

**Mensagem:** `Parse error: syntax error, unexpected ';'`

```php
// ❌ ERRO (ponto e vírgula no lugar errado)
if ($idade > 18); {
    echo "Maior";
}

// ✅ CORRETO
if ($idade > 18) {
    echo "Maior";
}
```

### 🔍 **"Array to string conversion"**

**Mensagem:** `Notice: Array to string conversion`

```php
// ❌ ERRO
$array = ["a", "b", "c"];
echo $array; // Não pode imprimir array direto!

// ✅ CORRETO
print_r($array); // Para ver estrutura
// OU
echo $array[0]; // Para ver um elemento
// OU
echo implode(", ", $array); // Para juntar elementos
```

### 🔍 **"Maximum execution time"** ou **"Fatal error: Maximum"**

**Mensagem:** `Fatal error: Maximum execution time of 30 seconds exceeded`

```php
// ❌ ERRO (loop infinito)
while (true) {
    echo "Infinito";
}

// ✅ CORRETO (sempre ter condição de parada)
$contador = 0;
while ($contador < 10) {
    echo "Contador: $contador";
    $contador++; // IMPORTANTE: incrementar!
}
```

### 🔍 **"No database selected"**

**Mensagem:** `No database selected`

```php
// ❌ ERRO (esqueceu de selecionar banco)
$banco = new mysqli("localhost:3307", "root", "");

// ✅ CORRETO (especificar nome do banco)
$banco = new mysqli("localhost:3307", "root", "", "nome_do_banco");
```

### 🔍 **"Table doesn't exist"**

**Mensagem:** `Table 'banco.tabela' doesn't exist`

```php
// ❌ ERRO (nome da tabela errado)
$sql = "SELECT * FROM usuario"; // Tabela não existe

// ✅ CORRETO (verificar nome correto)
$sql = "SELECT * FROM usuarios"; // Nome correto da tabela
```

### 🔍 **"Column not found"** ou **"Unknown column"**

**Mensagem:** `Unknown column 'nome' in 'field list'`

```php
// ❌ ERRO (coluna não existe)
$sql = "SELECT nome FROM usuarios"; // Coluna 'nome' não existe

// ✅ CORRETO (verificar nome da coluna)
$sql = "SELECT usuario FROM usuarios"; // Nome correto da coluna
```

## 🆘 **SOLUÇÕES RÁPIDAS**

### ⚡ **Erro de conexão?**

```php
// Cole isso para testar:
$banco = new mysqli("localhost:3307", "root", "", "");
if ($banco->connect_error) {
    echo "❌ Erro: " . $banco->connect_error;
} else {
    echo "✅ Conectado!";
}
```

### ⚡ **Variável não existe?**

```php
// Sempre use ?? para verificar:
$nome = $_GET["nome"] ?? "padrão";
$idade = $_POST["idade"] ?? 0;
$usuario = $_SESSION["usuario"] ?? null;
```

### ⚡ **Sessão não funciona?**

```php
// SEMPRE no início do arquivo:
<?php
session_start();
// resto do código...
```

### ⚡ **Redirecionamento não funciona?**

```php
// SEMPRE usar exit após header:
header("Location: pagina.php");
exit; // Esta linha é obrigatória!
```

### ⚡ **Função não acessa banco?**

```php
// SEMPRE usar global:
function minhaFuncao() {
    global $banco; // Esta linha é obrigatória!
    // resto da função...
}
```

---

## ✅ Checklist

### Antes de começar

- [ ] XAMPP ligado (Apache + MySQL)
- [ ] Testar porta MySQL (3306 ou 3307)
- [ ] Criar banco se necessário

### Em todo arquivo PHP

- [ ] `<?php` no início
- [ ] `session_start()` se usar sessões
- [ ] Verificar conexão com banco
- [ ] `exit` após `header()`

### Estrutura básica

```php
<?php
session_start(); // Se usar sessões

// Conexão (se usar banco)
$banco = new mysqli("localhost:3307", "root", "", "banco");
if ($banco->connect_error) {
    die("Erro: " . $banco->connect_error);
}

// Verificar se está logado (se necessário)
$usuario = $_SESSION["usuario"] ?? null;
if (is_null($usuario)) {
    header("Location: login.php");
    exit;
}

// Seu código aqui...
?>
```

### Para debug

```php
var_dump($variavel);     // Ver conteúdo
print_r($array);         // Ver array
echo "Debug: $valor";    // Verificar valor
```

---

## 🎯 Dicas Finais

1. **Leia com calma** - Identifique o que cada parte faz
2. **Teste aos poucos** - Corrija um erro por vez
3. **Use var_dump()** para ver o que tem nas variáveis
4. **Sempre verifique** - Conexões, sessões, variáveis
5. **Mantenha a calma** - Os erros do PHP são bem claros

### Comandos úteis

```php
// Ver estrutura
print_r($_GET);
print_r($_POST);
print_r($_SESSION);

// Ver erros
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

**🍀 BOA SORTE NA PROVA! 🚀**
