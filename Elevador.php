<?php

class Elevador
{
    private SplQueue $filaChamados;
    private int $andarAtual;
    private int $capacidade;

    public function __construct(int $capacidade)
    {
        $this->filaChamados = new SplQueue();
        $this->andarAtual = 0; // térreo
        $this->capacidade = $capacidade;
    }


    public function chamar(int $andar): void
    {
        if ($andar < 0) {
            echo "Andar inválido: $andar\n";
            return;
        }

        $this->filaChamados->enqueue($andar);
        echo "Elevador chamado para o andar $andar.\n";
    }

    public function mover(): void
    {
        if ($this->filaChamados->isEmpty()) {
            echo "Nenhum chamado pendente.\n";
            return;
        }

        $proximoAndar = $this->filaChamados->dequeue();
        echo "Movendo do andar {$this->andarAtual} para o andar $proximoAndar...\n";
        $this->andarAtual = $proximoAndar;
        echo "Elevador chegou ao andar {$this->andarAtual}.\n";
    }

    public function getAndarAtual(): int
    {
        return $this->andarAtual;
    }

    
    public function getChamadosPendentes(): SplQueue
    {
        return clone $this->filaChamados; 
    }
}
