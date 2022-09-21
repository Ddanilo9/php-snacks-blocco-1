<?php

$paragrafo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit Ducimus culpa placeat hic totam at ipsam 
nobis quasi Quibusdam possimus iste qui. dolorem harum pariatur reprehenderit voluptatum id, consectetur eos aperiam ullam
veniam velit quaerat quisquam eveniet totam! Neque mollitia doloremque necessitatibus quisquam optio, distinctio. rerum consectetur ratione
aperiam iste cum sed atque tenetur laborum expedita nesciunt sapiente ad aliquid ipsa';


$newPa = (explode('.', $paragrafo));

echo '<pre>' . var_export($newPa, true) . '</pre>';