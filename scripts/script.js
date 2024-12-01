document.addEventListener('DOMContentLoaded', function () {
    // Lógica para adicionar um produto
    const addProductForm = document.getElementById('add-product-form');
    if (addProductForm) {
        addProductForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const nome = document.getElementById('produto-nome').value;
            const descricao = document.getElementById('produto-descricao').value;
            const preco = document.getElementById('produto-preco').value;
            const quantidade = document.getElementById('produto-quantidade').value;

            if (!nome || !preco || !quantidade) {
                alert('Todos os campos são obrigatórios!');
                return;
            }

            const formData = new FormData();
            formData.append('nome', nome);
            formData.append('descricao', descricao);
            formData.append('preco', preco);
            formData.append('quantidade', quantidade);

            fetch('produtos/adicionar.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(data => {
                alert('Produto adicionado com sucesso!');
                location.reload();
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });
    }
});
