<?php

use Illuminate\Database\Seeder;
use App\Pisos;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private $arrayPisos = array(
        array(
            'titulo' => 'Piso en Avenida la Libertad, 23b, Muriedas',
            'espacio' => '60',
            'poblacion' => 'Muriedas',
            'descripcion' => 'Piso luminoso de dos dormitorios, salón comedor, cocina totalmente equipada y baño, amueblado, calefacción, buena orientación.',
            'precio' => '116000',
            'foto' => 'https://img.milanuncios.com/fg/2542/14/254214485_1.jpg?VersionId=RoHaMgYU4LwUaPd5dhwhG_VMo5WoWU7Q',
            'estado' => false
        ),
        array(
            'titulo' => 'Piso en Aljaraque',
            'espacio' => '119',
            'poblacion' => 'Aljaraque',
            'descripcion' => 'Fantástico piso seminuevo situado en Aljaraque centro. Edificio con ascensor. Muy amplio y luminoso. Todo exterior. Primera planta de 119 m2 completamente amueblada que cuenta con 3 dormitorios, uno de ellos con balcón al exterior, 2 baños completos, cocina totalmente amueblada y equipada con electrodomésticos, cuarto lavadero con termo eléctrico, un bonito y moderno salón-comedor. Primeras calidades como suelo de mármol, paredes lisas y ventanas con doble acristalamiento. Plaza garaje en el mismo edificio incluida en el precio.',
            'precio' => '113900',
            'foto' => 'https://d.inmofactory.com/1/87582/15561669/200465626.jpg/300x225/a_fill/',
            'estado' => true
        ),
        array(
            'titulo' => 'Piso en Calle Zaragoza, 5, El Pinós / Pinoso',
            'espacio' => '110',
            'poblacion' => 'El Pinós / Pinoso',
            'descripcion' => 'Piso en venta en Pinoso, Alicante. Dispone de una superficie de 110 m² distribuidos en 3 habitaciones, salón-comedor, cocina, 2 baños, lavadero y terraza. Cocina con vitrocerámica y horno. Baño con bañera y bidet. Edificio con ascensor. Ubicado cerca de restaurantes y una farmacia. Gasolinera a 4 minutos. Accesible desde la C-3223. ¿Es lo que buscas? Contacta con nosotros.',
            'precio' => '70200',
            'foto' => 'https://www.pisosyalquiler.com/photos/1423673630_53.jpg',
            'estado' => false
        ),
        array(
            'titulo' => 'Ático en venta en calle Conquista, 72',
            'espacio' => '79',
            'poblacion' => 'Badalona',
            'descripcion' => 'En una de las mejores zonas de el centro de Badalona, a escasos metros de la parada de metro L2 Badalona Pompeu Fabra, nos encontramos con este acogedor ático en perfecto estado de conservación, para entrar a vivir',
            'precio' => '269000',
            'foto' => 'https://www.lamudi.com.mx/static/cms/SEO%20content%20MX/puebla_casa_venta_350px.jpg',
            'estado' => true
        ),
        array(
            'titulo' => 'Piso en venta en Mar Alboran, 10',
            'espacio' => '105',
            'poblacion' => 'Badalona',
            'descripcion' => 'Vivienda de 100m2 construidos con párking y trastero al lado del puerto.',
            'precio' => '325000',
            'foto' => 'https://xn--diseo-rta.vip/wp-content/uploads/2016/09/casas-en-venta.jpg',
            'estado' => false
        )
    );

    private $arrayUsers = array(
        array(
            'name' => 'manolo',
            'email' => 'manolo@gmail.com',
            'password' => 'manolo'
        ),
        array(
            'name' => 'paco',
            'email' => 'paco@gmail.com',
            'password' => 'paco'
        )
    );

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedCatalog();
        $this->command->info('Taula catàleg initcialitzada amb dades!');

        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    public function seedCatalog()
    {
        DB::table('pisos')->delete();
        foreach ($this->arrayPisos as $pisos) {
            $p = new Pisos;
            $p->titulo = $pisos['titulo'];
            $p->espacio = $pisos['espacio'];
            $p->poblacion = $pisos['poblacion'];
            $p->descripcion = $pisos['descripcion'];
            $p->precio = $pisos['precio'];
            $p->foto = $pisos['foto'];
            $p->estado = $pisos['estado'];
            $p->save();
        }
    }

    public function seedUsers()
    {
        DB::table('users')->delete();
        foreach ($this->arrayUsers as $users) {
            $p = new User;
            $p->name = $users['name'];
            $p->email = $users['email'];
            $p->password = Hash::make($users['password']);
            $p->save();
        }
    }
}
