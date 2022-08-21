<?php
declare(strict_types=1);

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Repositories\ConfigRepository;
use App\Repositories\PlanRepository;
use App\Repositories\ReviewRepository;
use App\Repositories\TextRepository;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class HomepageController extends Controller
{
    public function __construct(
        private TextRepository $textRepository,
        private PlanRepository $planRepository,
        private ReviewRepository $reviewRepository,
    )
    {
    }

    public function home(): Application|Factory|View
    {
        $texts      = $this->textRepository->getTextsAll();
        $plans      = $this->planRepository->getAllPlans();
        $reviews    = $this->reviewRepository->getReviewsAll();
        $config     = ConfigRepository::getConfig();

        return view('frontend.homepage',compact(['texts','plans','reviews','config']));
    }
}
