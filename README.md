# Projeto: Formulário de Cálculo FATEC
**Este projeto foi desenvolvido como parte da atividade de reposição de faltas, com o objetivo de aplicar conceitos de desenvolvimento web utilizando HTML, CSS, Bootstrap e PHP.**
**O sistema consiste em um formulário simples que coleta dados do usuário e, após o envio, exibe esses dados de forma organizada, juntamente com um cálculo de tabuada.**

# Tecnologias Utilizadas
## **Frontend:**

- **HTML5**

- **CSS3 (declarado diretamente na tag <style> do cabeçalho como pedido pelo professor)**

- **Bootstrap 5**

## Backend:
- **PHP**

# Como Executar o Projeto
- **Clone ou faça o download deste repositório.**

- **Você precisará de um ambiente com PHP instalado.**

- **Navegue até a pasta raiz do projeto pelo terminal.**

- **Inicie o servidor embutido do PHP com o comando:**

``php -S localhost:8000``

> Tal como o professor Ronan e o Professor Anderson passaram, esse número pode ser escolhido aleatoriamente por você, pois temos 65.536 possibilidades de portas.

- **Abra seu navegador e acesse http://localhost:8000/**

# Funcionalidades Implementadas
- **Formulário Interativo: Coleta de nome, semestre (1-6) e um número (1-10).**

- **Processamento com PHP: Os dados são enviados via método POST para a página resultado.php.**

- **Card de Apresentação: Exibição do nome do aluno, semestre atual e o cálculo de quantos semestres faltam para a conclusão do curso (considerando 6 semestres no total).**

- **Geração de Tabuada: Cálculo e exibição da tabuada do número fornecido pelo usuário, do 0 ao 10.**

- **Layout Responsivo: Utilização do sistema de grid e componentes do Bootstrap para uma apresentação organizada.**

# Desafios e Aprendizados

O principal desafio técnico durante o desenvolvimento foi a estilização e o alinhamento dos cards de resultado.
Inicialmente, o conteúdo de tamanhos diferentes fazia com que os cards ficassem com alturas desiguais. Para resolver isso, foi necessário um estudo mais aprofundado sobre o Flexbox, especialmente as propriedades display: flex, flex-direction: column e flex-grow: 1. 
A solução foi encontrada após algumas tentativas e consultas a materiais na internet, incluindo: Tópicos do Stack Overflow sobre alinhamento de colunas, o curso que o professor passou sobre Flexbox e com toda a sinceridade do mundo, a IA também!

## Observação Sobre a Atividade
Conforme a orientação, a lógica e a implementação do projeto foram realizadas como uma tentativa real de aplicar o conteúdo. 
Para os desafios de layout e para a organização da estrutura final do código (e também deste README), foram consultadas diversas fontes, incluindo a documentação oficial do Bootstrap e discussões na comunidade, buscando otimizar a clareza e a organização do resultado. 
O foco de usar essas ferramentas como um auxílio para o aprendizado, e não para a geração da solução. **O importante é ter conteúdo pra se lembrar nas provas que vem a seguir.**
