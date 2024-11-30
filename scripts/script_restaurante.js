const camposRestaurante = [
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

    // Campos de Menu e Pratos
    { id: 'nome_prato', label: 'Nome do Prato' },
    { id: 'categoria_prato', label: 'Categoria do Prato', type: 'select', options: ['Entrada', 'Prato Principal', 'Sobremesa', 'Bebidas'] },
    { id: 'preco_prato', label: 'Preço do Prato', type: 'number' },
    { id: 'ingredientes', label: 'Ingredientes' },
    { id: 'tempo_preparo', label: 'Tempo de Preparo', type: 'number' },

    // Campos de Funcionamento e Reservas
    { id: 'horario_funcionamento', label: 'Horário de Funcionamento', type: 'text' },
    { id: 'capacidade_restaurante', label: 'Capacidade do Restaurante', type: 'number' },
    { id: 'numero_reservas', label: 'Número de Reservas', type: 'number' },

    // Campos de Benefícios e Férias
    { id: 'vale_transporte', label: 'Vale Transporte', type: 'checkbox' },
    { id: 'vale_refeicao', label: 'Vale Refeição', type: 'checkbox' },
    { id: 'férias', label: 'Férias', type: 'date' },

    // Outros Campos
    { id: 'observacoes', label: 'Observações', type: 'textarea' }
];

function carregarCamposRestaurante() {
    const container = document.getElementById('campo-lista-restaurante');

    camposRestaurante.forEach(campo => {
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
window.onload = carregarCamposRestaurante;
