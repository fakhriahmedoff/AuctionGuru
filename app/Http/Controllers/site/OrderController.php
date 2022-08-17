<?php
declare(strict_types=1);

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\StoreOrderRequest;
use App\Repositories\TextRepository;
use App\Services\OrderService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function __construct(private OrderService $orderService, private TextRepository $textRepository)
    {
    }

    public function index(): Application|Factory|View
    {
        $texts = $this->textRepository->getTextsAll();

        return view('frontend.order',compact('texts'));
    }

    public function order(StoreOrderRequest $request): RedirectResponse
    {
        $this->orderService->storeOrder($request);

        return redirect()->route('orderPage');
    }

    public function thankYou(): Application|Factory|View
    {
        $texts = $this->textRepository->getTextsAll();

        return view('frontend.thank-you',compact('texts'));
    }
}
