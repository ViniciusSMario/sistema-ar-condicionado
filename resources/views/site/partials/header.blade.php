 <!-- Mashead header-->
 <header class="masthead" id="home">
     <div class="container px-5">
         <div class="row gx-5 align-items-center">
             <div class="col-lg-6">
                 <!-- Mashead text and app badges-->
                 <div class="mb-5 mb-lg-0 text-center text-lg-start">
                     <h1 class="display-2 lh-1 mb-2">Qualidade e Profissionalismo!</h1>
                     <p class="lead fw-bold text-muted mb-5">Vendas, Manutenção e higienização</p>
                     <div class="d-flex flex-column flex-lg-row align-items-center">
                         <a href="https://wa.me/5511999999999?text=Olá! Gostaria de solicitar um orçamento."
                             target="_blank"
                             class="btn btn-success btn-lg d-flex align-items-center justify-content-center"
                             style="gap: 8px;">
                             <i class="bi bi-whatsapp"></i> Solicitar Orçamento
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <!-- Masthead device mockup feature-->
                 <div class="masthead-device-mockup">
                     <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                         <defs>
                             <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                 <stop offset="50%" stop-color="#4092cc"></stop>
                                 <stop offset="90%" stop-color="#f68333"></stop>
                             </linearGradient>
                         </defs>
                         <!-- Aplica o gradiente ao círculo -->
                         <circle cx="50" cy="50" r="50" fill="url(#circleGradient)"></circle>
                     </svg>
                     <div class="device-wrapper">
                         <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                             <div class="screen bg-light pt-5">
                                <div class="d-flex justify-content-center align-items-center pt-4">
                                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                                </div>
                                <div class="text-center mt-4">
                                    <a href="https://wa.me/5511999999999?text=Olá! Gostaria de solicitar um orçamento."
                                        target="_blank"
                                        class="btn btn-success btn-sm pulsating-btn"
                                        style="gap: 3px;">
                                        <i class="bi bi-whatsapp"></i> Solicitar Orçamento
                                    </a>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
