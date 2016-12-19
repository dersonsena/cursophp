SELECT * FROM alunos

-- Ordenando alunos por nome
SELECT * FROM alunos ORDER BY nome ASC;

-- Selecionando somente algumas colunas
SELECT nome, email FROM alunos ORDER BY nome ASC;

-- Fazendo filtro com clausula WHERE
SELECT * FROM alunos WHERE email = 'maria@email.com.br' ORDER BY nome ASC;

-- Limitando registros
SELECT * FROM alunos LIMIT 3