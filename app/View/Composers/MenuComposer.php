<?php

namespace App\View\Composers;

use App\LoaiSanPham;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $LSP = LoaiSanPham::all();
        $view->with('lsp', $LSP);
    }
}