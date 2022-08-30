<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class TextSeeder extends Seeder
{

    private array $values = [
        ['key' => 'home', 'text' => 'Home', 'type' => 'textarea'],
        ['key' => 'pricing', 'text' => 'Pricing', 'type' => 'textarea'],
        ['key' => 'aboutus', 'text' => 'About us', 'type' => 'textarea'],
        ['key' => 'what-we-provide', 'text' => 'What we provide', 'type' => 'textarea'],
        ['key' => 'reviews', 'text' => 'Reviews', 'type' => 'textarea'],
        ['key' => 'order-now', 'text' => 'Order Now', 'type' => 'textarea'],
        ['key' => 'text-header', 'text' => 'INTRODUCING', 'type' => 'textarea'],
        ['key' => 'slogan', 'text' => 'Auction sheet translation', 'type' => 'textarea'],
        ['key' => 'slogan-description', 'text' => 'Get your auction sheet translated now', 'type' => 'textarea'],
        ['key' => 'starting-at', 'text' => 'Starting at', 'type' => 'textarea'],
        ['key' => 'learn-more', 'text' => 'Learn More', 'type' => 'textarea'],
        ['key' => 'pricing-header', 'text' => 'Pricing', 'type' => 'textarea'],
        [
            'key' => 'pricing-description',
            'text' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'type' => 'editor'
        ],
        ['key' => 'japanese-auction-sheet-translation', 'text' => 'Japanese Auction Sheet Translation Services', 'type' => 'textarea'],
        [
            'key' => 'are-you-thinking',
            'text' => '<p class="font-weight-bold text-4-5 line-height-6 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="color: rgb(119, 119, 119); margin-right: 0px; margin-left: 0px; animation-duration: var(--animate-duration); animation-fill-mode: both; opacity: 1; animation-name: fadeInUpShorter; font-family: Poppins, sans-serif; animation-delay: 800ms; line-height: 1.6 !important; font-size: 1.35em !important;">Are you thinking of buying a car at a Japanese car auction? That’s a smart choice, because the quality of pre-owned Japanese vehicles is second to none!</p><p class="text-3-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); line-height: 26px; animation-duration: var(--animate-duration); animation-fill-mode: both; opacity: 1; animation-name: fadeInUpShorter; font-family: Poppins, sans-serif; animation-delay: 1000ms; font-size: 1.1em !important;">But to make the best possible choice, you need to know exactly what you’re getting. All cars sold in Japan undergo a thorough inspection before they’re put on the market. So getting a complete and accurate translation of the auction inspector’s report is essential before making your purchase.</p><p class="text-3-5 font-weight-bold appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); line-height: 26px; animation-duration: var(--animate-duration); animation-fill-mode: both; opacity: 1; animation-name: fadeInUpShorter; font-family: Poppins, sans-serif; animation-delay: 1000ms; font-size: 1.1em !important;">The problem: auction sheets can be extremely technical and difficult to understand.</p><p class="text-3-5 pb-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="color: rgb(119, 119, 119); line-height: 26px; margin-right: 0px; margin-left: 0px; animation-duration: var(--animate-duration); animation-fill-mode: both; opacity: 1; animation-name: fadeInUpShorter; font-family: Poppins, sans-serif; animation-delay: 1000ms; font-size: 1.1em !important;">EFJ is here to help! With over a decade of experience in the Japanese car auction industry, our professionals are trusted experts in auction sheet translation. We work hard to ensure that our clients have all the information they need to make the right car-buying decision – and avoid costly buying mistakes due to inaccurate or incomplete information.</p>',
            'type' => 'editor'
        ],
        ['key' => 'lorem1', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'type' => 'textarea'],
        [
            'key' => 'but-to-make-the',
            'text' => 'But to make the best possible choice, you need to know exactly what you’re getting. All cars sold in Japan undergo a thorough inspection before they’re put on the market. So getting a complete and accurate translation of the auction inspector’s report is essential before making your purchase.',
            'type' => 'textarea'
        ],
        [
            'key' => 'the-problem-auction-sheets',
            'text' => 'The problem: auction sheets can be extremely technical and difficult to understand.',
            'type' => 'textarea'
        ],
        [
            'key' => 'efj-is-here-to-help',
            'text' => 'EFJ is here to help! With over a decade of experience in the Japanese car auction industry, our professionals are trusted experts in auction sheet translation. We work hard to ensure that our clients have all the information they need to make the right car-buying decision – and avoid costly buying mistakes due to inaccurate or incomplete information.',
            'type' => 'textarea'
        ],
        ['key' => 'lorem-text', 'text' => 'Lorem text', 'type' => 'textarea'],
        ['key' => 'what-are-the-efj', 'text' => "What are the EFJ's advantages?", 'type' => 'textarea'],
        [
            'key' => 'fourteen-years-of-experience',
            'text' => '<ul style="padding-left: 2rem; color: rgb(119, 119, 119); font-family: Poppins, sans-serif; font-size: 14px;"><li style="line-height: 24px;">Fourteen years of experience in car inspection, maintenance, auction bidding, and price negotiation</li><li style="line-height: 24px;">Professional understanding of automotive terminology used in auction sheets</li><li style="line-height: 24px;">Precise and thorough translation by university-educated professionals</li><li style="line-height: 24px;">EFJ is an authorized Japanese car exporter working in partnership with Japanese auction houses, local dealerships, and inspection agencies</li><li style="line-height: 24px;">Cars are more than our business – they are our passion!</li></ul>',
            'type' => 'editor'
        ],
        [
            'key' => 'professional-understanding-of',
            'text' => 'Professional understanding of automotive terminology used in auction sheets',
            'type' => 'textarea'
        ],
        [
            'key' => 'precise-and-through',
            'text' => 'Precise and through translation by university-educated professionals',
            'type' => 'textarea'
        ],
        [
            'key' => 'efj-is-an-authorized',
            'text' => 'EFJ is an authorized Japanese car exporter working in partnership with Japanese auction houses, local dealerships, and inspection agencies',
            'type' => 'textarea'
        ],
        ['key' => 'cars-are-more-than', 'text' => 'Cars are more than our business – they are our passion!', 'type' => 'textarea'],
        [
            'key' => 'what-details-will-efj',
            'text' => "What details will EFJ’s auction sheet translation service provide?",
            'type' => 'textarea'
        ],
        ['key' => 'complete-vehicle-ownership', 'text' => '<ul style="padding-left: 2rem; color: rgb(119, 119, 119); font-family: Poppins, sans-serif; font-size: 14px;"><li style="line-height: 24px; color: white;">Complete vehicle ownership and maintenance history</li><li style="line-height: 24px; color: white;">Independent inspector’s notes describing the car’s mechanical, electrical, and structural condition</li><li style="line-height: 24px; color: white;">Detailed assessment of exterior and interior flaws</li></ul>', 'type' => 'editor'],
        [
            'key' => 'independent-inspector',
            'text' => "Independent inspector’s notes describing the car’s mechanical, electrical, and structural condition",
            'type' => 'textarea'
        ],
        ['key' => 'detailed-assesment', 'text' => "Detailed assessment of exterior and interior flaws", 'type' => 'textarea'],
        ['key' => 'general', 'text' => "GENERAL", 'type' => 'textarea'],
        [
            'key' => 'lorem-ipsum-dolor-sit-amet',
            'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate veritatis, voluptates. Accusamus accusantium animi aperiam commodi cumque dolore earum eveniet facilis fugit iusto magnam magni numquam, qui soluta ullam ut.",
            'type' => 'textarea'
        ],
        ['key' => 'starting-at-bottom', 'text' => 'Starting at', 'type' => 'textarea'],
        ['key' => '15$', 'text' => '$15', 'type' => 'textarea'],
        ['key' => 'customer-support', 'text' => "CUSTOMER SUPPORT", 'type' => 'textarea'],
        ['key' => 'need-assistance', 'text' => "Need Assistance?", 'type' => 'textarea'],
        [
            'key' => 'lorem-text2',
            'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.",
            'type' => 'textarea'
        ],
        ['key' => 'secured-payment', 'text' => "SECURED PAYMENT", 'type' => 'textarea'],
        ['key' => 'safe-fast', 'text' => "Safe & Fast", 'type' => 'textarea'],
        [
            'key' => 'lorem-text3',
            'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.",
            'type' => 'textarea'
        ],
        ['key' => 'returns', 'text' => "RETURNS", 'type' => 'textarea'],
        ['key' => 'easy-free', 'text' => "Easy & Free", 'type' => 'textarea'],
        [
            'key' => 'lorem-text3',
            'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.",
            'type' => 'textarea'
        ],
        ['key' => 'subscribe-to-our-newsletter', 'text' => "Subscribe To Our Newsletter", 'type' => 'textarea'],
        ['key' => 'gte-all-the-latest', 'text' => "Get all the latest information on Events, Sales and Offers.", 'type' => 'textarea'],
        ['key' => 'your-email-address', 'text' => "Your E-mail Address", 'type' => 'textarea'],
        ['key' => 'subscribe-now', 'text' => "SUBSCRIBE NOW!", 'type' => 'textarea'],
        ['key' => 'about-us-detail', 'text' => "About us detail", 'type' => 'textarea'],
        ['key' => 'help-faqs', 'text' => "Help & FAQs", 'type' => 'textarea'],
        ['key' => 'order-tracking', 'text' => "Order Tracking", 'type' => 'textarea'],
        ['key' => 'shipping-delivery', 'text' => "Shipping & Delivery", 'type' => 'textarea'],
        ['key' => 'social-media', 'text' => "SOCIAL MEDIA", 'type' => 'textarea'],
        ['key' => 'payment-methods', 'text' => "PAYMENT METHODS", 'type' => 'textarea'],
        ['key' => 'billing-details', 'text' => "Billing Details", 'type' => 'textarea'],
        [
            'key' => 'your-personal-data',
            'text' => "Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.",
            'type' => 'textarea'
        ],
        ['key' => 'first-name', 'text' => "First Name", 'type' => 'textarea'],
        ['key' => 'email', 'text' => "Email", 'type' => 'textarea'],
        ['key' => 'order-notes', 'text' => "Order Notes", 'type' => 'textarea'],
        ['key' => 'notes-about-your-order', 'text' => "Notes about your order e.g. special notes", 'type' => 'textarea'],
        ['key' => 'attach-your-auction-sheet', 'text' => "Attach your auction sheet", 'type' => 'textarea'],
        [
            'key' => 'your-personal-data-will',
            'text' => "Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.",
            'type' => 'textarea'
        ],
        ['key' => 'your-order', 'text' => "YOUR ORDER", 'type' => 'textarea'],
        ['key' => 'select-your-plan', 'text' => "Select your plan", 'type' => 'textarea'],
        ['key' => 'payment-methods', 'text' => "Payment Methods", 'type' => 'textarea'],
        [
            'key' => 'lorem-text4',
            'text' => "Lor ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate veritatis, voluptates.
                            Accusamus accusantium animi aperiam commodi cumque dolore earum eveniet facilis fugit iusto
                            magnam magni numquam, qui soluta ullam ut.",
            'type' => 'editor'
        ],
        ['key' => 'from-buyers', 'text' => "FROM BUYERS", 'type' => 'textarea'],
        ['key' => 'bottomtextvcv', 'text' => "bottomtextvcv", 'type' => 'textarea'],
        ['key' => 'bottomtext2', 'text' => "bottomtext2", 'type' => 'textarea'],
        ['key' => 'place-order', 'text' => "Place Order", 'type' => 'textarea'],
        ['key' => 'payment1', 'text' => "Cash", 'type' => 'textarea'],
        ['key' => 'payment2', 'text' => "Credit Card", 'type' => 'textarea'],
        ['key' => 'success', 'text' => "SUCCESS", 'type' => 'textarea'],
        ['key' => 'your-order-has', 'text' => "Your order has", 'type' => 'textarea'],
        [
            'key' => 'an-unexpected-error-ocurred',
            'text' => "An unexpected error has occured. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.",
            'type' => 'textarea'
        ],
        ['key' => 'go-back-to-home', 'text' => "GO BACK TO HOME PAGE", 'type' => 'textarea'],

    ];


    public function run(): void
    {
        $values = $this->values;

        foreach ($values as $value) {
            $key = Str::slug($value['text']);

            Text::updateOrCreate(
                ['key' => $value['key'],],
                [
                    'group' => 'site',
                    'key' => $value['key'],
                    'value' => $value['text'],
                    'type' => $value['type']
                ]
            );
        }
    }
}
