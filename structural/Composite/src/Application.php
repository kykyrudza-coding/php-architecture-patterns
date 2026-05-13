<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Composite;

use KykyrudzaCoding\Composite\Items\File;
use KykyrudzaCoding\Composite\Items\Folder;

class Application
{
    public function run(): string
    {
        $documents = new Folder('Documents');
        $images = new Folder('Images');

        $documents->add(new File('resume.pdf', 120));
        $documents->add(new File('contract.docx', 80));

        $images->add(new File('photo.jpg', 350));
        $images->add(new File('avatar.png', 50));

        $documents->add($images);

        return $documents->getName() . ' size: ' . $documents->getSize() . ' KB';
    }
}
