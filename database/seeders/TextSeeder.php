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
        'Home',
        'Pricing',
        'About us',
        'What we provide',
        'Reviews',
        'Order Now',
        'INTRODUCING',
        'Auction sheet translation',
        'Get your auction sheet translated now',
        'Starting at',
        'Learn More',
        'Pricing',
        'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
        'Japanese Auction Sheet Translation Services',
        'Are you thinking of buying a car at a Japanese car auction? That’s a smart choice, because the quality of pre-owned Japanese vehicles is second to none!',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'But to make the best possible choice, you need to know exactly what you’re getting. All cars sold in Japan undergo a thorough inspection before they’re put on the market. So getting a complete and accurate translation of the auction inspector’s report is essential before making your purchase.',
        'The problem: auction sheets can be extremely technical and difficult to understand.',
        'EFJ is here to help! With over a decade of experience in the Japanese car auction industry, our professionals are trusted experts in auction sheet translation. We work hard to ensure that our clients have all the information they need to make the right car-buying decision – and avoid costly buying mistakes due to inaccurate or incomplete information.',
        'Lorem text',
        "What are the EFJ's advantages?",
        'Fourteen years of experience in car inspection, maintenance, auction bidding, and price negotiation',
        'Professional understanding of automotive terminology used in auction sheets',
        'Precise and thorough translation by university-educated professionals',
        'EFJ is an authorized Japanese car exporter working in partnership with Japanese auction houses, local dealerships, and inspection agencies',
        'Cars are more than our business – they are our passion!',
        "What details will EFJ’s auction sheet translation service provide?",
        "Complete vehicle ownership and maintenance history",
        "Independent inspector’s notes describing the car’s mechanical, electrical, and structural condition",
        "Detailed assessment of exterior and interior flaws",
        "GENERAL",
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate veritatis, voluptates. Accusamus accusantium animi aperiam commodi cumque dolore earum eveniet facilis fugit iusto magnam magni numquam, qui soluta ullam ut.",
        'Starting at',
        '$15',
        "CUSTOMER SUPPORT",
        "Need Assistance?",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.",
        "SECURED PAYMENT",
        "Safe & Fast",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.",
        "RETURNS",
        "Easy & Free",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.",
        "Subscribe To Our Newsletter",
        "Get all the latest information on Events, Sales and Offers.",
        "Your E-mail Address",
        "SUBSCRIBE NOW!",
        "About us detail",
        "Help & FAQs",
        "Order Tracking",
        "Shipping & Delivery",
        "SOCIAL MEDIA",
        "PAYMENT METHODS",
        "Billing Details",
        "Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.",
        "First Name",
        "Email",
        "Order Notes",
        "Notes about your order e.g. special notes",
        "Attach your auction sheet",
        "Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.",
        "YOUR ORDER",
        "Select your plan",
        "Payment Methods",
        "Lor ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate veritatis, voluptates.
                            Accusamus accusantium animi aperiam commodi cumque dolore earum eveniet facilis fugit iusto
                            magnam magni numquam, qui soluta ullam ut.",
        "FROM BUYERS",
        "bottomtextvcv",
        "bottomtext2",
        "Place Order",
        "Cash On Delivery",
        "PayPal",
        "SUCCESS",
        "Your order has",
        "An unexpected error has occured. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.",
        "GO BACK TO HOME PAGE"

    ];


    public function run(): void
    {
      $values = $this->values;

      foreach ($values as $value)
      {
          $key = Str::slug($value);

          Text::updateOrCreate(
              ['key' => Str::limit($key, 15, $end='end'),],
              [
              'group' => 'site',
              'key' => Str::limit($key, 15, $end='end'),
              'value' => $value
          ]);
      }
    }
}
