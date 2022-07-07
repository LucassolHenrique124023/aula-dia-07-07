<?php
/*
*DADOS DAS CATEGORIAS DOS PRODUTOS
*/
$dadoscategorias = array(
    'pao'=>'Pão',
    'doces'=>'Doces',
    'bolos'=>'Bolos',
    'salgados'=>'Salgados',
    'bebidas'=>'Bebidas',
    'sorvete'=>'Sorvete'
);
/*
*encarregado das bebidas 
*/
$dadosProdutos = array(
    0=> array('nome'=>'água',
    "imagem"=>'garrafa de água.jpg',
    "preco"=>8.30,
    "descricao"=> 'descrição',
    'categoria'=>'bebidas'),

    1=> array("nome"=>"coca-cola",
    "imagem"=>"coca cola.jpg",
    'preco'=> 12.30,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    2=> array("nome"=>"coca-cola sabor café",
    "imagem"=>'coca-cola sabor café.webp',
    'preco'=> 11.30,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    3=> array("nome"=>"água mineral premium",
    "imagem"=>'água mineral natural premium.webp',
    'preco'=> 1.14,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    4=> array("nome"=>"chá",
    "imagem"=>'chá.png',
    'preco'=> 3.30,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    5=> array("nome"=>"suco de acelero",
    "imagem"=>'suco caju e cerola.webp',
    'preco'=> 105.54,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    6=> array("nome"=>"suco de manga",
    "imagem"=>'suco-manga.jpg',
    'preco'=> 17.50,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    7=> array("nome"=>"suco de limão",
    "imagem"=>'suco de limão.webp',
    'preco'=> 33.30,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    8=> array("nome"=>"fanta uva",
    "imagem"=>'fanta uva.png',
    'preco'=> 21.00,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),
    
    9=> array("nome"=>"fanta laranja",
    "imagem"=>'fanta laranja.webp',
    'preco'=> 11.00,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),

    10=> array("nome"=>"suco laranja",
    "imagem"=>'suco-de-Laranja-1.png',
    'preco'=> 101.00,
    "descricao"=> "descrição",
    "categoria"=> "bebidas"),
);
$dadosReceita = array(
    
    0=> array('titulo'=>'água','imagem'=>'água-receita.jpg','descricao'=>'Coloque os cristais em uma jarra de vidro. Adicione água mineral de boa qualidade e aguarde pelo menos 30 minutos para beber. Quanto mais tempo deixar, mais energizada ficará a água (até 8 horas).','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/fAODqYULlV0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    1=> array('titulo'=>'coca cola','imagem'=>'coca-cola-imagem.jpg','descricao'=>'Para fazer Coca-Cola, segundo a receita, há que misturar 230 mililitros (mL) de álcool, duas gotas de óleo de laranja, 30 gotas de óleo de limão, 10 gotas de óleo de nós moscada, cinco de extrato de coentros, dez gotas de óleo de neroli (as flores de laranja amarga) e o mesmo de óleo de canela.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/_m6Ohinv5Zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    2=> array('titulo'=>'coca cola sabor café','imagem'=>'coca-cola-café.jpg','descricao'=>'A dobradinha não vai funcionar. Nem mesmo aumentando a dose de cada uma das bebidas. “Embora ambas contenham cafeína, um poderoso estimulante do sistema nervoso central, elas não agem em sinergia”, explica o nutrólogo Durval Ribas Filho. Ou seja, tomar as duas ao mesmo tempo não eleva seu potencial de ação.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/d0MVg8D_18Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    3=> array('titulo'=>'água mineral premium','imagem'=>'água-premium-a.jfif','descricao'=>'Para isso, despeje um balde de água em cima de um dos blocos de magma ou de areia das almas que você posicionou. Então, despeje o segundo balde de água no canto oposto, e isso criará uma fonte de água infinita. Então, repita o processo nas laterais dos blocos de vidro subindo o elevador.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/r4yNJv4CX3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    4=> array('titulo'=>'chá','imagem'=>'chá.jfif','descricao'=>'Como fazer: colocar a água para ferver e, logo que as primeiras bolhas estiverem sendo formadas, desligar o fogo. Despejar a água fervente sobre as plantas secas ou frescas, abafar e deixar repousar por 5 a 10 minutos. Por fim, coar e beber.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/YoxlzINma_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    5=> array('titulo'=>'suco de acelero','imagem'=>'suco.webp','descricao'=>'Colocar no liquidificador, metade da acerola com água que cubra a fruta.
    Bater de leve sem moer muito e coar numa jarra.
    Despeje novamente no liquidificador o suco coado, bata com o gelo e o açúcar.
    E sirva. Fica delicioso!!
    ','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/FPSOtt2BnUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    6=> array('titulo'=>'suco de manga','imagem'=>'manga.jfif','descricao'=>'Retire a casca da manga e corte em pedaços médios.
    Coloque em um liquidificador junto com a água e bata bem.
    Coe e volte o suco para o liquidificador junto com o açúcar.
    Bata mais 1 minuto e já está pronto','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/KwLmrY7R76I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    7=> array('titulo'=>'suco de limão','imagem'=>'limão.jfif','descricao'=>'Coloque os limões cortados no liquidificador com 4 xícaras de água e açúcar.
    Bata bem até que os limões desapareçam. Deve ficar com um pouco de espuma e um aspecto branco.
    Coe a limonada e adicione as outras 4 xícaras de água.
    Sirva com ou sem gelo, baseado em sua preferência.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/7aavIewcSY4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    8=> array('titulo'=>'fanta uva','imagem'=>'fanta.jpg','descricao'=>'Primeiro bote as uvas no fogo médio e vá amassado até sair o caldo da uva.
    Depois, acrescente o açúcar e misture bem.
    Bata na batedeira as uvas e coe o caldo.
    Leve à geladeira por uns 20 minutos e está pronto para beber.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/W6qPMjicf3k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    9=> array('titulo'=>'fanta laranja','imagem'=>'laranja.jpg','descricao'=>'Rale as cenouras no ralo fino.
    Descasque a laranja e corte em pequenos pedaços.
    Junte todos os ingredientes no liquidificador, açúcar a gosto.
    Bata por alguns minutos, coe e pronto.
    Deliciosa fanta caseira, para tomar no verão.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/9B9rcZJUfsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    10=> array('titulo'=>'suco laranja','imagem'=>'lj.jfif','descricao'=>'Suco ou sumo de laranja é uma bebida produzida através da extração do líquido da polpa da laranja. Pode ser adicionado açúcar ou adoçante ao sumo para deixá-lo mais saboroso, de acordo com o gosto.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/Nn9140bDPnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    
)
?>