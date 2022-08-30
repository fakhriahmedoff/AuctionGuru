<?php
declare(strict_types=1);

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\StoreOrderRequest;
use App\Repositories\ConfigRepository;
use App\Repositories\PlanRepository;
use App\Repositories\TextRepository;
use App\Services\OrderService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
        private TextRepository $textRepository,
        private PlanRepository $planRepository)
    {
    }

    public function index(): Application|Factory|View
    {
        $texts = $this->textRepository->getTextsAll();
        $plans = $this->planRepository->getAllPlans();
        $config     = ConfigRepository::getConfig();


        return view('frontend.order',compact(['texts','plans','config']));
    }

    public function order(StoreOrderRequest $request): RedirectResponse
    {
//        try {
            $this->orderService->storeOrder($request);

            if($request->getPaymentMethod() == 'cashless')
            {
               return redirect('https://www.paypal.com/paypalme/muradshiriev');
            }

            return redirect()->route('thank-you');
//        }catch (\Exception $exception)
//        {
//            return redirect()->route('home')->withErrors(['error_payment' => "There's problem with payment"]);
//        }

    }

    public function thankYou(): Application|Factory|View
    {

        $texts  = $this->textRepository->getTextsAll();
        $config = ConfigRepository::getConfig();

        return view('frontend.thank-you',compact(['config','texts']));
    }
}
