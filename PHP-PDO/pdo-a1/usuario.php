<?php

class Usuario
{
    private ?int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private ?string $criado_em;

    // ORDEM PADRÃO: Nome, Email, Senha, ID (opcional), Data (opcional)
    // Isso mantém compatível com seu cadastro.php que já existe
    public function __construct(string $nome, string $email, string $senha, ?int $id = null, ?string $criado_em = null)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
        $this->criado_em = $criado_em;
    }

    // GETTERS
    public function id(): ?int { return $this->id; }
    public function nome(): string { return $this->nome; }
    public function email(): string { return $this->email; }
    public function senha(): string { return $this->senha; }
    public function criado_em(): ?string { return $this->criado_em; }

    // MÉTODO CADASTRAR
    public function cadastrar(PDO $pdo): bool
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', password_hash($this->senha, PASSWORD_DEFAULT));
        return $stmt->execute();
    }

    // MÉTODO BUSCAR POR EMAIL (Corrigido a ordem!)
    public static function buscarPorEmail(PDO $pdo, string $email): ?Usuario
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$dados) {
            return null;
        }

        // AQUI ESTAVA O ERRO: Agora respeitamos a ordem do construtor lá de cima
        // 1º Nome, 2º Email, 3º Senha, 4º ID, 5º Data
        return new Usuario(
            $dados['nome'],
            $dados['email'],
            $dados['senha'], 
            $dados['id'],
            $dados['criado_em']
        );
    }
}