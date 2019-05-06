$(document).ready(function(){
  $("a[rel=modal]").click(function(ev){
    ev.preventDefault();

    var id = $(this).attr("href");
    var alturaTela = $(document).height();
    var larguraTela = $(document).width();

    //colocando a máscara (fundo preto)
    $('#mascara').css({'width':larguraTela,'height':alturaTela});
    $('#mascara').fadeTo("slow",0.9);

    //colocando a janela modal na tela
    var left = ($(window).width() /2) - ($(id).width() / 2 );
    var top = ($(window).height() /2) - ($(id).height() / 2 );
    $(id).css({'top':top,'left':left});
    $(id).show();

    //fechando a janela Modal
    $('.fechar').click(function(ev){
      ev.preventDefault();
      $("#mascara").hide();
      $(".window").hide();
    });
  });
});
