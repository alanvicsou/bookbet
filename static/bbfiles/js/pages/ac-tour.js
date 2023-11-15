'use strict';
document.addEventListener('DOMContentLoaded', function () {
  introJs()
    .setOptions({
      steps: [
        {
          intro: 'Atenção usuário, nova atualização disponível!'
        },
        {
          element: document.querySelector('.step1'),
          intro: 'Aqui dentro do livro de apostas temos uma novidade'
        },
        {
          element: document.querySelector('.step2'),
          intro: 'Agora com um único clique conseguirá abrir todas as janelas necessárias para realizar sua aposta'
        }
      ]
    })
    .start();
});
