# VETORES EM PHP

![https://github.com/andreriffen/vetores-PHP/karate-kata.gif](karate-kata.gif)

        ┌─────────────────────────────────────────┐
        └─────────────────────────────────────────┘
        │   🔴 🟩🟩  IFSC - INSTITUTO FEDERAL    │
        │   🟩 🟩    DE EDUCAÇÃO  CIENCIA E      │
        │   🟩 🟩🟩  TECNOLOGIA                  │
        │   🟩 🟩    CÂMPUS FDRIANOPOLS          │
        │                                         │
        │ Prof. Herval Daminelli                  │
        │ Exercicios de aprendizagem - Fundamentos│
        │ da Linguagem PHP e Utilização de PHP    │
        │ com Formulários HTML5 e CSS3.           │
        │                                         │
        │ Resolva as questões a seguir. Havendo   │
        │ dúvidas, entre em contato.              │
        │                                         │
        │ > https://hdam.pro.br/                  │
        └─────────────────────────────────────────┘
        ┌─────────────────────────────────────────┐
        │ 🎓 ALUNO: ANDRE GUILHERME               │
        │           BARRETO DE FARIAS             │
        └─────────────────────────────────────────┘
        ┌───────────────────┐
        │  VETORES EM PHP   │
        └───────────────────┘
# Enunciados

## 1

Elabore um script em PHP que receba, de um formulário, duas notas e seus respectivos pesos, relativos à unidade curricular Programação WEB, e o nome do aluno. Em seguida, o script deve calcular a média ponderada do aluno usando a seguinte formula: Média ponderada = (nota1 *peso1 + nota2* peso2) /(soma dos pesos).

- Faça com que o PHP gere, como resposta, a seguinte mensagem na página web: "Caro(a) aluno(a) $nomeDoAluno, de acordo com os dados fornecidos, sua média na unidade Programação Web é $media";

## 2

Maria quer viajar até a casa de sua irmã, de carro, e gostaria de saber, antecipadamente, quantos litros de gasolina irá gastar e qual o valor que terá de desembolsar pelo combustível gasto na viagem. Faça um script em PHP que receba de um formulário HTML os seguintes dados:

- A distância da casa de Maria até a casa de sua irmã, em km;
- O consumo de seu carro, em km/litro;
- O preço da gasolina no posto onde Maria abastece.

Em seguida:

- a) Faça com que o código em PHP armazene e manipule o preço da gasolina como uma constante;
- b) Faça com que a aplicação mostre ao usuário o gasto que o mesmo terá com a viagem; c) Faça com que a aplicação mostre quantos litros de combustível serão consumidos na viagem; d) Faça com que a aplicação mostre o preço pago por litro de combustível.

## 3

Crie um script em PHP para auxiliar vendedores de uma loja. Fornecendo-se o valor da venda de determinado vendedor em um formulário web (com método GET), a aplicação deverá mostrar:

- O valor do desconto obtido pelo cliente (10% sobre o total da compra);

- O valor do ICMS pago pela loja (12% sobre o total da compra);

- A comissão do vendedor (5% sobre o total da compra).

## 4

Escreva um script em PHP que receba de um formulário uma dada temperatura em graus Fahrenheit e transforme-a para a escala Celsius, conforme a fórmula de conversão a seguir. Mostre o resultado.
Celsius (Fahrenheit-32) * 5/9

## 5

 Crie uma aplicação web destinada a converter uma certa quantidade de dólares em reais. A taxa de câmbio deve ser usada no script em PHP como uma constante. O valor em dólares deve ser fornecido em um campo de formulário, pelo método POST. A aplicação deve retornar, ao usuário, as seguintes informações:

- A quantidade convertida em reais
- O valor da taxa de câmbio

## 6

Crie uma aplicação web para gerenciamento das vendas de uma loja de informática. Os dados a serem enviados pelo formulário são:
✔ total da compra realizada pelo cliente;
percentual de comissão do vendedor.
O script em PHP deverá escrever na página web o valor da comissão ganha pelo vendedor.

## 7

Um determinado supermercado de nossa região oferece um desconto de 5% sobre o valor total da compra de determinado cliente, no caso deste cliente efetuar o pagamento com cartão. Também, o supermercado oferece o serviço de entrega domiciliar da compra. Neste caso, o supermercado cobra um percentual de 2% sobre o valor da compra, para a entrega no domicílio.

Elabore um formulário em HTML5 que contenha os campos descritos na situação acima. Em seguida, crie um script em PHP que receba os dados deste formulário e calcule e mostre ao usuário o valor final da compra, levando-se em consideração o pagamento com cartão e a entrega domiciliar.

- Utilize elementos botões de rádio no formulário para permitir ao usuário introduzir as informações relacionados a pagamento com cartão e entrega da compra a domicílio.

## 8

Repita o exercício anterior, alterando a interface gráfica para que o formulário apresente botões de checkbox (ao invés de botões de rádio) ao usuário, de forma a se obter as informações relacionados a pagamento com cartão e entrega domiciliar.

## 9

Uma certa loja do centro de nossa cidade oferece a possibilidade de pagamento à vista ou a prazo. Se o cliente escolher o pagamento à vista, a loja concede um desconto de 5% sobre o valor da compra. Se o pagamento for a prazo, o valor da compra sofre um acréscimo de 2%. Também, há a possibilidade de se utilizar pagamento com cartão com a bandeira Visa. Neste caso, o cliente estará automaticamente concorrendo ao sorteio de um automóvel, oferecido pela loja.

Tendo em vista estas informações, elaborar um formulário em HTML5 que contenha:

- Um campo para o usuário fornecer o valor da compra de determinado cliente;
- Botões de rádio para indicar se o pagamento será feito à vista ou a prazo;
- Um checkbox para indicar se o pagamento será feito com cartão Visa.

Após isso, criar um script em PHP que receba os dados deste formulário. Ao final do script, a aplicação deverá:

- Mostrar ao usuário da aplicação o valor final da compra;

- Mostrar ao usuário se o cliente está apto a participar do sorteio ou não.

## 10

Determinada rede de farmácias de nossa cidade concede um desconto na compra de medicamentos a seus clientes idosos, de acordo com a situação abaixo:

- Clientes com menos de 55 anos não têm nenhum desconto;

- Clientes entre 55 anos e 70 anos (inclusive) obtêm 5% de desconto sobre o valor da compra;
- Clientes acima de 70 anos ganham 7% de desconto sobre o valor da compra.

Além disso, se o pagamento for feito por meio de cartão de fidelidade da rede, tem-se um desconto adicional de mais 5% em relação aos descontos anteriores, independentemente da idade, isto é: cliente com menos de 55 anos terá desconto de 5%; cliente entre 55 anos e 70 anos, que pagou com cartão, terá um desconto total sobre a compra de 10%. Cliente acima de 70 anos, pagando com cartão, terá desconto de 12%. Use o elemento checkbox para representar esta informação no formulário.

Crie uma aplicação web, por meio da linguagem PHP, que permita a um vendedor fornecer, em um formulário HTML5, as informações acima sobre a compra de determinado cliente. Em seguida, o script em PHP deverá mostrar o valor final da compra a ser pago pelo cliente. Não se esqueça de testar se um botão de rádio relacionado à faixa etária do cliente foi marcado. Se isto não ocorreu, mostre uma mensagem adequada ao usuário e encerre a aplicação web.
