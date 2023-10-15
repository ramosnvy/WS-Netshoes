<?php

namespace Pedroramos\Estagio\Model;

class Produto
{
    Private String $nome;
    Private Array $preco;
    Private String $descricao;
    Private string $img;

    public function __construct(String $img, String $nome, String $descricao , Array $preco)
    {

        $this->img = $img;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    /**
     * @return String
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param String $nome
     */
    private function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return Array
     */
    public function getPreco(): array
    {
        return $this->preco;
    }

    /**
     * @param Array $preco
     */
    private function setPreco(array $preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return String
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param String $descricao
     */
    private function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    private function setImg(string $img): void
    {
        $this->img = $img;
    }

}