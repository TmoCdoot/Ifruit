<?php
// src/Components/AlertComponent.php
namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('nav-bar')]
class NavigationBarComponent
{
    public string $message;
}

?>