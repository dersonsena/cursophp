-- Inserindo dados normalmente
INSERT INTO alunos (nome, idade, email, status) VALUES ('Maria Lúcia de Azevedo', 20, 'maria@email.com.br', 1);
INSERT INTO alunos (nome, idade, email, status) VALUES ('João Carlos Silva', 15, 'joao@email.com.br', 1);
INSERT INTO alunos (nome, idade, email, status) VALUES ('Gabriela Bastos', 25, 'gabriela@email.com.br', 1);

-- Removendo campo 'idade' que nao e requerido
INSERT INTO alunos (nome, email, status) VALUES ('Aluno sem Idade', 'alunosemidade@email.com.br', 1);

-- Removendo campo 'status' que por default e '1'
INSERT INTO alunos (nome, email) VALUES ('Aluno sem Idade', 'alunosemidade@email.com.br');

-- Removendo campo 'status' que por default e '1'
INSERT INTO alunos (nome, email) VALUES ('Aluno para Deletar', 'alunodeletar@email.com.br');