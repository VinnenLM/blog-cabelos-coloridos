<?php

class Repositorio
{

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function exibirTodos(): array
    {
        $result = $this->connection->query('select * from artigos');
        $artigo = $result->fetchAll();
        return $artigo;
    }

    public function exibirPorId(int $id): array
    {
        $result = $this->connection->prepare('select * from artigo where id = ?');
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();

        while ($coluna = $result->fetch()) {
            $artigo = [
                'id' => $coluna['id'],
                'titulo' => $coluna['titulo'],
                'conteudo' => $coluna['conteudo'],
                'postado_por' => $coluna['postado_por'],
                'link_img' => $coluna['link_img']
            ];
        }
        return $artigo;
    }

    public function adicionarArtigo(string $titulo, string $conteudo): void
    {
        $result = $this->connection->prepare('insert into artigos(titulo, conteudo) values (?, ?);');
        $result->bindValue(1, $titulo);
        $result->bindValue(2, $conteudo);
        $result->execute();
    }

    public function removerArtigo(int $id): void
    {
        $result = $this->connection->prepare('delete from artigos where id = ?;');
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
    }

    public function editarArtigo(string $titulo, string $conteudo, int $id): void
    {
        $result = $this->connection->prepare('update artigos set titulo = ?, conteudo = ? where id = ?;');
        $result->bindValue(1, $titulo);
        $result->bindValue(2, $conteudo);
        $result->bindValue(3, $id, PDO::PARAM_INT);
        $result->execute();
    }


    // public function hidratarDadosArtigo(PDOStatement $statement): array
    // {
    //     $listaDadosArtigo = $statement->fetchAll();
    //     $listaArtigo = [];

    //     foreach ($listaDadosArtigo as $dadosArtigo) {
    //         $listaArtigo[] = new Artigo(
    //             $dadosArtigo['id'],
    //             $dadosArtigo['titulo'],
    //             $dadosArtigo['conteudo']
    //         );
    //     }
    //     return $listaArtigo;
    // }
}
