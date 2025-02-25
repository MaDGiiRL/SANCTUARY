<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public $services = [
        [
            "id" => 1,
            "name" => "Rejuvenating Facial",
            "description" => "A revitalizing facial treatment designed to cleanse, exfoliate, and hydrate the skin, leaving it glowing and refreshed.",
            "target" => "Individuals seeking to improve skin appearance and hydration.",
            "image" => "/media/services/Rejuvenating Facial.png",
        ],
        [
            "id" => 2,
            "name" => "Deep Tissue Massage",
            "description" => "A therapeutic massage that targets deeper layers of muscle and connective tissue to relieve chronic pain and tension.",
            "target" => "Those with muscle soreness or chronic pain issues.",
            "image" => "/media/services/Deep Tissue Massage.png",
        ],
        [
            "id" => 3,
            "name" => "Aromatherapy Massage",
            "description" => "A relaxing massage infused with essential oils to promote relaxation and emotional well-being.",
            "target" => "Anyone looking for stress relief and relaxation.",
            "image" => "/media/services/Aromatherapy Massage.png",
        ],
        [
            "id" => 4,
            "name" => "Hydrating Body Wrap",
            "description" => "A luxurious treatment that deeply hydrates the skin using nourishing ingredients to leave it soft and supple.",
            "target" => "Individuals with dry or dehydrated skin.",
            "image" => "/media/services/Hydrating Body Wrap.png",
        ],
        [
            "id" => 5,
            "name" => "Exfoliating Scrub",
            "description" => "A body scrub that exfoliates dead skin cells, revealing smoother, brighter skin underneath.",
            "target" => "Those wanting to rejuvenate their skin and improve texture.",
            "image" => "/media/services/Exfoliating Scrub.png",
        ],
        [
            "id" => 6,
            "name" => "Brazilian Waxing",
            "description" => "A professional waxing service that removes unwanted hair for smooth, long-lasting results.",
            "target" => "Individuals seeking a clean and hair-free bikini area.",
            "image" => "/media/services/Brazilian Waxing.png",
        ],
        [
            "id" => 7,
            "name" => "Chemical Peel",
            "description" => "A skin treatment that uses chemical solutions to exfoliate and improve the texture of the skin, reducing fine lines and blemishes.",
            "target" => "Those looking to address skin imperfections and signs of aging.",
            "image" => "/media/services/Chemical Peel.png",
        ],
        [
            "id" => 8,
            "name" => "Microdermabrasion",
            "description" => "A non-invasive procedure that exfoliates the skin using fine crystals, promoting cell turnover and revealing a fresh complexion.",
            "target" => "Individuals wanting to enhance skin texture and clarity.",
            "image" => "/media/services/Microdermabrasion.png",
        ]
    ];


    public $teachers = [
        [
            'id' => 1,
            'name' => 'Sophia',
            'surname' => 'Smith',
            'age' => 30,
            'subject' => 'Makeup Artistry',
            'description' => 'Learn advanced makeup techniques for various occasions and clients.',
            'schedule' => 'Monday - Wednesday 10:00 - 12:00',
            'requirements' => 'Brush set, basic color palette, various shades of foundation.'
        ],
        [
            'id' => 2,
            'name' => 'Olivia',
            'surname' => 'Johnson',
            'age' => 28,
            'subject' => 'Skincare',
            'description' => 'Deepen your knowledge of skincare and the best techniques for aesthetic treatments.',
            'schedule' => 'Tuesday - Thursday 14:00 - 16:00',
            'requirements' => 'Facial cleansers, moisturizers, masks, and cleansing tools.'
        ],
        [
            'id' => 3,
            'name' => 'Emma',
            'surname' => 'Williams',
            'age' => 35,
            'subject' => 'Nail Technology',
            'description' => 'Become an expert in nail reconstruction and professional nail art.',
            'schedule' => 'Monday - Friday 16:00 - 18:00',
            'requirements' => 'Nail files, UV gel, polishes, LED lamp, and decoration tools.'
        ],
        [
            'id' => 4,
            'name' => 'Ava',
            'surname' => 'Brown',
            'age' => 26,
            'subject' => 'Hair Styling',
            'description' => 'Gain skills in cutting, coloring, and professional hairstyling.',
            'schedule' => 'Wednesday - Saturday 09:00 - 11:00',
            'requirements' => 'Professional scissors, hairdryer, straighteners, and styling products.'
        ],
        [
            'id' => 5,
            'name' => 'Mia',
            'surname' => 'Davis',
            'age' => 32,
            'subject' => 'Massage Therapy',
            'description' => 'Learn massage therapy techniques for physical and mental well-being.',
            'schedule' => 'Tuesday - Friday 11:00 - 13:00',
            'requirements' => 'Essential oils, massage table, towels, and hot stones.'
        ],
    ];


    public function home()
    {
        return view('home');
    }


    public function services()
    {
        return view('services', ['services' => $this->services]);
    }


    public function academy()
    {
        return view('academy', ['academy' => $this->teachers]);
    }
}
