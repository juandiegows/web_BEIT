@extends('layouts.visitor') {{-- Extiende la plantilla base de visitante --}}
@section('favicon', asset('svg/Recurso.svg'))

@section('content')

<section class="w-[80%] mx-auto p-1 text-center ">
    <svg class="w-full" viewBox="0 0 800 120">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle"
              class="font-kanit font-extrabold text-3xl"
              fill="transparent" stroke="white" stroke-width="0.5">
            NUESTROS SERVICIOS
        </text>
    </svg>
</section>

<section class="w-[100%] mx-auto py-10 space-y-32">
   <!-- Ciberseguridad -->
   <livewire:components.card-service-info
      name="CIBERSEGURIDAD"
      url="/ciberseguridad"
      description="Protección digital de élite: analizamos, detectamos y prevenimos ataques, asegurando la seguridad de sus activos empresariales."
      features="Evaluación de vulnerabilidades|Pruebas de penetración|Monitoreo de seguridad 24/7|Respuesta a incidentes"
      url_logo="/storage/services/logo/Ciberseguridad.png"
      type="end"
   />

   <!-- Desarrollo Web -->
   <livewire:components.card-service-info
      name="DESARROLLO WEB & MULTIPLATAFORMA"
      url="/desarrollo-web"
      description="Creación profesional de sitios y aplicaciones móviles. Desarrollamos soluciones web y móviles personalizadas para impulsar su negocio."
      features="Diseño web responsive|Desarrollo de aplicaciones móviles|Mantenimiento y soporte|Optimización SEO"
      url_logo="/storage/services/logo/desarrollo_web.png"
      type="start"
   />

   <!-- Marketing Digital -->
   <livewire:components.card-service-info
      name="MARKETING DIGITAL"
      url="/marketing-digital"
      description="Estrategias digitales efectivas. Potenciamos su presencia online con estrategias personalizadas para atraer y convertir clientes."
      features="Estrategias SEO/SEM|Gestión de redes sociales|Email marketing|Análisis de datos"
      url_logo="/storage/services/logo/marking_digital.png"
      type="end"
   />

   <!-- Cloud & Infraestructure -->
   <livewire:components.card-service-info
      name="CLOUD & INFRAESTRUCTURE"
      url="/cloud-infraestructure"
      description="Soluciones avanzadas en la nube. Implementamos infraestructuras cloud escalables para optimizar sus operaciones tecnológicas."
      features="Migración a la nube|Soluciones de almacenamiento|Seguridad en la nube|Soporte técnico"
      url_logo="/storage/services/logo/cloud_infraestructure.png"
      type="start"
   />

   <!-- IT & Outsourcing -->
   <livewire:components.card-service-info
      name="IT & OUTSOURCING"
      url="/it-outsourcing"
      description="Externalice su soporte de IT. Soluciones integrales de externalización para satisfacer las necesidades tecnológicas de su empresa."
      features="Soporte técnico|Gestión de infraestructura|Consultoría IT|Soluciones personalizadas"
      url_logo="/storage/services/logo/it_outsourcing.png"
      type="end"
   />

   <!-- Eventos Tech -->
   <livewire:components.card-service-info
      name="EVENTOS TECH"
      url="/eventos-tech"
      description="Experiencias tecnológicas inolvidables. Organizamos eventos tecnológicos para inspirar, educar y conectar a personas amantes de la tecnología."
      features="Workshops y seminarios|Hackathons|Conferencias especializadas|Networking"
      url_logo="/storage/services/logo/ventos_tech.png"
      type="start"
   />

   <!-- Equipamiento IT & Gaming -->
   <livewire:components.card-service-info
      name="EQUIPAMIENTO IT & GAMING"
      url="/equipamiento-it-gaming"
      description="Potencie su rendimiento tecnológico. Equipamiento especializado en IT y gaming para mejorar su experiencia y productividad."
      features="Hardware profesional|Accesorios gaming|Equipos empresariales|Soporte técnico"
      url_logo="/storage/services/logo/equiamiento_it_gaming.png"
      type="end"
   />

   <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #054AAD, transparent); transform: translate(70%, 20%);"></div>
    </div>

    
   <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(--left, -0%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(70%, 20%);"></div>
    </div>

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #01BCEA, transparent); transform: translate(-10%, 40%); opacity: 0.46;"></div>
    </div> 

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #064380, transparent); transform: translate(-10%, 120%); opacity: 0.85;"></div>
    </div> 

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(80%, 120%); opacity: 0.59;"></div>
    </div> 

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #054AAD, transparent); transform: translate(0%, 180%); opacity: 1;"></div>
    </div> 

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(0%, 240%); opacity: 0.59;"></div>
    </div> 

    <div class="circule-container absolute top-0 left-0 " style="top: var(--top, 0%); left: var(-70%, -50%)">
        <div class="circle-gradient w-[60vw] h-[60vw] " style="background: radial-gradient(circle, #00D9EF, transparent); transform: translate(100%, 240%); opacity: 1;"></div>
    </div> 

</section>

@endsection
