<?php
namespace Database\Seeders;

use App\Models\services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Services::insertOrIgnore([
            [
                'name'        => 'Ciberseguridad',
                'short_name'  => 'Ciberseguridad',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/Ciberseguridad.png',
                'description' => 'Protección  digital de élite: analizamos , detectamos y prevenimos ataques, asegurando la seguridad de sus activos empresariales.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'DESARROLLO WEB & MULTIPLATAFORMA',
                'short_name'  => 'DESARROLLO WEB',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/desarrollo_web.png',
                'description' => 'Creación profesional de sitios y aplicaciones móviles. Desarrollamos soluciones web y móviles personalizadas para impulsar su negocio.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'MARKETING DIGITAL',
                'short_name'  => 'MARKETING DIGITAL',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/marking_digital.png',
                'description' => 'Potencie su presencia en línea. Estrategias de marketing digital efectivas para alcanzar y cautivar su audiencia objetivo',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'CLOUD & INFRAESTRUCTURE',
                'short_name'  => 'CLOUD & INFRAESTRUCTURE',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/cloud_infraestructure.png',
                'description' => 'Insfraestructura escalable y segura en la nube. Optimice su negocio con soluciones de almacenamiento y gestión de datos avanzadas.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'IT & OUTSOURCING',
                'short_name'  => 'IT & OUTSOURCING',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/it_outsourcing.png',
                'description' => 'Externalice su soporte de IT. Soluciones integrales de externalización para satisfacer las necesidades tecnológicas de su empresa.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'VENTOS TECH',
                'short_name'  => 'VENTOS TECH',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/it_outsourcing.png',
                'description' => 'Experiencias tecnológicas inolvidables. Organizamos eventos tecnológicos para inspirar, educar y conectar a personas amantes de la tecnología.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Equipamiento IT & Gaming',
                'short_name'  => 'Equipamiento IT & Gaming',
                'url_image'   => '/storage/services/image/Ciberseguridad.png',
                'url_logo'    => '/storage/services/logo/equiamiento_it_gaming.png',
                'description' => 'Potencie su rendimiento tecnológico. Equipamiento especializado en IT y gaming para mejorar su experiencia y productividad.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
