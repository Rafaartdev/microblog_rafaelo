# Operações CRUD usando SQL

## Resumo

C: Criar/inserir dados -> INSERT
R: (R) Ler dsdos       -> SELECT
U: (U) Atualizar dados -> UPDATE
D: (D) Excluir dados   -> DELETE

## Exemplo para tabela "usuarios"

### Insereindo usuarios

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Rafael', 'rafael.osilveira@gmail.com', '102030rafa', 
'admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Golfinho', 'golfinho@gmail.com', '102030gol', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('OUTATIME', 'delorian@gmail.com', '102030del', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Goku', 'goku@gmail.com', 'dragon10', 'editor');