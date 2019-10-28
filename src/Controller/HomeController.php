<?php

declare(strict_types=1);

namespace App\Controller;

final class HomeController
{
    public function showUploadResource(): void
    {
        require '../resources/upload.html';
    }
}
