# Desafio PHP - Elevador com Fila (FIFO)

## Descrição

Simula um elevador que obedece ao conceito de fila (First-In, First-Out). Cada chamada adiciona um andar à fila, e o elevador atende os chamados na ordem de chegada.

## Estrutura

- `Elevador.php`: classe principal com métodos e atributos definidos.
- `index.php`: script de teste da simulação.
- `README.md`: este arquivo.

### Pré-requisitos:

- PHP instalado (ou XAMPP no Windows)

### Passos:

1. Copie os arquivos para a pasta `C:\xampp\htdocs\elevador-php\`
2. Inicie o Apache no XAMPP
3. No navegador, acesse:
   http://localhost/elevador-php/index.php

| Requisito                                            | Status | Descrição                                     |
| ---------------------------------------------------- | ------ | --------------------------------------------- |
| Classe `Elevador`                                    | ✅     | Classe principal criada com todos os métodos. |
| Atributos `filaChamados`, `andarAtual`, `capacidade` | ✅     | Implementados conforme solicitado.            |
| Método `__construct(int $capacidade)`                | ✅     | Inicializa os atributos.                      |
| Método `chamar(int $andar)`                          | ✅     | Valida e adiciona o andar à fila.             |
| Método `mover()`                                     | ✅     | Move o elevador para o próximo andar da fila. |
| Método `getAndarAtual(): int`                        | ✅     | Retorna o andar atual.                        |
| Método `getChamadosPendentes(): SplQueue`            | ✅     | Retorna uma cópia da fila (com `clone`).      |

---

## 💡 Exemplo de saída

Elevador chamado para o andar 3. Elevador chamado para o andar 1. Elevador chamado para o andar 7.
Chamados pendentes: - Andar 3 - Andar 1 - Andar 7
Movimentando elevador: Movendo do andar 0 para o andar 3... Elevador chegou ao andar 3. Movendo do andar 3 para o andar 1... Elevador chegou ao andar 1. Movendo do andar 1 para o andar 7... Elevador chegou ao andar 7. Nenhum chamado pendente.

## 👩‍💻 Desenvolvido por

**Livya Mendes**  
Link de acesso do projeto:https://github.com/mendesslc/elevador-php
