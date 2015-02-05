<?php

class Clientes {
    private $nome;
    private $idade;
    private $cpf;
    private $endereco;

    public function __construct($nome = null, $idade = null, $cpf = null, $endereco = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function setCliente()
    {
        $name = $_POST['nome-cliente'];
        $age = $_POST['idade-cliente'];
        $ccpf = $_POST['cpf-cliente'];
        $endereco = $_POST['endereco-cliente'];

        $cliente = new Clientes($name, $age, $ccpf, $endereco);
        return $cliente;
    }

    public function saveClient(){
        $cliente = setCliente();

        $query = "INSERT INTO clientes (nome, idade, cpf, endereco) VALUES (:nome, :idade, :cpf, :endereco);";
        $stmt = conexaoDB()->prepare($query);
        $stmt->bindValue('nome', $cliente->getNome());
        $stmt->bindValue('idade', $cliente->getIdade());
        $stmt->bindValue('cpf', $cliente->getCpf());
        $stmt->bindValue('endereco', $cliente->getEndereco());
        $stmt->execute();
    }

    public function listClientesAsc(){
        $query = "SELECT nome FROM clientes ORDER BY nome ASC;";
        $stmt = conexaoDB()->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_COLUMN);

        echo '<ul>';

        foreach ($resultado as $cliente) {
            $client = ucfirst($cliente);?>
            <li>
                <a href="/cliente?cliente=<?php echo $cliente; ?>">
                    <?php echo $client; ?>
                </a>
            </li> <?php
        }

        echo '</ul>';

    }

    public function listClientesDesc(){
        $query = "SELECT nome FROM clientes ORDER BY nome DESC;";
        $stmt = conexaoDB()->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_COLUMN);

        echo '<ul>';

        foreach ($resultado as $cliente) {
            $client = ucfirst($cliente);?>
            <li>
                <a href="/cliente?cliente=<?php echo $cliente; ?>">
                    <?php echo $client; ?>
                </a>
            </li> <?php
        }

        echo '</ul>';
    }

    public function listClienteInd()
    {
        $query = "SELECT * FROM clientes WHERE nome=:nome;";
        $stmt = conexaoDB()->prepare($query);
        $nome = $_GET['cliente'];

        $stmt->bindValue('nome', $nome);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<h3>' . $resultado['nome'] . '</h3><br>';
        echo 'Nome: ' . $resultado['nome'] . '<br>';
        echo 'Idade: ' . $resultado['idade'] . '<br>';
        echo 'CPF: ' . $resultado['cpf'] . '<br>';
        echo 'Endereço: ' . $resultado['endereco'] . '<br>';
    }
}
