<?php
/**
 * Template name: Home
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header();
?>

<!-- Sessão Banners Principais -->

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="banner-home" src="<?php echo midiaSrc('banner-home.svg'); ?>"/>
      </div>
      <div class="swiper-slide">
        <img class="banner-home" src="<?php echo midiaSrc('banner-home.svg'); ?>" />
      </div>
      <div class="swiper-slide">
        <img class="banner-home" src="<?php echo midiaSrc('banner-home.svg'); ?>" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

    <div class="logo-container">
      <a href="https://api.whatsapp.com/send?phone=555433162226" target="_blank" class="font-primary">
        <button class="bg-accent color-primary font-primary font-medium reset logo-btn">
          <img src="<?php echo midiaSrc('icon-whats.svg'); ?>" alt="" style="padding-right: 50px;">
         <span class="color-primary span-botao-home"> Peça Já</span>
        </button>
      </a>
  </div>
</div>

<!-- Sessão Freedom -->

<section>
  <div id="secao-2" class="scroll-to-secao-2 sessao">
    <img src="<?php echo midiaSrc('bg-home.svg'); ?>" class="imagem">
      <div class="container-frame">
        <div class="logo-frame">
          <img src="<?php echo midiaSrc('frame.svg'); ?>" alt="">
          <div class="content">
            <p class="font-primary size-text-home margin-top-lg">A Freedom é uma <span class="font-bold"> marca de baterias <br> estacionárias super premium,</span> da mesma fabricante das baterias Heliar.</p> <br>
            <p class="font-primary size-text-home">Entrega <span class="font-bold">tecnologia e performance </span> preparada para atender os principais setores industriais, inclusive em aplicações para <span class="font-bold"> energias <br> renováveis e telecomunicações.</span></p>

            <img src="<?php echo midiaSrc('bateria-freedom.svg'); ?>" alt="" class="image-frame">

        </div>
      </div>
    </div>
    <div>
      <h1 class="font-primary font-light margin-resp color-white text-center text-32 padding-top-xxl">
        Por que escolher <br> <span class="font-bold">Freedom?</span>
      </h1>
      <p class="font-primary font-light text-center padding-top-md text-freedom">Confira os benefícios que fazem da Freedom a melhor bateria estacionária do Brasil.</p>
    </div>

    <div class="logo-container">
      <a href="https://api.whatsapp.com/send?phone=555433162226" target="_blank" class="font-primary">
        <button class="bg-accent font-primary font-medium reset logo-btn-bateria">
        Faça uma cotação
        </button>
      </a>
    </div>

    <div class="grid-freedom gap-xs justify-center padding-top-lg">
      <a class="card-v14 col-2@sm col-6@xs" aria-controls="modal-1" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('evento.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card padding-card">Durabilidade <br> <span class="color-red font-primary font-bold"> 4x mais</span></h3>
      
        <p class="text-right cor-ver margin-top-auto text-sm">Ver Mais <span class="span-ver color-black"> +  ''</span></p>
      </a>

      <a class="card-v14 col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('quadrados.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Tecnologia <br><span class="color-red font-primary font-bold">Powerframe</span></h3>
      
        <p class="text-right cor-ver margin-top-auto text-sm">Ver Mais</p>
      </a>

      <a class="card-v14 col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('icon-baterias-vintage-degrade.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Garantia de <br><span class="color-red font-primary font-bold">24 meses</span></h3>
      
        <p class="text-right cor-ver margin-top-auto text-sm">Ver Mais</p>
      </a>

      <a class="card-v14 col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('delivery.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Distribuição <br><span class="color-red font-primary font-bold">em Rede Nacional</span></h3>
      
        <p class="text-right cor-ver margin-top-auto text-sm">Ver Mais</p>
      </a>

      <a class="card-v14 col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('certificado.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Homologado <br><span class="color-red font-primary font-bold">Pela Anatel</span></h3>
      
        <p class="text-right cor-ver margin-top-auto text-sm">Ver Mais</p>
      </a>
    </div>

    <p class="font-primary font-light text-center padding-top-md text-freedom-final padding-bottom-lg">* Conforme testes de ciclos de carga e descarga realizados em laboratório nas baterias Freedom 45Ah versus baterias estacionárias ventiladas 45Ah, de acordo com as exigências da norma IEC60896-11.</p>
  </div>

</section>

<!-- Sessão Heliar Nobreak -->

<section>
  <div id="secao-3" class="scroll-to-secao-3 sessao" style="background: #202422;">
    <img src="<?php echo midiaSrc('fundo-bateria.svg'); ?>" class="imagem-nobreak">
      <div class="container-nobreak">
      <img src="<?php echo midiaSrc('nobreak.svg'); ?>" alt="" class="image-nobreak">
        <div class="logo-nobreak">
          <img src="<?php echo midiaSrc('heliar-nobreak.svg'); ?>" alt="">
          <div class="content">
            <p class="font-primary size-text-home margin-top-lg">Consolidada no mercado de baterias automotivas<span class="font-bold font-primary"> há mais de 90 anos,</span> a marca Heliar também conta com uma<span class="font-bold font-primary"> linha exclusiva de baterias estacionárias.</span> </p> <br>
            <p class="font-primary size-text-home">Um produto de<span class="font-bold font-primary"> primeira linha, livre de manutenção,<br> projetado para ter grande reserva de capacidade e<br> suportar longos períodos de descarga</span> com<br> correntes pequenas.</p>

            <div class="logo-container">
              <a href="https://api.whatsapp.com/send?phone=555433162226" target="_blank" class="font-primary">
                <button class="bg-accent font-primary font-medium reset logo-btn-nobreaker btn-resp-nobre">
                Faça uma cotação
                </button>
              </a>
            </div>

        </div>
      </div>
    </div>
    <div>

      <h1 class="font-primary font-light color-white text-center text-32 padding-top-xxxxl margin-resp">
        Por que escolher <br> <span class="font-bold">Heliar Nobreak?</span>
      </h1>

    <div class="grid-freedom gap-xs justify-center padding-top-lg">

    <a class="card-heliar card-v14-nobreaker col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('quadrados-gold.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Tecnologia <br><span class="color-gold font-primary font-bold">Powerframe</span></h3>
      
        <p class="text-right cor-gol margin-top-auto text-sm">Ver Mais</p>
      </a>
      
      <a class="card-heliar card-v14-nobreaker col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('bateria-gold.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Garantia de <br><span class="color-gold font-primary font-bold">24 meses</span></h3>
      
        <p class="text-right cor-gol margin-top-auto text-sm">Ver Mais</p>
      </a>

            
      <a class="card-heliar card-v14-nobreaker col-2@sm col-6@xs" href="#0">
        <figure class="card-v14__icon-wrapper" aria-hidden="true">
          <img src="<?php echo midiaSrc('delivery-gold.svg'); ?>" alt="" class="card-v14__icon icon">
        </figure>
      
        <h3 class="text-md color-white font-h3 padding-card">Distribuição <br><span class="color-gold font-primary font-bold">em Rede Nacional</span></h3>
      
        <p class="text-right cor-gol margin-top-auto text-sm">Ver Mais</p>
      </a>

    </div>

    <p class="font-primary font-light text-center padding-top-md text-freedom-final padding-bottom-lg">* Conforme testes de ciclos de carga e descarga realizados em laboratório nas baterias Freedom 45Ah versus baterias estacionárias ventiladas 45Ah, de acordo com as exigências da norma IEC60896-11.</p>
  </div>

</section>

<section id="secao-4" class="scroll-to-secao-4 section cultura-empresa margin-top-xl">
    <div class="container max-width-lg margin-y-xxl margin-y-0@md">
        <div class="bloco padding-x-md padding-x-xl@md padding-y-xxl bg-primary chanfro-bottom-right" style="background-image: url('<?php echo midiaSrc('img-sobre.png'); ?>');">
            <div class="grid padding-bottom-md">
                <div class="col-6@md">
                    <div class="margin-text">
                        <div class="margin-bottom-sm text-base text-16 conheca-viabat letter-spacing-custom-xxl">CONHEÇA A VIABAT</div>
                        <h2 class="margin-bottom-md font-light text-32 text-xxxl@md color-white line-height-xs">A Viabat é uma empresa <br> com <span class="color-white font-bold">larga experiência </span>em <br> distribuição de baterias.</h2>
                    </div>
                </div>
                <div class="col-6@md">
                    <div class="grid gap-md">
                      <div class="logo-container">
                        <a href="https://api.whatsapp.com/send?phone=555433162226" target="_blank" class="font-primary bg-primary">
                          <button class="bg-primary color-white font-primary font-medium reset logo-btn-sobre">
                          Quero saber mais
                          </button>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-x-xxl gap-y-xl gap-y-lg@md margin-y-xl padding-x-xl@md">
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/localizacao.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary">Contamos com <span class="color-gold color-white font-bold font-primary">3 unidades</span>, localizadas em Passo Fundo/RS, Itajaí/SC e Concórdia/SC.</span>
                </div>
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/delivery-truck.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary"><span class="color-gold color-white font-bold font-primary">Frete Grátis</span> para cidades dentro da nossa área de atuação. Verifique as condições com a nossa equipe.</span>
                </div>
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/help-desk.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary">Possuímos um setor de <span class="color-gold color-white font-bold font-primary">Televendas com atendimento exclusivo para baterias estacionárias,</span> disponível para orçamentos, dúvidas e informações em geral.</span>
                </div>
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/box-delivery.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary">Além de trabalharmos com as melhores marcas, nosso <span class="color-gold color-white font-bold font-primary">estoque está sempre em dia para atender sua demanda</span> com qualidade e agilidade.</span>
                </div>
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/user-certification.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary">Nossa empresa possui uma <span class="color-gold color-white font-bold font-primary">equipe de assistência técnica experiente e qualificada,</span> garantindo um suporte de máxima excelência.</span>
                </div>
                <div class="col-6@md col-6@lg flex">
                    <div class="icon icon--md margin-bottom-sm">
                        <?php printSvg('icons/condicoes-pagamento.svg') ?>
                    </div>
                    <span class="color-white text-16 margin-titulos font-primary">Se você é revendedor de baterias ou prestador de serviços da área, você tem <span class="color-gold color-white font-bold font-primary">condições de pagamento diferenciadas.</span> Entre em contato conosco para saber mais.</span>
                </div>
              </div>
        </div>
    </div>
</section>

<section id="secao-5" class="scroll-to-secao-5 section seja-cliente margin-top-xl">
    <div class="container max-width-adaptive-md">
        <div class="grid gap-xxl margin-bottom-md">
        <div class="col-6@md position-relative">
        <div class="grafismo-area position-absolute ">
                    <svg class="grafismo" width="317" height="430" viewBox="0 0 164 481" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="271" height="481" fill="url(#paint0_linear_240_876)" />
                        <defs>
                            <linearGradient id="paint0_linear_240_876" x1="-35.6292" y1="240.211" x2="349.987" y2="241.532" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#89AD80" />
                                <stop offset="0.879283" stop-color="#004721" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="image-area">
                    <img class="margin-sobre width-70% width-100%@md" src="<?php echo midiaSrc('img-seja-um-cliente.svg'); ?>">
                </div>
            </div>
            <div class="col-6@md">
            <div class="logo-container">
                      <a href="https://api.whatsapp.com/send?phone=555433162226" target="_blank" class="font-primary">
                        <button class="bg-accent color-primary font-primary font-medium reset logo-btn-vantagens">
                        <img src="<?php echo midiaSrc('icon-whats.svg'); ?>" alt="" style="padding-right: 229px;">
                        <span class="color-primary estilo-span"> Consulte descontos exclusivos</span>
                        </button>
                      </a>
                    </div>
                <div class="chamada">
                    <div class="margin-bottom-sm text-base text-16 conheca-viabat letter-spacing-custom-xxl">VANTAGENS</div>
                    <div class="chamada-title">
                        <h2 class="margin-bottom-md font-light text-32 text-xxxl@md color-primary line-height-xs">Sua bateria usada <br> <span class="font-bold color-primary font-primary">aqui tem valor.</span></h2>
                    </div>
                    <p class="margin-bottom-lg color-black text-16 opacity-60%">Ao comprar sua bateria estacionária nova,<br> <span class=" color-black font-bold font-primary">devolva o casco da sua bateria usada!</span> Dessa<br> forma você aproveita <span class="color-black font-bold font-primary">descontos exclusivos</span> e <br>ajuda na sustentabilidade do nosso planeta.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sessão Formulário -->

<section style="position: relative;">
  <div class="grid padding-top-xl margin-top-resp">
    <div class="col-6@md">
      <div class="unidade-image margin-left-xxxl">
        <div class="chamada">
          <div class="margin-bottom-sm margin-left-lg text-base text-16 conheca-viabat letter-spacing-custom-xxl">ORÇAMENTO</div>
          <div class="chamada-title grid">
            <div class="col-6@md margin-resp-text margin-left-lg">
              <h2 class="margin-bottom-md font-light text-32 text-xxxl@md color-primary line-height-xs" style="width: 400px;">Entre em contato conosco <br> e adquira as <span class="font-bold color-primary font-primary">melhores <br> baterias com as melhores <br> condições!</span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="margin-bottom-xl form-estilo">
    <?= do_shortcode('[contact-form-7 id="16" title="Contact form 1"]'); ?>
  </div>
</section>




<?php
get_footer();