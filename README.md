# Kutter

Sistema web para gerenciamento e documentação de chicotes elétricos.
O Kutter é um projeto pessoal desenvolvido com o objetivo de facilitar a criação, organização e documentação dos circuitos que compõem um chicote elétrico.

<br />

### Objetivo

<br />

Permitir que um projeto de chicote seja definido de forma estruturada, reunindo informações sobre seus circuitos e componentes, como:

- Circuitos;
- Cabos;
- Terminais;
- Emendas;
- Conectores;
- Cores dos cabos;
- Espessura/seção dos cabos;
- Comprimento de corte;
- Comprimento de desponte;

E outras características relevantes para a fabricação do chicote.
A partir dessas informações, o sistema deverá gerar automaticamente a documentação necessária para fabricação e conferência do chicote.

<br />

### Funcionalidades previstas

<br />

- [ ] Criar e gerenciar projetos de chicotes;
- [ ] Criar e gerenciar circuitos;
- [ ] Cadastrar cabos e suas características;
- [ ] Definir terminais e conectores;
- [ ] Cadastrar e gerenciar emendas;
- [ ] Informar comprimento de corte e desponte;
- [ ] Definir cor e seção dos cabos;
- [ ] Gerar documentação do chicote em PDF;
- [ ] Gerar lista de corte;
- [ ] Exportar lista de corte em CSV/TSV;
- [ ] Exportar dados para Excel;
- [ ] Validar inconsistências no projeto.

<br />

### Tecnologias

<br />

O projeto está sendo desenvolvido utilizando:

- [x] PHP 8.3+
- [x] Composer
- [x] HTML/CSS/JavaScript
- [x] SQLite/MySQL
- [x] PHPUnit
- [x] Dompdf

O projeto inicialmente **não** utiliza frameworks PHP, com o objetivo de manter a aplicação simples e permitir o estudo dos fundamentos da linguagem e da arquitetura de aplicações web.

<br />

### Arquitetura

<br />

O projeto segue uma organização baseada em MVC, utilizando:

<br />

```sh
public/       → ponto de entrada da aplicação
src/
├── Controllers/
├── Models/
├── Repositories/
├── Services/
└── Views/
tests/        → testes automatizados

```

<br />

O carregamento das classes é realizado através do autoload PSR-4 do Composer.

<br />

### Instalação

<br />

Clone o repositório e instale as dependências:

<br />

```sh
git clone https://github.com/wellison-md/kutter
cd kutter
composer install
```

Execute a aplicação utilizando o servidor PHP ou o ambiente de desenvolvimento escolhido.

<br />

### Status

#### :warning: Em desenvolvimento :warning:

O projeto está em fase inicial de desenvolvimento e sua arquitetura e funcionalidades podem sofrer alterações. Acesse e baixe as atualizações da branch de desenvolvimento para conferir as atualizações

<br />

### Licença

<br />

Projeto pessoal para fins de estudo e desenvolvimento.

<br />