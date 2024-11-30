// script_rh.js

const campos = [
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

    // Campos de Dados Pessoais
    { id: 'estado_civil', label: 'Estado Civil', type: 'select', options: ['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)'] },
    { id: 'numero_filhos', label: 'Número de Filhos', type: 'number' },

    // Campos de Benefícios e Férias
    { id: 'vale_transporte', label: 'Vale Transporte', type: 'checkbox' },
    { id: 'vale_refeicao', label: 'Vale Refeição', type: 'checkbox' },
    { id: 'férias', label: 'Férias', type: 'date' },
    { id: 'horario_trabalho', label: 'Horário de Trabalho', type: 'text' },

    // Campos de Saúde e Bem-estar
    { id: 'plano_saude', label: 'Plano de Saúde', type: 'checkbox' },
    { id: 'plano_odonto', label: 'Plano Odontológico', type: 'checkbox' },

    // Outros campos
    { id: 'observacoes', label: 'Observações', type: 'textarea' },

    // Campos adicionais sugeridos

    // Informações de Documentos e Registros
    { id: 'carteira_trabalho', label: 'Carteira de Trabalho' },
    { id: 'pis_pasep', label: 'Número do PIS/PASEP' },
    { id: 'data_emissao_cpf', label: 'Data de Emissão do CPF', type: 'date' },
    { id: 'tipo_contrato', label: 'Tipo de Contrato', type: 'select', options: ['CLT', 'PJ', 'Estagiário', 'Autônomo'] },

    // Área de Trabalho e Jornada
    { id: 'turno_trabalho', label: 'Turno de Trabalho', type: 'select', options: ['Manhã', 'Tarde', 'Noite'] },
    { id: 'carga_horaria_semanal', label: 'Carga Horária Semanal', type: 'number' },
    { id: 'local_trabalho', label: 'Local de Trabalho' },
    { id: 'setor', label: 'Setor' },

    // Informações sobre Dependentes
    { id: 'nome_dependente', label: 'Nome do Dependente' },
    { id: 'data_nascimento_dependente', label: 'Data de Nascimento do Dependente', type: 'date' },
    { id: 'relacao_dependente', label: 'Relação com o Dependente', type: 'select', options: ['Filho(a)', 'Esposa(o)', 'Pai', 'Mãe', 'Outro'] },

    // Formação Acadêmica
    { id: 'grau_escolaridade', label: 'Grau de Escolaridade', type: 'select', options: ['Ensino Fundamental', 'Ensino Médio', 'Ensino Superior', 'Pós-graduação'] },
    { id: 'curso_formacao', label: 'Curso/Área de Formação' },
    { id: 'instituicao_ensino', label: 'Instituição de Ensino' },
    { id: 'ano_conclusao', label: 'Ano de Conclusão', type: 'number' },

    // Certificações e Treinamentos
    { id: 'certificacao', label: 'Certificação ou Treinamento Concluído' },
    { id: 'data_conclusao', label: 'Data de Conclusão', type: 'date' },
    { id: 'instituicao_certificacao', label: 'Instituição/Entidade' },
    { id: 'tipo_certificado', label: 'Tipo de Certificado', type: 'select', options: ['Online', 'Presencial'] },

    // Histórico de Avaliações
    { id: 'data_avaliacao', label: 'Data da Última Avaliação de Desempenho', type: 'date' },
    { id: 'resultado_avaliacao', label: 'Resultado da Avaliação' },
    { id: 'comentario_avaliacao', label: 'Comentário da Avaliação', type: 'textarea' },

    // Salário e Benefícios
    { id: 'bonus_comissao', label: 'Bônus ou Comissão', type: 'number' },
    { id: 'plano_carreira', label: 'Plano de Carreira' },
    { id: 'descontos_aplicados', label: 'Descontos Aplicados', type: 'number' },
    { id: 'beneficio_flexivel', label: 'Benefício Flexível', type: 'checkbox' }
];

function carregarCampos() {
    const container = document.getElementById('campo-lista');

    campos.forEach(campo => {
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
window.onload = carregarCampos;
