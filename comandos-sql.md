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

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id) VALUE (
 'Meu pai ganhou na mega-sena',
 'To rico, tchau pra vcs',
 'Jogou e ganhou',
 'premio.jpg',
 1
);
INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id) VALUE (
 'O poder do came came ha',
 'Destroidor e vencedor em lutas',
 'Baita golpe',
 'batalha.jpg',
 4
);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id) VALUE (
 'De volta para o futuro',
 'Um carro ao qual efetua em voiagens no tempo ',
 'Delorian',
 'ate1984.jpg',
 3
);
INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id) VALUE (
 'Os golfinhos possuem um time',
 'Miami Dolphins é o time predileto e com boas ações paras a natureza e mares  ',
 'Dolphins do bem',
 'golfinhos.jpg',
 2
);


