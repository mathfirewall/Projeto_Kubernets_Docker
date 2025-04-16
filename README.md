# Projeto Kubernetes + Docker

Este projeto demonstra a integração de aplicações web com Docker e Kubernetes, utilizando imagens Docker personalizadas e orquestração via YAML.

## 🧱 Estrutura do Projeto

O repositório está organizado em três componentes principais:

- **frontend/**: Contém a interface web da aplicação.
- **backend/**: Inclui a lógica de negócio e as APIs.
- **database/**: Responsável pela persistência dos dados.

Além disso, há arquivos de configuração e scripts:

- **deployment.yml**: Define os deployments do Kubernetes.
- **services.yml**: Especifica os serviços e exposições.
- **start.sh**: Script para inicialização automatizada dos serviços.

## 🚀 Como Executar

1. **Pré-requisitos**:
   - Docker instalado.
   - Minikube ou outro ambiente Kubernetes configurado.

2. **Construção das Imagens Docker**:
   Navegue até cada diretório (`frontend/`, `backend/`, `database/`) e execute:
   ```bash
   docker build -t nome-da-imagem .
   ```

3. **Inicialização com o Script**:
   No diretório raiz do projeto, execute:
   ```bash
   chmod +x start.sh
   ./start.sh
   ```

4. **Acesso à Aplicação**:
   Após a implantação, a aplicação estará disponível no endereço configurado no `services.yml`.

## 🛠️ Tecnologias Utilizadas

- **Docker**: Containerização das aplicações.
- **Kubernetes**: Orquestração dos containers.
- **PHP, HTML, CSS, JavaScript**: Tecnologias utilizadas no desenvolvimento da aplicação.
- **Shell Script**: Automatização de tarefas.

## 📄 Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).
