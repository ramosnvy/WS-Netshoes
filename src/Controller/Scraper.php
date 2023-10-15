<?php

namespace Pedroramos\Estagio\Controller;

use DOMXPath;
use mysql_xdevapi\Exception;
use Pedroramos\Estagio\Model\Produto;

require "../../vendor/autoload.php";

class Scraper
{
    Private \DOMDocument $dom;
    Private string $html;

    public function __construct(String $html, \DOMDocument $dom)
    {
        $this->html = $html;
        $this->dom = $dom;
    }

    function filtrarNome (): string
    {
        $textTag = $this->dom->getElementsByTagName("h1");

        foreach ($textTag as $text){
            $nome = $text->textContent;
        }

        return $nome;
    }

    function filtrarDescricao (): string
    {
        preg_match_all('/<p itemprop="description">(.*?)<\/p>/s', $this->html, $matches);
        $descricao = $matches[0][0];

        return $descricao;
    }

    function filtrarPreco (): array
    {
        try{
            $fullPrice = 0;
            $descPrice = 0;
            // Captura do preço total do Produto
            preg_match_all('/<del class="default-price reduce ">(.*?)<\/del>/s', $this->html, $matches);

            if(count($matches) > 0 && !empty($matches[1]))
            {
                $fullPrice = $matches[1][0];
            }

            // Captura do preço com desconto do Produto
            preg_match_all('/<div class="default-price">(.*?)<\/div>/s', $this->html, $matches);

            if(count($matches) > 0)
            {
                $descPrice = $matches[1][0];
            }


            $preco[0] = 0;
            $preco[1] = 0;

            if(count($matches) > 0)
            {
                $preco[0] = $fullPrice;
                $preco[1] = $descPrice;
            }

            return $preco;
        }catch (Exception $ex){
            return "Produto não disponível";
        }
    }

    function filterImgUrl (): String
    {


        // Captura de iamgem
        $xpath = new DOMXPath($this->dom);
        $selectorXpath = '//*[@id="content"]/div[2]/section/section[1]/figure/img';
        $imgsXpath = $xpath->query($selectorXpath);

        foreach ($imgsXpath as $imgXpath)
        {
            $srcXpath = $imgXpath->getAttribute('src');
            $url =  $srcXpath;
        }

        if($url != null)
        {
            return $url;
        }

        return header("Location: notFound.php");
    }

    function setProduto (): Produto
    {
        $nome = $this->filtrarNome();
        $desc = $this->filtrarDescricao();
        $preco = $this->filtrarPreco();
        $url = $this->filterImgUrl();
        $produto = new Produto($url, $nome, $desc, $preco);
        return $produto;
    }
}