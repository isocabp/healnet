require('jquery');
require('bootstrap');
require('@fortawesome/fontawesome-free');
require('slick-carousel');
require('jquery-mask-plugin/dist/jquery.mask.min');

window._ = require('lodash');

try {
  window.Popper = require('@popperjs/core').default;
  window.$ = window.jQuery = require('jquery');
} catch (e) {}

jQuery(function () {
  themeColor();
  masks();
  ajustaTopo();
  fixaMenu();

  $(window).scroll(function () {
    ajustaTopo();
  fixaMenu();
  })

  $(window).on('resize', function () {
    ajustaTopo();
  })

  $(window).ready(function () {
  })

  $(window).on('load', function () {
  })

  //Adiciona cor principal do thema nos meta tags do header
  function themeColor() {
    const themeColor = $('[name="theme-color"], [name="msapplication-navbutton-color"], [name="msapplication-TileColor"]');
    const value = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary');
    themeColor.attr('content', value);
  }

  //Adiciona pré-definidas, com base nos nomes, id ou types de inputs
  function masks() {

    //Telefone
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ?
          '(00) 00000-0000' :
          '(00) 0000-00009'
      },
      spOptions = {
        onKeyPress: function (val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
      }
    $('.mask-phone , [type="tel"], [id="tel"]').mask(SPMaskBehavior, spOptions);

    //CEP
    let cep = $('.mask-cep, [name="cep"], [id="cep"]');
    cep.mask('00000-000', {
      reverse: true
    });
    cep.attr('inputmode', 'numeric');

    //CPF
    let cpf = $('.mask-cpf, [name="cpf"], [id="cpf"]');
    cpf.mask('000.000.000-00', {
      reverse: true
    });
    cpf.attr('inputmode', 'numeric');

    //CNPJ
    let cnpj = $('.mask-cnpj, [name="cnpj"], [id="cnpj"]');
    cnpj.mask('00.000.000/0000-00', {
      reverse: true
    });
    cnpj.attr('inputmode', 'numeric');

    //CPF ou CNPJ
    let cpfCnpj = $('.mask-cpf-cnpj, [name="cpf-cnpj"], [id="cpf-cnpj"]');
    let options = {
      onKeyPress: function (cpf, ev, el, op) {
        let masks = ['000.000.000-000', '00.000.000/0000-00'];
        cpfCnpj.mask((cpf.length > 14) ? masks[1] : masks[0], op);
      }
    }
    cpfCnpj.length > 11 ? cpfCnpj.mask('00.000.000/0000-00', options) : cpfCnpj.mask('000.000.000-00#', options);
    cpfCnpj.attr('inputmode', 'numeric');

    //Data
    let date = $('.mask-date, [name="date"], [id="date"], [type="date"]');
    date.mask('00/00/0000', {
      reverse: true
    });
    date.attr('inputmode', 'numeric');
    
  }

  function fixaMenu() {
    let valor = 200;
    let w = $(window).width();
    let rolagem = $(window).scrollTop();
    if (w > 960) {
      if (rolagem > valor) {
        $("#topo").addClass("ativo");
      } else {
        $("#topo").removeClass("ativo");
      }
    } else {
      $("#topo").addClass("ativo");
    }
  }

  function ajustaTopo() {
    let h = $("#topo").height();
    let hB = $(window).height();
    console.log(hB - h);
    $("main").css({
      "margin-top": h,
    });
    $("#banner .banner").css({
      height: hB - h,
    });
  }

});