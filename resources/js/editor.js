    // Função para lidar com o evento de seleção de arquivo
    function handleFileSelect(evt) {
        var files = evt.target.files; // Lista de arquivos selecionados
  
        // Limpa o container de pré-visualização antes de adicionar novas imagens
        var previewContainer = document.getElementById('preview-container');
        previewContainer.innerHTML = '';
  
        // Loop através dos arquivos selecionados
        for (var i = 0; i < files.length; i++) {
          var file = files[i];
  
          // Verifica se é uma imagem
          if (!file.type.match('image.*')) {
            continue;
          }
  
          var reader = new FileReader();
  
          // Função de callback para quando a leitura do arquivo estiver completa
          reader.onload = (function(theFile) {
            return function(e) {
              // Cria um elemento de pré-visualização para a imagem
              var imagePreview = document.createElement('div');
              imagePreview.classList.add('image-preview');
  
              // Cria a imagem dentro do elemento de pré-visualização
              var img = document.createElement('img');
              img.src = e.target.result;
              imagePreview.appendChild(img);
  
              // Botão para excluir a imagem da pré-visualização
              var deleteBtn = document.createElement('button');
              deleteBtn.innerHTML = '&times;';
              deleteBtn.classList.add('delete-btn');
              deleteBtn.addEventListener('click', function() {
                imagePreview.remove();
              });
              imagePreview.appendChild(deleteBtn);
  
              // Adiciona a pré-visualização ao container de pré-visualização
              previewContainer.appendChild(imagePreview);
            };
          })(file);
  
          // Lê o conteúdo do arquivo como URL de dados
          reader.readAsDataURL(file);
        }
      }
  
      // Adiciona um event listener para o input de arquivo
      document.getElementById('file-input').addEventListener('change', handleFileSelect, false);