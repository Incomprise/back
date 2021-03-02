<?php

namespace App\Controller\Admin;

use App\Entity\Billetterie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BilletterieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Billetterie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
