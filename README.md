# Projeto Laravel com MongoDB e Laravel Breeze

Este é um projeto Laravel configurado para utilizar o MongoDB como banco de dados, com autenticação via Laravel Breeze e interface de usuário frontend em ReactJS com TypeScript.

## Configuração do Ambiente

### Requisitos

- Docker
- Docker Compose

### Configuração do Docker com Sail

Este projeto utiliza o Laravel Sail para gerenciar o ambiente de desenvolvimento Docker. Certifique-se de ter o Docker e Docker Compose instalados.

Para iniciar o ambiente, execute o seguinte comando na raiz do projeto:

```bash
./vendor/bin/sail up
```

### Configuração do MongoDB

Este projeto utiliza o MongoDB como banco de dados. O MongoDB já está configurado e integrado ao ambiente Docker por meio do Laravel Sail.

### Configuração do Laravel Breeze com ReactJS e TypeScript

Este projeto utiliza o Laravel Breeze para autenticação, com interface de usuário frontend em ReactJS e TypeScript.

Para instalar as dependências do frontend, execute o seguinte comando na raiz do projeto:

```bash
npm install && npm run dev
```

## Utilização do Comando Sail

Para simplificar o uso do Laravel Sail, é recomendável criar um alias para o comando `sail`. Para fazer isso, siga as instruções abaixo:

1. Abra o arquivo `.bash_profile` (ou `.bashrc` ou `.zshrc`, dependendo do seu shell) em um editor de texto, por exemplo:

```bash
nano ~/.bash_profile
```

2. Insira o seguinte comando no arquivo:

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

3. Salve o arquivo e feche o editor.

Agora você pode usar o comando `sail` para interagir com o ambiente Docker do Laravel Sail de forma simplificada.

## Contribuindo

Fique à vontade para contribuir com melhorias, reportar problemas ou enviar solicitações de recursos. Basta abrir uma issue ou criar um pull request neste repositório.

## Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).


