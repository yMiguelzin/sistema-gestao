document.addEventListener('DOMContentLoaded', function () {
    // Função para capturar as opções selecionadas
    function coletarDadosSelecionados() {
        const selectedFields = [];
        
        campos.forEach(campo => {
            const input = document.getElementById(campo.id);
            if (input && input.checked) {
                selectedFields.push(campo.id);
            }
        });
        
        return selectedFields;
    }

    // Lógica para quando o botão "Criar Sistema" for clicado
    const btnCriarSistema = document.getElementById('btnCriarSistema');
    if (btnCriarSistema) {
        btnCriarSistema.addEventListener('click', function () {
            const dadosSelecionados = coletarDadosSelecionados();
            
            // Enviar os dados selecionados via AJAX para o PHP
            fetch('processa_criacao.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ camposSelecionados: dadosSelecionados })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'pagina_exibicao.php?id_tabela=' + data.idTabela;
                } else {
                    alert('Erro ao criar sistema.');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });
    }
    
    // Lógica para mostrar/ocultar formulários de alteração
    const editInfoButton = document.getElementById('edit-info');
    const changePasswordButton = document.getElementById('change-password-toggle'); // Verifique se o ID correto é 'change-password-toggle'
    const editInfoForm = document.getElementById('edit-info-form');
    const changePasswordForm = document.getElementById('change-password-form');

    // Verifique se os elementos existem antes de adicionar os listeners
    if (editInfoButton && editInfoForm) {
        editInfoButton.addEventListener('click', function () {
            editInfoForm.style.display = editInfoForm.style.display === 'block' ? 'none' : 'block';
        });
    }

    if (changePasswordButton && changePasswordForm) {
        changePasswordButton.addEventListener('click', function () {
            changePasswordForm.style.display = changePasswordForm.style.display === 'block' ? 'none' : 'block';
        });
    }

    // Função para exibir mensagens
    function displayMessage(message) {
        const messageContainer = document.getElementById('message-container');
        if (messageContainer) {
            messageContainer.innerHTML = `<p>${message}</p>`;
        }
    }

    // Lógica para troca de email
    const changeEmailButton = document.getElementById('change-email');
    if (changeEmailButton) {
        changeEmailButton.addEventListener('click', function () {
            displayMessage('Seu email foi trocado com sucesso!');
        });
    }

    // Lógica para troca de senha
    const changePasswordBtn = document.getElementById('change-password');
    if (changePasswordBtn) {
        changePasswordBtn.addEventListener('click', function () {
            displayMessage('Sua senha foi trocada com sucesso!');
        });
    }

    // Lógica para confirmação de exclusão de conta
    const deleteAccountButton = document.getElementById('delete-account');
    if (deleteAccountButton) {
        deleteAccountButton.addEventListener('click', function () {
            const confirmDeletion = confirm('Tem certeza que deseja excluir sua conta? Esta ação não pode ser desfeita.');
            if (confirmDeletion) {
                // Aqui você pode implementar a lógica para excluir a conta no banco de dados
                displayMessage('Conta excluída com sucesso!');
            }
        });
    }
});
