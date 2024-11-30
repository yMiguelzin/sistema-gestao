const camposMercado = [
    // Campos de Identificação
    { id: 'nome_completo', label: 'Nome Completo' },
    { id: 'data_nascimento', label: 'Data de Nascimento', type: 'date' },
    { id: 'cpf', label: 'CPF' },
    { id: 'rg', label: 'RG' },
    { id: 'sexo', label: 'Sexo', type: 'select', options: ['Masculino', 'Feminino', 'Outro'] },

    // Campos de Contato
    { id: 'email', label: 'Email', type: 'email' },
    { id: 'telefone', label: 'Telefone', type: 'tel' },
    { id: 'celular', label: 'Celular', type: 'tel' },
    { id: 'endereco', label: 'Endereço' },
    { id: 'bairro', label: 'Bairro' },
    { id: 'cidade', label: 'Cidade' },
    { id: 'estado', label: 'Estado', type: 'select', options: ['SP', 'RJ', 'MG', 'RS', 'BA'] },

    // Campos de Dados Profissionais
    { id: 'cargo', label: 'Cargo' },
    { id: 'departamento', label: 'Departamento' },
    { id: 'salario', label: 'Salário', type: 'number' },
    { id: 'data_admissao', label: 'Data de Admissão', type: 'date' },
    { id: 'data_demissao', label: 'Data de Demissão', type: 'date' },

    // Campos de Produtos e Estoque
    { id: 'produto_nome', label: 'Nome do Produto' },
    { id: 'categoria_produto', label: 'Categoria do Produto', type: 'select', options: ['Alimentos', 'Bebidas', 'Limpeza', 'Higiene', 'Outros'] },
    { id: 'quantidade_estoque', label: 'Quantidade em Estoque', type: 'number' },
    { id: 'preco_unitario', label: 'Preço Unitário', type: 'number' },

    // Campos de Vendas e Finanças
    { id: 'preco_venda', label: 'Preço de Venda', type: 'number' },
    { id: 'desconto_produto', label: 'Desconto Aplicado', type: 'number' },
    { id: 'data_entrada', label: 'Data de Entrada do Produto', type: 'date' },
    { id: 'fornecedor', label: 'Fornecedor' },

    // Campos de Benefícios e Férias
    { id: 'vale_transporte', label: 'Vale Transporte', type: 'checkbox' },
    { id: 'vale_refeicao', label: 'Vale Refeição', type: 'checkbox' },
    { id: 'férias', label: 'Férias', type: 'date' },

    // Outros Campos
    { id: 'observacoes', label: 'Observações', type: 'textarea' }
];

function carregarCamposMercado() {
    const container = document.getElementById('campo-lista-mercado');

    camposMercado.forEach(campo => {
        const div = document.createElement('div');
        div.classList.add('form-check');
        
        const label = document.createElement('label');
        label.classList.add('form-check-label');
        label.setAttribute('for', campo.id);
        label.textContent = campo.label;

        const input = document.createElement('input');
        input.classList.add('form-check-input');
        input.type = 'checkbox';
        input.name = campo.id;
        input.id = campo.id;

        div.appendChild(input);
        div.appendChild(label);

        container.appendChild(div);
    });
}

// Carregar os campos ao carregar a página
window.onload = carregarCamposMercado;
