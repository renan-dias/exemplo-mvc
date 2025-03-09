E aí, pessoal! 

## Bem-vindos ao Projeto Base MVC para a Galera do 3º Sistemas!

Este repositório é o ponto de partida para vocês explorarem o mundo do desenvolvimento web com PHP, utilizando a arquitetura MVC (Model-View-Controller) e o poder do PDO para interagir com bancos de dados. Preparem-se para criar projetos incríveis e turbinar seus portfólios!

### O Que é MVC?

MVC é um padrão de arquitetura que divide a aplicação em três partes principais:

* **Model:** Lida com os dados e a lógica de negócios.
* **View:** Apresenta os dados ao usuário.
* **Controller:** Gerencia as interações entre o Model e a View.

Essa separação torna o código mais organizado, fácil de manter e escalável.

### Por Que Usar PDO?

PDO (PHP Data Objects) é uma extensão do PHP que fornece uma interface consistente para acessar diferentes bancos de dados. Ele oferece segurança, flexibilidade e facilidade de uso.

### Preparando o Terreno

Antes de começarmos, certifique-se de ter o seguinte instalado:

* PHP 7.4+
* MySQL ou MariaDB
* Um editor de código (VS Code, Sublime Text, etc.)

### Primeiros Passos

1.  **Clone este repositório:**

    ```bash
    git clone [URL_DO_SEU_REPOSITÓRIO]
    ```

2.  **Configure o banco de dados:**

    * Abra o arquivo `config/config.php` e preencha as informações do seu banco de dados.
    * Execute o script `database.sql` no seu banco de dados para criar as tabelas iniciais.

3.  **Inicie o servidor PHP:**

    ```bash
    php -S localhost:8000
    ```

4.  **Abra o navegador:**

    * Acesse `http://localhost:8000` para ver a aplicação em funcionamento.

### Explorando a Estrutura

* `controllers/`: Aqui ficam os controladores, responsáveis por receber as requisições, interagir com os models e escolher as views.
* `models/`: Os models cuidam da lógica de negócios e da interação com o banco de dados.
* `views/`: As views são responsáveis por exibir os dados ao usuário.
    * `layout/`: Contém o layout base da aplicação (header, footer, etc.).
    * `includes/`: Para views reutilizáveis.
* `config/`: Arquivos de configuração.
* `public/`: Arquivos estáticos (CSS, JavaScript, imagens).

### Criando Seu Próprio Projeto

Agora vem a parte divertida! Use este projeto base como ponto de partida para criar seu próprio projeto de portfólio.

**Sugestões de Projetos:**

* **Loja Virtual de Quadrinhos (Kauã):**
    * Cadastro de quadrinhos por categoria.
    * Carrinho de compras e checkout.
    * Sistema de avaliação e comentários.
* **Sistema de Gerenciamento de Pizzaria (Guilherme):**
    * Cadastro de pizzas e ingredientes.
    * Gerenciamento de pedidos e entregas.
    * Sistema de promoções e descontos.
* **Blog Pessoal:**
    * Cadastro de posts por categoria.
    * Sistema de comentários.
    * Página de contato.
* **Gerenciador de tarefas:**
    * Cadastre suas tarefas.
    * Edite e exclua tarefas.
    * Marque tarefas como completas.

**Dicas:**

* **Comece pequeno:** Não tente criar um projeto gigante de uma vez. Comece com funcionalidades básicas e vá adicionando mais aos poucos.
* **Use o Bootstrap:** O Bootstrap é um framework CSS que facilita a criação de interfaces responsivas e bonitas.
* **Comente seu código:** Isso ajuda você e outros a entenderem o que cada parte do código faz.
* **Use o Git:** O Git é um sistema de controle de versão que permite acompanhar as mudanças no seu código e colaborar com outros.

### Personalizando o Projeto Base

Sinta-se à vontade para modificar este projeto base para atender às suas necessidades.

**Exemplos:**

* Adicione novas tabelas ao banco de dados.
* Crie novos controladores e models para implementar novas funcionalidades.
* Modifique o CSS para personalizar o design da aplicação.
* Adicione JavaScript para criar interações dinâmicas.

### Contribuindo

Adoramos contribuições! Se você encontrar um bug ou tiver uma sugestão de melhoria, abra uma issue ou envie um pull request.

### Recursos Úteis

* Documentação do PHP: [https://www.php.net/docs.php](https://www.php.net/docs.php)
* Documentação do PDO: [https://www.php.net/manual/pt_BR/book.pdo.php](https://www.php.net/manual/pt_BR/book.pdo.php)
* Documentação do Bootstrap: [https://getbootstrap.com/docs/5.3/getting-started/introduction/](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
* Documentação do Git: [https://git-scm.com/doc](https://git-scm.com/doc)

### Vamos Começar!

Agora é hora de colocar a mão na massa e criar projetos incríveis! Lembrem-se, o aprendizado é um processo contínuo. Não tenham medo de experimentar, pesquisar e pedir ajuda quando necessário.

Bons estudos e boa sorte!