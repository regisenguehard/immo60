<?php
namespace App\Http\View\Composers;

Use App\Categorie;
Use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Categorie::All());
    }
}
