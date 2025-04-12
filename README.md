# Padrão MVC (Model-View-Controller) 
Em PHP organiza o código em três camadas principais. Os controllers processam as requisições e coordenam as ações, os models gerenciam os dados e a lógica de negócios, enquanto as views são responsáveis pela exibição dos dados ao usuário. 
# Estrutura MVC em PHP 🏗️

**📦 Organização do Projeto**  
```
estrutura-mvc-php/
├── app/
│   ├── controllers/    # Controladores (lógica de aplicação)
│   ├── models/         # Modelos (dados e regras de negócio)
│   └── views/          # Visualizações (interface do usuário)
├── public/            # Pasta pública
│   └── index.php      # Ponto de entrada único
└── vendor/            # Dependências externas
```

## 🔄 Fluxo MVC
1. **Model (Modelo)**  
   - Gerencia dados e regras de negócio  
   - Interage com o banco de dados  

2. **View (Visão)**  
   - Exibe informações ao usuário  
   - Contém templates HTML/PHP  

3. **Controller (Controlador)**  
   - Recebe requisições do usuário  
   - Coordena Models e Views  

## 🚀 Como usar
1. Acesse via `public/index.php`  
2. As rotas direcionam para os controllers  
3. Os controllers processam e retornam views  

> ✅ Estrutura limpa e organizada para projetos PHP escaláveis
