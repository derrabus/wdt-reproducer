<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/content')]
final class ContentController
{
    public function __invoke(): Response
    {
        return new Response(
            '<p>Hello 👋</p>',
            headers: ['Symfony-Debug-Toolbar-Replace' => '1'],
        );
    }
}
